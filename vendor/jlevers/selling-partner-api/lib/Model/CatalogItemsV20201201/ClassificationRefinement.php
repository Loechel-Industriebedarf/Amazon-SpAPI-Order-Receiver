<?php
/**
 * ClassificationRefinement
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, see the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogItemsV20201201;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ClassificationRefinement Class Doc Comment
 *
 * @category Class
 * @description Description of a classification that can be used to get more fine-grained search results.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ClassificationRefinement extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClassificationRefinement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number_of_results' => 'int',
        'display_name' => 'string',
        'classification_id' => 'string'
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
        'display_name' => null,
        'classification_id' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number_of_results' => 'numberOfResults',
        'display_name' => 'displayName',
        'classification_id' => 'classificationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'number_of_results' => 'setNumberOfResults',
        'display_name' => 'setDisplayName',
        'classification_id' => 'setClassificationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_results' => 'getNumberOfResults',
        'display_name' => 'getDisplayName',
        'classification_id' => 'getClassificationId'
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['classification_id'] = $data['classification_id'] ?? null;
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
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['classification_id'] === null) {
            $invalidProperties[] = "'classification_id' can't be null";
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Display name for the classification.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }
    /**
     * Gets classification_id
     *
     * @return string
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param string $classification_id Identifier for the classification that can be used for search refinement purposes.
     *
     * @return self
     */
    public function setClassificationId($classification_id)
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }
}


