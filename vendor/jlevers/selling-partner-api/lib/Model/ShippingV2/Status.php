<?php
/**
 * Status
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @description The status of the package being shipped.
 * @package  SellingPartnerApi
 * @group 
 */
class Status
{
    public $value;

    /**
     * Possible values of this enum
     */
    const PRE_TRANSIT = 'PreTransit';
    const IN_TRANSIT = 'InTransit';
    const DELIVERED = 'Delivered';
    const LOST = 'Lost';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    const REJECTED = 'Rejected';
    const UNDELIVERABLE = 'Undeliverable';
    const DELIVERY_ATTEMPTED = 'DeliveryAttempted';
    const PICKUP_CANCELLED = 'PickupCancelled';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::PRE_TRANSIT,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::LOST,
            self::OUT_FOR_DELIVERY,
            self::REJECTED,
            self::UNDELIVERABLE,
            self::DELIVERY_ATTEMPTED,
            self::PICKUP_CANCELLED,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'Status', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


