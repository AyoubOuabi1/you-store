<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/criterion_category_availability.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information of category availability, per advertising channel.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.CriterionCategoryAvailability</code>
 */
class CriterionCategoryAvailability extends \Google\Protobuf\Internal\Message
{
    /**
     * Channel types and subtypes that are available to the category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.CriterionCategoryChannelAvailability channel = 1;</code>
     */
    protected $channel = null;
    /**
     * Locales that are available to the category for the channel.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.CriterionCategoryLocaleAvailability locale = 2;</code>
     */
    private $locale;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Common\CriterionCategoryChannelAvailability $channel
     *           Channel types and subtypes that are available to the category.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\CriterionCategoryLocaleAvailability>|\Google\Protobuf\Internal\RepeatedField $locale
     *           Locales that are available to the category for the channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\CriterionCategoryAvailability::initOnce();
        parent::__construct($data);
    }

    /**
     * Channel types and subtypes that are available to the category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.CriterionCategoryChannelAvailability channel = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\CriterionCategoryChannelAvailability|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * Channel types and subtypes that are available to the category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.CriterionCategoryChannelAvailability channel = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\CriterionCategoryChannelAvailability $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\CriterionCategoryChannelAvailability::class);
        $this->channel = $var;

        return $this;
    }

    /**
     * Locales that are available to the category for the channel.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.CriterionCategoryLocaleAvailability locale = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Locales that are available to the category for the channel.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.CriterionCategoryLocaleAvailability locale = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\CriterionCategoryLocaleAvailability>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocale($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\CriterionCategoryLocaleAvailability::class);
        $this->locale = $arr;

        return $this;
    }

}

