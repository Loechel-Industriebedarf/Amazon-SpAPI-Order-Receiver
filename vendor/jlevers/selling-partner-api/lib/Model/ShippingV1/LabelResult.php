<?php
/**
 * LabelResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace SellingPartnerApi\Model\ShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * LabelResult Class Doc Comment
 *
 * @category Class
 * @description Label details including label stream, format, size.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LabelResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'container_reference_id' => 'string',
        'tracking_id' => 'string',
        'label' => '\SellingPartnerApi\Model\ShippingV1\Label'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'container_reference_id' => null,
        'tracking_id' => null,
        'label' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'container_reference_id' => 'containerReferenceId',
        'tracking_id' => 'trackingId',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'container_reference_id' => 'setContainerReferenceId',
        'tracking_id' => 'setTrackingId',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_reference_id' => 'getContainerReferenceId',
        'tracking_id' => 'getTrackingId',
        'label' => 'getLabel'
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
        $this->container['container_reference_id'] = $data['container_reference_id'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['container_reference_id']) && (mb_strlen($this->container['container_reference_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'container_reference_id', the character length must be smaller than or equal to 40.";
        }

        return $invalidProperties;
    }


    /**
     * Gets container_reference_id
     *
     * @return string|null
     */
    public function getContainerReferenceId()
    {
        return $this->container['container_reference_id'];
    }

    /**
     * Sets container_reference_id
     *
     * @param string|null $container_reference_id An identifier for the container. This must be unique within all the containers in the same shipment.
     *
     * @return self
     */
    public function setContainerReferenceId($container_reference_id)
    {
        if (!is_null($container_reference_id) && (mb_strlen($container_reference_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $container_reference_id when calling LabelResult., must be smaller than or equal to 40.');
        }

        $this->container['container_reference_id'] = $container_reference_id;

        return $this;
    }
    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id The tracking identifier assigned to the container.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }
    /**
     * Gets label
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Label|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Label|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }
}


