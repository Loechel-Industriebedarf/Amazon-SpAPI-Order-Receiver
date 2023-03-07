<?php
/**
 * ItemImage
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, refer to the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogItemsV20220401;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemImage Class Doc Comment
 *
 * @category Class
 * @description Image for an item in the Amazon catalog.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemImage extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'variant' => 'string',
        'link' => 'string',
        'height' => 'int',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'variant' => null,
        'link' => null,
        'height' => null,
        'width' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'variant' => 'variant',
        'link' => 'link',
        'height' => 'height',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'variant' => 'setVariant',
        'link' => 'setLink',
        'height' => 'setHeight',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variant' => 'getVariant',
        'link' => 'getLink',
        'height' => 'getHeight',
        'width' => 'getWidth'
    ];



    const VARIANT_MAIN = 'MAIN';
    const VARIANT_PT01 = 'PT01';
    const VARIANT_PT02 = 'PT02';
    const VARIANT_PT03 = 'PT03';
    const VARIANT_PT04 = 'PT04';
    const VARIANT_PT05 = 'PT05';
    const VARIANT_PT06 = 'PT06';
    const VARIANT_PT07 = 'PT07';
    const VARIANT_PT08 = 'PT08';
    const VARIANT_SWCH = 'SWCH';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariantAllowableValues()
    {
        $baseVals = [
            self::VARIANT_MAIN,
            self::VARIANT_PT01,
            self::VARIANT_PT02,
            self::VARIANT_PT03,
            self::VARIANT_PT04,
            self::VARIANT_PT05,
            self::VARIANT_PT06,
            self::VARIANT_PT07,
            self::VARIANT_PT08,
            self::VARIANT_SWCH,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
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
        $this->container['variant'] = $data['variant'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['variant'] === null) {
            $invalidProperties[] = "'variant' can't be null";
        }
        $allowedValues = $this->getVariantAllowableValues();
        if (
            !is_null($this->container['variant']) &&
            !in_array(strtoupper($this->container['variant']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'variant', must be one of '%s'",
                $this->container['variant'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets variant
     *
     * @return string
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param string $variant Variant of the image, such as `MAIN` or `PT01`.
     *
     * @return self
     */
    public function setVariant($variant)
    {
        $allowedValues = $this->getVariantAllowableValues();
        if (!in_array(strtoupper($variant), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'variant', must be one of '%s'",
                    $variant,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variant'] = $variant;

        return $this;
    }
    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link Link, or URL, for the image.
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }
    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the image in pixels.
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the image in pixels.
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
}


