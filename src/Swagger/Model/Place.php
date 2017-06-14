<?php
/**
 * Place
 *
 * PHP version 5
 *
 * @category Class
 * @package  Abulia\TflUnified\Swagger
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transport for London Unified API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Abulia\TflUnified\Swagger\Model;

use \ArrayAccess;
use Illuminate\Contracts\Support\Jsonable;

/**
 * Place Class Doc Comment
 *
 * @category    Class
 * @package     Abulia\TflUnified\Swagger
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Place implements ArrayAccess, Jsonable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Place';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_properties' => '\Abulia\TflUnified\Swagger\Model\AdditionalProperties[]',
        'children' => '\Abulia\TflUnified\Swagger\Model\Place[]',
        'children_urls' => 'string[]',
        'common_name' => 'string',
        'distance' => 'double',
        'id' => 'string',
        'lat' => 'double',
        'lon' => 'double',
        'place_type' => 'string',
        'url' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_properties' => 'additionalProperties',
        'children' => 'children',
        'children_urls' => 'childrenUrls',
        'common_name' => 'commonName',
        'distance' => 'distance',
        'id' => 'id',
        'lat' => 'lat',
        'lon' => 'lon',
        'place_type' => 'placeType',
        'url' => 'url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_properties' => 'setAdditionalProperties',
        'children' => 'setChildren',
        'children_urls' => 'setChildrenUrls',
        'common_name' => 'setCommonName',
        'distance' => 'setDistance',
        'id' => 'setId',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'place_type' => 'setPlaceType',
        'url' => 'setUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_properties' => 'getAdditionalProperties',
        'children' => 'getChildren',
        'children_urls' => 'getChildrenUrls',
        'common_name' => 'getCommonName',
        'distance' => 'getDistance',
        'id' => 'getId',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'place_type' => 'getPlaceType',
        'url' => 'getUrl'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['children_urls'] = isset($data['children_urls']) ? $data['children_urls'] : null;
        $this->container['common_name'] = isset($data['common_name']) ? $data['common_name'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['place_type'] = isset($data['place_type']) ? $data['place_type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets additional_properties
     * @return \Abulia\TflUnified\Swagger\Model\AdditionalProperties[]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     * @param \Abulia\TflUnified\Swagger\Model\AdditionalProperties[] $additional_properties A bag of additional key/value pairs with extra information about this place.
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets children
     * @return \Abulia\TflUnified\Swagger\Model\Place[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Abulia\TflUnified\Swagger\Model\Place[] $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets children_urls
     * @return string[]
     */
    public function getChildrenUrls()
    {
        return $this->container['children_urls'];
    }

    /**
     * Sets children_urls
     * @param string[] $children_urls
     * @return $this
     */
    public function setChildrenUrls($children_urls)
    {
        $this->container['children_urls'] = $children_urls;

        return $this;
    }

    /**
     * Gets common_name
     * @return string
     */
    public function getCommonName()
    {
        return $this->container['common_name'];
    }

    /**
     * Sets common_name
     * @param string $common_name A human readable name.
     * @return $this
     */
    public function setCommonName($common_name)
    {
        $this->container['common_name'] = $common_name;

        return $this;
    }

    /**
     * Gets distance
     * @return double
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     * @param double $distance The distance of the place from its search point, if this is the result              of a geographical search, otherwise zero.
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id A unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lat
     * @return double
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     * @param double $lat WGS84 latitude of the location.
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     * @return double
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     * @param double $lon WGS84 longitude of the location.
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets place_type
     * @return string
     */
    public function getPlaceType()
    {
        return $this->container['place_type'];
    }

    /**
     * Sets place_type
     * @param string $place_type The type of Place. See /Place/Meta/placeTypes for possible values.
     * @return $this
     */
    public function setPlaceType($place_type)
    {
        $this->container['place_type'] = $place_type;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The unique location of this resource.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Abulia\TflUnified\Swagger\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Abulia\TflUnified\Swagger\ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * To allow implict conversion to JSON by Laravel.
     */
    public function toJson($options = 0)
    {
        return $this->__toString();
    }

    /**
     * For convenient property based access.
     */
    public function __get($name)
    {
        if (isset(static::$getters[$name])) {
            return $this->{static::$getters[$name]}();
        }
        return null;
    }
}

