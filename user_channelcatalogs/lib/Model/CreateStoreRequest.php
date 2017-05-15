<?php
/**
 * CreateStoreRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateStoreRequest Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateStoreRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createStoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Swagger\Client\Model\StoreName',
        'url' => '\Swagger\Client\Model\StoreUrl',
        'country_iso_code_alpha3' => '\Swagger\Client\Model\StoreCountryIsoCodeAlpha3',
        'sectors' => '\Swagger\Client\Model\StoreSectors'
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
        'name' => 'name',
        'url' => 'url',
        'country_iso_code_alpha3' => 'countryIsoCodeAlpha3',
        'sectors' => 'sectors'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'url' => 'setUrl',
        'country_iso_code_alpha3' => 'setCountryIsoCodeAlpha3',
        'sectors' => 'setSectors'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'url' => 'getUrl',
        'country_iso_code_alpha3' => 'getCountryIsoCodeAlpha3',
        'sectors' => 'getSectors'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['country_iso_code_alpha3'] = isset($data['country_iso_code_alpha3']) ? $data['country_iso_code_alpha3'] : null;
        $this->container['sectors'] = isset($data['sectors']) ? $data['sectors'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            $invalid_properties[] = "'country_iso_code_alpha3' can't be null";
        }
        if ($this->container['sectors'] === null) {
            $invalid_properties[] = "'sectors' can't be null";
        }
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            return false;
        }
        if ($this->container['sectors'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return \Swagger\Client\Model\StoreName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Swagger\Client\Model\StoreName $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     * @return \Swagger\Client\Model\StoreUrl
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param \Swagger\Client\Model\StoreUrl $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets country_iso_code_alpha3
     * @return \Swagger\Client\Model\StoreCountryIsoCodeAlpha3
     */
    public function getCountryIsoCodeAlpha3()
    {
        return $this->container['country_iso_code_alpha3'];
    }

    /**
     * Sets country_iso_code_alpha3
     * @param \Swagger\Client\Model\StoreCountryIsoCodeAlpha3 $country_iso_code_alpha3
     * @return $this
     */
    public function setCountryIsoCodeAlpha3($country_iso_code_alpha3)
    {
        $this->container['country_iso_code_alpha3'] = $country_iso_code_alpha3;

        return $this;
    }

    /**
     * Gets sectors
     * @return \Swagger\Client\Model\StoreSectors
     */
    public function getSectors()
    {
        return $this->container['sectors'];
    }

    /**
     * Sets sectors
     * @param \Swagger\Client\Model\StoreSectors $sectors
     * @return $this
     */
    public function setSectors($sectors)
    {
        $this->container['sectors'] = $sectors;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

