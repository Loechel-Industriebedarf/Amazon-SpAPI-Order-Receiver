<?php
/**
 * ImageComponent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ImageComponent Class Doc Comment
 *
 * @category Class
 * @description A reference to an image, hosted in the A+ Content media library.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImageComponent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upload_destination_id' => 'string',
        'image_crop_specification' => '\SellingPartnerApi\Model\AplusContentV20201101\ImageCropSpecification',
        'alt_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'upload_destination_id' => null,
        'image_crop_specification' => null,
        'alt_text' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'upload_destination_id' => 'uploadDestinationId',
        'image_crop_specification' => 'imageCropSpecification',
        'alt_text' => 'altText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'upload_destination_id' => 'setUploadDestinationId',
        'image_crop_specification' => 'setImageCropSpecification',
        'alt_text' => 'setAltText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_destination_id' => 'getUploadDestinationId',
        'image_crop_specification' => 'getImageCropSpecification',
        'alt_text' => 'getAltText'
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
        $this->container['upload_destination_id'] = $data['upload_destination_id'] ?? null;
        $this->container['image_crop_specification'] = $data['image_crop_specification'] ?? null;
        $this->container['alt_text'] = $data['alt_text'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['upload_destination_id'] === null) {
            $invalidProperties[] = "'upload_destination_id' can't be null";
        }
        if ((mb_strlen($this->container['upload_destination_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'upload_destination_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_crop_specification'] === null) {
            $invalidProperties[] = "'image_crop_specification' can't be null";
        }
        if ($this->container['alt_text'] === null) {
            $invalidProperties[] = "'alt_text' can't be null";
        }
        if ((mb_strlen($this->container['alt_text']) > 200)) {
            $invalidProperties[] = "invalid value for 'alt_text', the character length must be smaller than or equal to 200.";
        }

        return $invalidProperties;
    }


    /**
     * Gets upload_destination_id
     *
     * @return string
     */
    public function getUploadDestinationId()
    {
        return $this->container['upload_destination_id'];
    }

    /**
     * Sets upload_destination_id
     *
     * @param string $upload_destination_id This identifier is provided by the Selling Partner API for Uploads.
     *
     * @return self
     */
    public function setUploadDestinationId($upload_destination_id)
    {

        if ((mb_strlen($upload_destination_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $upload_destination_id when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['upload_destination_id'] = $upload_destination_id;

        return $this;
    }
    /**
     * Gets image_crop_specification
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ImageCropSpecification
     */
    public function getImageCropSpecification()
    {
        return $this->container['image_crop_specification'];
    }

    /**
     * Sets image_crop_specification
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ImageCropSpecification $image_crop_specification image_crop_specification
     *
     * @return self
     */
    public function setImageCropSpecification($image_crop_specification)
    {
        $this->container['image_crop_specification'] = $image_crop_specification;

        return $this;
    }
    /**
     * Gets alt_text
     *
     * @return string
     */
    public function getAltText()
    {
        return $this->container['alt_text'];
    }

    /**
     * Sets alt_text
     *
     * @param string $alt_text The alternative text for the image.
     *
     * @return self
     */
    public function setAltText($alt_text)
    {
        if ((mb_strlen($alt_text) > 200)) {
            throw new \InvalidArgumentException('invalid length for $alt_text when calling ImageComponent., must be smaller than or equal to 200.');
        }

        $this->container['alt_text'] = $alt_text;

        return $this;
    }
}

