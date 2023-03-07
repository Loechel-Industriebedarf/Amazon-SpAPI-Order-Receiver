<?php
/**
 * PurchaseShipmentRequest
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
 * PurchaseShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the purchaseShipment operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PurchaseShipmentRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_reference_id' => 'string',
        'ship_to' => '\SellingPartnerApi\Model\ShippingV1\Address',
        'ship_from' => '\SellingPartnerApi\Model\ShippingV1\Address',
        'ship_date' => 'string',
        'service_type' => '\SellingPartnerApi\Model\ShippingV1\ServiceType',
        'containers' => '\SellingPartnerApi\Model\ShippingV1\Container[]',
        'label_specification' => '\SellingPartnerApi\Model\ShippingV1\LabelSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_reference_id' => null,
        'ship_to' => null,
        'ship_from' => null,
        'ship_date' => null,
        'service_type' => null,
        'containers' => null,
        'label_specification' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_reference_id' => 'clientReferenceId',
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'ship_date' => 'shipDate',
        'service_type' => 'serviceType',
        'containers' => 'containers',
        'label_specification' => 'labelSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'client_reference_id' => 'setClientReferenceId',
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'ship_date' => 'setShipDate',
        'service_type' => 'setServiceType',
        'containers' => 'setContainers',
        'label_specification' => 'setLabelSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_reference_id' => 'getClientReferenceId',
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'ship_date' => 'getShipDate',
        'service_type' => 'getServiceType',
        'containers' => 'getContainers',
        'label_specification' => 'getLabelSpecification'
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
        $this->container['client_reference_id'] = $data['client_reference_id'] ?? null;
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
        $this->container['label_specification'] = $data['label_specification'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['client_reference_id'] === null) {
            $invalidProperties[] = "'client_reference_id' can't be null";
        }
        if ((mb_strlen($this->container['client_reference_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'client_reference_id', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['service_type'] === null) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
        }
        if ($this->container['label_specification'] === null) {
            $invalidProperties[] = "'label_specification' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets client_reference_id
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     *
     * @param string $client_reference_id Client reference id.
     *
     * @return self
     */
    public function setClientReferenceId($client_reference_id)
    {
        if ((mb_strlen($client_reference_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $client_reference_id when calling PurchaseShipmentRequest., must be smaller than or equal to 40.');
        }

        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }
    /**
     * Gets ship_to
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Address $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }
    /**
     * Gets ship_from
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Address $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }
    /**
     * Gets ship_date
     *
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string|null $ship_date The start date and time. Must be in ISO 8601 format. This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets service_type
     *
     * @return \SellingPartnerApi\Model\ShippingV1\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param \SellingPartnerApi\Model\ShippingV1\ServiceType $service_type service_type
     *
     * @return self
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }
    /**
     * Gets containers
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Container[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Container[] $containers A list of container.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }
    /**
     * Gets label_specification
     *
     * @return \SellingPartnerApi\Model\ShippingV1\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification
     *
     * @param \SellingPartnerApi\Model\ShippingV1\LabelSpecification $label_specification label_specification
     *
     * @return self
     */
    public function setLabelSpecification($label_specification)
    {
        $this->container['label_specification'] = $label_specification;

        return $this;
    }
}


