<?php
/**
 * Refinements
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
 * Refinements Class Doc Comment
 *
 * @category Class
 * @description Search refinements.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Refinements extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refinements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brands' => '\SellingPartnerApi\Model\CatalogItemsV20220401\BrandRefinement[]',
        'classifications' => '\SellingPartnerApi\Model\CatalogItemsV20220401\ClassificationRefinement[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brands' => null,
        'classifications' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'brands' => 'brands',
        'classifications' => 'classifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'brands' => 'setBrands',
        'classifications' => 'setClassifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brands' => 'getBrands',
        'classifications' => 'getClassifications'
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
        $this->container['brands'] = $data['brands'] ?? null;
        $this->container['classifications'] = $data['classifications'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['brands'] === null) {
            $invalidProperties[] = "'brands' can't be null";
        }
        if ($this->container['classifications'] === null) {
            $invalidProperties[] = "'classifications' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets brands
     *
     * @return \SellingPartnerApi\Model\CatalogItemsV20220401\BrandRefinement[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param \SellingPartnerApi\Model\CatalogItemsV20220401\BrandRefinement[] $brands Brand search refinements.
     *
     * @return self
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }
    /**
     * Gets classifications
     *
     * @return \SellingPartnerApi\Model\CatalogItemsV20220401\ClassificationRefinement[]
     */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
     * Sets classifications
     *
     * @param \SellingPartnerApi\Model\CatalogItemsV20220401\ClassificationRefinement[] $classifications Classification search refinements.
     *
     * @return self
     */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;

        return $this;
    }
}

