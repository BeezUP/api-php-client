<?php
/**
 * InputFileReadCsvConfiguration
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalogs
 *
 * This API allows you to manage your catalogs
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
 * InputFileReadCsvConfiguration Class Doc Comment
 *
 * @category    Class
 * @description The CSV file description
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InputFileReadCsvConfiguration implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inputFileReadCsvConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_header_record' => 'bool',
        'ignore_header_record' => 'bool',
        'csv_separator' => 'string',
        'csv_text_qualifier' => 'string'
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
        'has_header_record' => 'hasHeaderRecord',
        'ignore_header_record' => 'ignoreHeaderRecord',
        'csv_separator' => 'csvSeparator',
        'csv_text_qualifier' => 'csvTextQualifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'has_header_record' => 'setHasHeaderRecord',
        'ignore_header_record' => 'setIgnoreHeaderRecord',
        'csv_separator' => 'setCsvSeparator',
        'csv_text_qualifier' => 'setCsvTextQualifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'has_header_record' => 'getHasHeaderRecord',
        'ignore_header_record' => 'getIgnoreHeaderRecord',
        'csv_separator' => 'getCsvSeparator',
        'csv_text_qualifier' => 'getCsvTextQualifier'
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
        $this->container['has_header_record'] = isset($data['has_header_record']) ? $data['has_header_record'] : true;
        $this->container['ignore_header_record'] = isset($data['ignore_header_record']) ? $data['ignore_header_record'] : false;
        $this->container['csv_separator'] = isset($data['csv_separator']) ? $data['csv_separator'] : ';';
        $this->container['csv_text_qualifier'] = isset($data['csv_text_qualifier']) ? $data['csv_text_qualifier'] : '"';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['has_header_record'] === null) {
            $invalid_properties[] = "'has_header_record' can't be null";
        }
        if ($this->container['ignore_header_record'] === null) {
            $invalid_properties[] = "'ignore_header_record' can't be null";
        }
        if ($this->container['csv_separator'] === null) {
            $invalid_properties[] = "'csv_separator' can't be null";
        }
        if ($this->container['csv_text_qualifier'] === null) {
            $invalid_properties[] = "'csv_text_qualifier' can't be null";
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

        if ($this->container['has_header_record'] === null) {
            return false;
        }
        if ($this->container['ignore_header_record'] === null) {
            return false;
        }
        if ($this->container['csv_separator'] === null) {
            return false;
        }
        if ($this->container['csv_text_qualifier'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets has_header_record
     * @return bool
     */
    public function getHasHeaderRecord()
    {
        return $this->container['has_header_record'];
    }

    /**
     * Sets has_header_record
     * @param bool $has_header_record Indicate if the csv file contains the column name at the first row
     * @return $this
     */
    public function setHasHeaderRecord($has_header_record)
    {
        $this->container['has_header_record'] = $has_header_record;

        return $this;
    }

    /**
     * Gets ignore_header_record
     * @return bool
     */
    public function getIgnoreHeaderRecord()
    {
        return $this->container['ignore_header_record'];
    }

    /**
     * Sets ignore_header_record
     * @param bool $ignore_header_record Indicate if the importation should not use the csv column name from the file
     * @return $this
     */
    public function setIgnoreHeaderRecord($ignore_header_record)
    {
        $this->container['ignore_header_record'] = $ignore_header_record;

        return $this;
    }

    /**
     * Gets csv_separator
     * @return string
     */
    public function getCsvSeparator()
    {
        return $this->container['csv_separator'];
    }

    /**
     * Sets csv_separator
     * @param string $csv_separator Indicate the separator of the values in the CSV file. Generally \";\"
     * @return $this
     */
    public function setCsvSeparator($csv_separator)
    {
        $this->container['csv_separator'] = $csv_separator;

        return $this;
    }

    /**
     * Gets csv_text_qualifier
     * @return string
     */
    public function getCsvTextQualifier()
    {
        return $this->container['csv_text_qualifier'];
    }

    /**
     * Sets csv_text_qualifier
     * @param string $csv_text_qualifier Indicate the text qualifier of the CSV file. Generally the value is \"
     * @return $this
     */
    public function setCsvTextQualifier($csv_text_qualifier)
    {
        $this->container['csv_text_qualifier'] = $csv_text_qualifier;

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


