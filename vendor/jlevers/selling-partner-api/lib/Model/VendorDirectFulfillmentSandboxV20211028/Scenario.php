<?php
/**
 * Scenario
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data
 *
 * The Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data provides programmatic access to vendor direct fulfillment sandbox test data.
 *
 * The version of the OpenAPI document: 2021-10-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Scenario Class Doc Comment
 *
 * @category Class
 * @description A scenario test case response returned when the request is successful.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Scenario extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Scenario';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scenario_id' => 'string',
        'orders' => '\SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TestOrder[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scenario_id' => null,
        'orders' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'scenario_id' => 'scenarioId',
        'orders' => 'orders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'scenario_id' => 'setScenarioId',
        'orders' => 'setOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scenario_id' => 'getScenarioId',
        'orders' => 'getOrders'
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
        $this->container['scenario_id'] = $data['scenario_id'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scenario_id'] === null) {
            $invalidProperties[] = "'scenario_id' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets scenario_id
     *
     * @return string
     */
    public function getScenarioId()
    {
        return $this->container['scenario_id'];
    }

    /**
     * Sets scenario_id
     *
     * @param string $scenario_id An identifier that identifies the type of scenario that user can use for testing.
     *
     * @return self
     */
    public function setScenarioId($scenario_id)
    {
        $this->container['scenario_id'] = $scenario_id;

        return $this;
    }
    /**
     * Gets orders
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TestOrder[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentSandboxV20211028\TestOrder[] $orders A list of orders that can be used by the caller to test each life cycle or scenario.
     *
     * @return self
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }
}


