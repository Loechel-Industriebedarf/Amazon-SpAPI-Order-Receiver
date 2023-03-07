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
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PurchaseShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the purchaseShipment operation.
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
        'request_token' => 'string',
        'rate_id' => 'string',
        'requested_document_specification' => '\SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification',
        'requested_value_added_services' => '\SellingPartnerApi\Model\ShippingV2\RequestedValueAddedService[]',
        'additional_inputs' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_token' => null,
        'rate_id' => null,
        'requested_document_specification' => null,
        'requested_value_added_services' => null,
        'additional_inputs' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_token' => 'requestToken',
        'rate_id' => 'rateId',
        'requested_document_specification' => 'requestedDocumentSpecification',
        'requested_value_added_services' => 'requestedValueAddedServices',
        'additional_inputs' => 'additionalInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'request_token' => 'setRequestToken',
        'rate_id' => 'setRateId',
        'requested_document_specification' => 'setRequestedDocumentSpecification',
        'requested_value_added_services' => 'setRequestedValueAddedServices',
        'additional_inputs' => 'setAdditionalInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_token' => 'getRequestToken',
        'rate_id' => 'getRateId',
        'requested_document_specification' => 'getRequestedDocumentSpecification',
        'requested_value_added_services' => 'getRequestedValueAddedServices',
        'additional_inputs' => 'getAdditionalInputs'
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
        $this->container['request_token'] = $data['request_token'] ?? null;
        $this->container['rate_id'] = $data['rate_id'] ?? null;
        $this->container['requested_document_specification'] = $data['requested_document_specification'] ?? null;
        $this->container['requested_value_added_services'] = $data['requested_value_added_services'] ?? null;
        $this->container['additional_inputs'] = $data['additional_inputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['request_token'] === null) {
            $invalidProperties[] = "'request_token' can't be null";
        }
        if ($this->container['rate_id'] === null) {
            $invalidProperties[] = "'rate_id' can't be null";
        }
        if ($this->container['requested_document_specification'] === null) {
            $invalidProperties[] = "'requested_document_specification' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets request_token
     *
     * @return string
     */
    public function getRequestToken()
    {
        return $this->container['request_token'];
    }

    /**
     * Sets request_token
     *
     * @param string $request_token A unique token generated to identify a getRates operation.
     *
     * @return self
     */
    public function setRequestToken($request_token)
    {
        $this->container['request_token'] = $request_token;

        return $this;
    }
    /**
     * Gets rate_id
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string $rate_id An identifier for the rate (shipment offering) provided by a shipping service provider.
     *
     * @return self
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }
    /**
     * Gets requested_document_specification
     *
     * @return \SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification
     */
    public function getRequestedDocumentSpecification()
    {
        return $this->container['requested_document_specification'];
    }

    /**
     * Sets requested_document_specification
     *
     * @param \SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification $requested_document_specification requested_document_specification
     *
     * @return self
     */
    public function setRequestedDocumentSpecification($requested_document_specification)
    {
        $this->container['requested_document_specification'] = $requested_document_specification;

        return $this;
    }
    /**
     * Gets requested_value_added_services
     *
     * @return \SellingPartnerApi\Model\ShippingV2\RequestedValueAddedService[]|null
     */
    public function getRequestedValueAddedServices()
    {
        return $this->container['requested_value_added_services'];
    }

    /**
     * Sets requested_value_added_services
     *
     * @param \SellingPartnerApi\Model\ShippingV2\RequestedValueAddedService[]|null $requested_value_added_services The value-added services to be added to a shipping service purchase.
     *
     * @return self
     */
    public function setRequestedValueAddedServices($requested_value_added_services)
    {
        $this->container['requested_value_added_services'] = $requested_value_added_services;

        return $this;
    }
    /**
     * Gets additional_inputs
     *
     * @return map[string,object]|null
     */
    public function getAdditionalInputs()
    {
        return $this->container['additional_inputs'];
    }

    /**
     * Sets additional_inputs
     *
     * @param map[string,object]|null $additional_inputs The additional inputs required to purchase a shipping offering, in JSON format. The JSON provided here must adhere to the JSON schema that is returned in the response to the getAdditionalInputs operation. Additional inputs are only required when indicated by the requiresAdditionalInputs property in the response to the getRates operation.
     *
     * @return self
     */
    public function setAdditionalInputs($additional_inputs)
    {
        $this->container['additional_inputs'] = $additional_inputs;

        return $this;
    }
}


