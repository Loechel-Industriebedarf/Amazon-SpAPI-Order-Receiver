<?php
/**
 * BrandRefinement
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
 * BrandRefinement Class Doc Comment
 *
 * @category Class
 * @description Description of a brand that can be used to get more fine-grained search results.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BrandRefinement extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandRefinement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number_of_results' => 'int',
        'brand_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number_of_results' => null,
        'brand_name' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number_of_results' => 'numberOfResults',
        'brand_name' => 'brandName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'number_of_results' => 'setNumberOfResults',
        'brand_name' => 'setBrandName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_results' => 'getNumberOfResults',
        'brand_name' => 'getBrandName'
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
        $this->container['number_of_results'] = $data['number_of_results'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['number_of_results'] === null) {
            $invalidProperties[] = "'number_of_results' can't be null";
        }
        if ($this->container['brand_name'] === null) {
            $invalidProperties[] = "'brand_name' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets number_of_results
     *
     * @return int
     */
    public function getNumberOfResults()
    {
        return $this->container['number_of_results'];
    }

    /**
     * Sets number_of_results
     *
     * @param int $number_of_results The estimated number of results that would still be returned if refinement key applied.
     *
     * @return self
     */
    public function setNumberOfResults($number_of_results)
    {
        $this->container['number_of_results'] = $number_of_results;

        return $this;
    }
    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name Brand name. For display and can be used as a search refinement.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }
}


