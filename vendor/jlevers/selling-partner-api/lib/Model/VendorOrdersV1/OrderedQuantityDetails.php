<?php
/**
 * OrderedQuantityDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorOrdersV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * OrderedQuantityDetails Class Doc Comment
 *
 * @category Class
 * @description Details of item quantity ordered
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderedQuantityDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderedQuantityDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'updated_date' => 'string',
        'ordered_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity',
        'cancelled_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'updated_date' => null,
        'ordered_quantity' => null,
        'cancelled_quantity' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'updated_date' => 'updatedDate',
        'ordered_quantity' => 'orderedQuantity',
        'cancelled_quantity' => 'cancelledQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'updated_date' => 'setUpdatedDate',
        'ordered_quantity' => 'setOrderedQuantity',
        'cancelled_quantity' => 'setCancelledQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updated_date' => 'getUpdatedDate',
        'ordered_quantity' => 'getOrderedQuantity',
        'cancelled_quantity' => 'getCancelledQuantity'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['updated_date'] = $data['updated_date'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['cancelled_quantity'] = $data['cancelled_quantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets updated_date
     *
     * @return string|null
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param string|null $updated_date The date when the line item quantity was updated by buyer. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }
    /**
     * Gets ordered_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $ordered_quantity ordered_quantity
     *
     * @return self
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }
    /**
     * Gets cancelled_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getCancelledQuantity()
    {
        return $this->container['cancelled_quantity'];
    }

    /**
     * Sets cancelled_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $cancelled_quantity cancelled_quantity
     *
     * @return self
     */
    public function setCancelledQuantity($cancelled_quantity)
    {
        $this->container['cancelled_quantity'] = $cancelled_quantity;

        return $this;
    }
}

