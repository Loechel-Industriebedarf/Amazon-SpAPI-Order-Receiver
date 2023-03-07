<?php
/**
 * Dimensions
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Dimensions Class Doc Comment
 *
 * @category Class
 * @description The dimensions of the scheduled package.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Dimensions extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dimensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit' => '\SellingPartnerApi\Model\EasyShipV20220323\UnitOfLength',
        'identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit' => null,
        'identifier' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'unit' => 'unit',
        'identifier' => 'identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit' => 'setUnit',
        'identifier' => 'setIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit' => 'getUnit',
        'identifier' => 'getIdentifier'
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
        $this->container['length'] = $data['length'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['length']) && ($this->container['length'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) > 255)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['identifier']) && (mb_strlen($this->container['identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'identifier', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length The numerical value of the specified dimension.
     *
     * @return self
     */
    public function setLength($length)
    {

        if (!is_null($length) && ($length < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $length when calling Dimensions., must be bigger than or equal to 0.01.');
        }

        $this->container['length'] = $length;

        return $this;
    }
    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width The numerical value of the specified dimension.
     *
     * @return self
     */
    public function setWidth($width)
    {

        if (!is_null($width) && ($width < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $width when calling Dimensions., must be bigger than or equal to 0.01.');
        }

        $this->container['width'] = $width;

        return $this;
    }
    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height The numerical value of the specified dimension.
     *
     * @return self
     */
    public function setHeight($height)
    {

        if (!is_null($height) && ($height < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $height when calling Dimensions., must be bigger than or equal to 0.01.');
        }

        $this->container['height'] = $height;

        return $this;
    }
    /**
     * Gets unit
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\UnitOfLength|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\UnitOfLength|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }
    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier A string of up to 255 characters.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (!is_null($identifier) && (mb_strlen($identifier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling Dimensions., must be smaller than or equal to 255.');
        }
        if (!is_null($identifier) && (mb_strlen($identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling Dimensions., must be bigger than or equal to 1.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }
}


