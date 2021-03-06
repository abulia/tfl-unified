<?php
/**
 * MatchedStop
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
 * MatchedStop Class Doc Comment
 *
 * @category    Class
 * @package     Abulia\TflUnified\Swagger
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MatchedStop implements ArrayAccess, Jsonable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MatchedStop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessibility_summary' => 'string',
        'direction' => 'string',
        'has_disruption' => 'bool',
        'ics_id' => 'string',
        'id' => 'string',
        'lat' => 'double',
        'lines' => '\Abulia\TflUnified\Swagger\Model\Identifier[]',
        'lon' => 'double',
        'modes' => 'string[]',
        'name' => 'string',
        'parent_id' => 'string',
        'route_id' => 'int',
        'station_id' => 'string',
        'status' => 'bool',
        'stop_letter' => 'string',
        'stop_type' => 'string',
        'top_most_parent_id' => 'string',
        'towards' => 'string',
        'url' => 'string',
        'zone' => 'string'
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
        'accessibility_summary' => 'accessibilitySummary',
        'direction' => 'direction',
        'has_disruption' => 'hasDisruption',
        'ics_id' => 'icsId',
        'id' => 'id',
        'lat' => 'lat',
        'lines' => 'lines',
        'lon' => 'lon',
        'modes' => 'modes',
        'name' => 'name',
        'parent_id' => 'parentId',
        'route_id' => 'routeId',
        'station_id' => 'stationId',
        'status' => 'status',
        'stop_letter' => 'stopLetter',
        'stop_type' => 'stopType',
        'top_most_parent_id' => 'topMostParentId',
        'towards' => 'towards',
        'url' => 'url',
        'zone' => 'zone'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accessibility_summary' => 'setAccessibilitySummary',
        'direction' => 'setDirection',
        'has_disruption' => 'setHasDisruption',
        'ics_id' => 'setIcsId',
        'id' => 'setId',
        'lat' => 'setLat',
        'lines' => 'setLines',
        'lon' => 'setLon',
        'modes' => 'setModes',
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'route_id' => 'setRouteId',
        'station_id' => 'setStationId',
        'status' => 'setStatus',
        'stop_letter' => 'setStopLetter',
        'stop_type' => 'setStopType',
        'top_most_parent_id' => 'setTopMostParentId',
        'towards' => 'setTowards',
        'url' => 'setUrl',
        'zone' => 'setZone'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accessibility_summary' => 'getAccessibilitySummary',
        'direction' => 'getDirection',
        'has_disruption' => 'getHasDisruption',
        'ics_id' => 'getIcsId',
        'id' => 'getId',
        'lat' => 'getLat',
        'lines' => 'getLines',
        'lon' => 'getLon',
        'modes' => 'getModes',
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'route_id' => 'getRouteId',
        'station_id' => 'getStationId',
        'status' => 'getStatus',
        'stop_letter' => 'getStopLetter',
        'stop_type' => 'getStopType',
        'top_most_parent_id' => 'getTopMostParentId',
        'towards' => 'getTowards',
        'url' => 'getUrl',
        'zone' => 'getZone'
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
        $this->container['accessibility_summary'] = isset($data['accessibility_summary']) ? $data['accessibility_summary'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['has_disruption'] = isset($data['has_disruption']) ? $data['has_disruption'] : null;
        $this->container['ics_id'] = isset($data['ics_id']) ? $data['ics_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['modes'] = isset($data['modes']) ? $data['modes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['route_id'] = isset($data['route_id']) ? $data['route_id'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stop_letter'] = isset($data['stop_letter']) ? $data['stop_letter'] : null;
        $this->container['stop_type'] = isset($data['stop_type']) ? $data['stop_type'] : null;
        $this->container['top_most_parent_id'] = isset($data['top_most_parent_id']) ? $data['top_most_parent_id'] : null;
        $this->container['towards'] = isset($data['towards']) ? $data['towards'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
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
     * Gets accessibility_summary
     * @return string
     */
    public function getAccessibilitySummary()
    {
        return $this->container['accessibility_summary'];
    }

    /**
     * Sets accessibility_summary
     * @param string $accessibility_summary
     * @return $this
     */
    public function setAccessibilitySummary($accessibility_summary)
    {
        $this->container['accessibility_summary'] = $accessibility_summary;

        return $this;
    }

    /**
     * Gets direction
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     * @param string $direction
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets has_disruption
     * @return bool
     */
    public function getHasDisruption()
    {
        return $this->container['has_disruption'];
    }

    /**
     * Sets has_disruption
     * @param bool $has_disruption
     * @return $this
     */
    public function setHasDisruption($has_disruption)
    {
        $this->container['has_disruption'] = $has_disruption;

        return $this;
    }

    /**
     * Gets ics_id
     * @return string
     */
    public function getIcsId()
    {
        return $this->container['ics_id'];
    }

    /**
     * Sets ics_id
     * @param string $ics_id
     * @return $this
     */
    public function setIcsId($ics_id)
    {
        $this->container['ics_id'] = $ics_id;

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
     * @param string $id
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
     * @param double $lat
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lines
     * @return \Abulia\TflUnified\Swagger\Model\Identifier[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     * @param \Abulia\TflUnified\Swagger\Model\Identifier[] $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
     * @param double $lon
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets modes
     * @return string[]
     */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
     * Sets modes
     * @param string[] $modes
     * @return $this
     */
    public function setModes($modes)
    {
        $this->container['modes'] = $modes;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param string $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets route_id
     * @return int
     */
    public function getRouteId()
    {
        return $this->container['route_id'];
    }

    /**
     * Sets route_id
     * @param int $route_id
     * @return $this
     */
    public function setRouteId($route_id)
    {
        $this->container['route_id'] = $route_id;

        return $this;
    }

    /**
     * Gets station_id
     * @return string
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     * @param string $station_id
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets status
     * @return bool
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param bool $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stop_letter
     * @return string
     */
    public function getStopLetter()
    {
        return $this->container['stop_letter'];
    }

    /**
     * Sets stop_letter
     * @param string $stop_letter
     * @return $this
     */
    public function setStopLetter($stop_letter)
    {
        $this->container['stop_letter'] = $stop_letter;

        return $this;
    }

    /**
     * Gets stop_type
     * @return string
     */
    public function getStopType()
    {
        return $this->container['stop_type'];
    }

    /**
     * Sets stop_type
     * @param string $stop_type
     * @return $this
     */
    public function setStopType($stop_type)
    {
        $this->container['stop_type'] = $stop_type;

        return $this;
    }

    /**
     * Gets top_most_parent_id
     * @return string
     */
    public function getTopMostParentId()
    {
        return $this->container['top_most_parent_id'];
    }

    /**
     * Sets top_most_parent_id
     * @param string $top_most_parent_id
     * @return $this
     */
    public function setTopMostParentId($top_most_parent_id)
    {
        $this->container['top_most_parent_id'] = $top_most_parent_id;

        return $this;
    }

    /**
     * Gets towards
     * @return string
     */
    public function getTowards()
    {
        return $this->container['towards'];
    }

    /**
     * Sets towards
     * @param string $towards
     * @return $this
     */
    public function setTowards($towards)
    {
        $this->container['towards'] = $towards;

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
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

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


