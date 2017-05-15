<?php
/**
 * ReportProductFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics
 *
 * This API will help you to manage the tracking of your clicks and your sales, get reporting on this trackings and put in place rules based on this reporting to automatically optimize your channel catalogs. \\ Also, you will be able to consult the rule execution reporting.
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
 * ReportProductFilter Class Doc Comment
 *
 * @category    Class
 * @description Describe a filter on a product&#39;s column
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportProductFilter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportProductFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_id' => 'string',
        'operator_name' => '\Swagger\Client\Model\ReportProductFilterOperatorName',
        'values' => 'string[]'
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
        'column_id' => 'columnId',
        'operator_name' => 'operatorName',
        'values' => 'values'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'column_id' => 'setColumnId',
        'operator_name' => 'setOperatorName',
        'values' => 'setValues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'column_id' => 'getColumnId',
        'operator_name' => 'getOperatorName',
        'values' => 'getValues'
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
        $this->container['column_id'] = isset($data['column_id']) ? $data['column_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['column_id'] === null) {
            $invalid_properties[] = "'column_id' can't be null";
        }
        if ($this->container['operator_name'] === null) {
            $invalid_properties[] = "'operator_name' can't be null";
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

        if ($this->container['column_id'] === null) {
            return false;
        }
        if ($this->container['operator_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets column_id
     * @return string
     */
    public function getColumnId()
    {
        return $this->container['column_id'];
    }

    /**
     * Sets column_id
     * @param string $column_id The column identifier of your catalog or a custom column.
     * @return $this
     */
    public function setColumnId($column_id)
    {
        $this->container['column_id'] = $column_id;

        return $this;
    }

    /**
     * Gets operator_name
     * @return \Swagger\Client\Model\ReportProductFilterOperatorName
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     * @param \Swagger\Client\Model\ReportProductFilterOperatorName $operator_name
     * @return $this
     */
    public function setOperatorName($operator_name)
    {
        $this->container['operator_name'] = $operator_name;

        return $this;
    }

    /**
     * Gets values
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param string[] $values Must be null if the operator is \"IsNull\" or \"IsNotNull\". Can contains multiple value in case of \"InList\" operator. Otherwise a single value is expected.
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


