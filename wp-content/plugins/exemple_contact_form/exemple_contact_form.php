<?php
/*
Plugin Name: Contact form plugin
Description: formulaire de contact personnalisé à votre site web.
Version: 1.0
Author: JAMH
*/

function contact(){
    $content = '';
    $content .= "
    <form action='http://beauty-store.test/big-thanks/' method='post'>
        <p>
            <label for='name'>Nom</label><br>
            <input class='form-controle' type='text' id='name' name='name' required>
        </P
        <p>
            <label for='email'>Adresse e-mail</label><br>
            <input class='form-controle' type='email' id='email' name='email' required>
        </P
        <p>
            <label for='subject'>Sujet</label><br>
            <input class='form-controle' type='text' id='subject' name='subject' required>
        </P
        <p>
            <label for='message'>Message</label><br>
            <textarea class='form-controle' id='message' name='message' required></textarea>
            <button type='submit' name='envoyer'>Envoyer</button>
        </P
    </form>";
    return $content;
}
function sendInfo(){
    if(isset($_POST['envoyer'])){
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        $to = 'jam7.mohamed@gmail.com';
        $subjectEmail = "test formulaire";
        $send = $name.' '.$email.' '.$subject.' '.$message;
        wp_mail($to,$subjectEmail,$send);
    }
}

add_shortcode('form_contact','contact');
add_action('wp_head','sendInfo');