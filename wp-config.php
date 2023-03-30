<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beautystore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q=<}+>6ArkF5|_n2c(55mv.u=Codz[7&YU#BvsN_9C?;y+Y1cEqT^CPXw.{wiL$q' );
define( 'SECURE_AUTH_KEY',  'MDm^9kXbNbbpDnEdTN@`fkMtHlj5qbKo?:zBe7Uc8|9$mnpI+vxAo|joOz;U;R?y' );
define( 'LOGGED_IN_KEY',    '9oJ?s5{zYvZ@=>3Jfw=l(*gYe52hwMwada^hd0CNw2BWCOh&R,ONVV`2GW<W>0)y' );
define( 'NONCE_KEY',        'x!JSi]HXoQ*N(Ehsf3~/$5)HCX}yVi4uqN(^$Xb6kGi=CLhk78LOJUy^-NMe``Q8' );
define( 'AUTH_SALT',        'vQ}1v/+Z,Oli@Q,^)C_oq+nk+8`2e:Q4`)f#I_$=Tb37%6rf2hh=A|UO(6UOWt8b' );
define( 'SECURE_AUTH_SALT', 'If!H)yV5Y+r!? !s^|?1W8#uCB=j,:15&F9.CrQfJG]lVZ[TO@-?4N3<.klM:*I/' );
define( 'LOGGED_IN_SALT',   'NOxlNLE$mWE/]zwR+,RP2&Ze`G+`if>_>n.m!kzA8^1_)YG{w:^1k=p8&?1JA:4e' );
define( 'NONCE_SALT',       '=[F3#kSy/[ThCZK[?>vZC[`taZrKGvkuil8GnX}zE<K4z(+)3fL01l$-P2F2MjPJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
