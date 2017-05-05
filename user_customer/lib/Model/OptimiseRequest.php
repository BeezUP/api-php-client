<?php
/**
 * OptimiseRequest
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
 * OptimiseRequest Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OptimiseRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'optimiseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => '\Swagger\Client\Model\BeezUPCommonChannelId',
        'begin_period_utc_date' => '\DateTime',
        'end_period_utc_date' => '\DateTime',
        'category_filter' => '\Swagger\Client\Model\ReportCategoryFilter',
        'indicator_filters' => '\Swagger\Client\Model\ReportIndicatorFilter[]',
        'advanced_filters' => '\Swagger\Client\Model\ReportAdvancedFilters',
        'page_size' => '\Swagger\Client\Model\PageSize',
        'page_number' => '\Swagger\Client\Model\PageNumber',
        'product_state' => '\Swagger\Client\Model\ProductStateFilter',
        'product_filters' => '\Swagger\Client\Model\ProductFilters'
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
        'channel_id' => 'channelId',
        'begin_period_utc_date' => 'beginPeriodUtcDate',
        'end_period_utc_date' => 'endPeriodUtcDate',
        'category_filter' => 'categoryFilter',
        'indicator_filters' => 'indicatorFilters',
        'advanced_filters' => 'advancedFilters',
        'page_size' => 'pageSize',
        'page_number' => 'pageNumber',
        'product_state' => 'productState',
        'product_filters' => 'productFilters'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'begin_period_utc_date' => 'setBeginPeriodUtcDate',
        'end_period_utc_date' => 'setEndPeriodUtcDate',
        'category_filter' => 'setCategoryFilter',
        'indicator_filters' => 'setIndicatorFilters',
        'advanced_filters' => 'setAdvancedFilters',
        'page_size' => 'setPageSize',
        'page_number' => 'setPageNumber',
        'product_state' => 'setProductState',
        'product_filters' => 'setProductFilters'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'begin_period_utc_date' => 'getBeginPeriodUtcDate',
        'end_period_utc_date' => 'getEndPeriodUtcDate',
        'category_filter' => 'getCategoryFilter',
        'indicator_filters' => 'getIndicatorFilters',
        'advanced_filters' => 'getAdvancedFilters',
        'page_size' => 'getPageSize',
        'page_number' => 'getPageNumber',
        'product_state' => 'getProductState',
        'product_filters' => 'getProductFilters'
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['begin_period_utc_date'] = isset($data['begin_period_utc_date']) ? $data['begin_period_utc_date'] : null;
        $this->container['end_period_utc_date'] = isset($data['end_period_utc_date']) ? $data['end_period_utc_date'] : null;
        $this->container['category_filter'] = isset($data['category_filter']) ? $data['category_filter'] : null;
        $this->container['indicator_filters'] = isset($data['indicator_filters']) ? $data['indicator_filters'] : null;
        $this->container['advanced_filters'] = isset($data['advanced_filters']) ? $data['advanced_filters'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['product_state'] = isset($data['product_state']) ? $data['product_state'] : null;
        $this->container['product_filters'] = isset($data['product_filters']) ? $data['product_filters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['begin_period_utc_date'] === null) {
            $invalid_properties[] = "'begin_period_utc_date' can't be null";
        }
        if ($this->container['end_period_utc_date'] === null) {
            $invalid_properties[] = "'end_period_utc_date' can't be null";
        }
        if ($this->container['advanced_filters'] === null) {
            $invalid_properties[] = "'advanced_filters' can't be null";
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

        if ($this->container['begin_period_utc_date'] === null) {
            return false;
        }
        if ($this->container['end_period_utc_date'] === null) {
            return false;
        }
        if ($this->container['advanced_filters'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     * @return \Swagger\Client\Model\BeezUPCommonChannelId
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param \Swagger\Client\Model\BeezUPCommonChannelId $channel_id
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets begin_period_utc_date
     * @return \DateTime
     */
    public function getBeginPeriodUtcDate()
    {
        return $this->container['begin_period_utc_date'];
    }

    /**
     * Sets begin_period_utc_date
     * @param \DateTime $begin_period_utc_date The begin date period you want to get the report
     * @return $this
     */
    public function setBeginPeriodUtcDate($begin_period_utc_date)
    {
        $this->container['begin_period_utc_date'] = $begin_period_utc_date;

        return $this;
    }

    /**
     * Gets end_period_utc_date
     * @return \DateTime
     */
    public function getEndPeriodUtcDate()
    {
        return $this->container['end_period_utc_date'];
    }

    /**
     * Sets end_period_utc_date
     * @param \DateTime $end_period_utc_date The end date period you want to get the report.
     * @return $this
     */
    public function setEndPeriodUtcDate($end_period_utc_date)
    {
        $this->container['end_period_utc_date'] = $end_period_utc_date;

        return $this;
    }

    /**
     * Gets category_filter
     * @return \Swagger\Client\Model\ReportCategoryFilter
     */
    public function getCategoryFilter()
    {
        return $this->container['category_filter'];
    }

    /**
     * Sets category_filter
     * @param \Swagger\Client\Model\ReportCategoryFilter $category_filter
     * @return $this
     */
    public function setCategoryFilter($category_filter)
    {
        $this->container['category_filter'] = $category_filter;

        return $this;
    }

    /**
     * Gets indicator_filters
     * @return \Swagger\Client\Model\ReportIndicatorFilter[]
     */
    public function getIndicatorFilters()
    {
        return $this->container['indicator_filters'];
    }

    /**
     * Sets indicator_filters
     * @param \Swagger\Client\Model\ReportIndicatorFilter[] $indicator_filters
     * @return $this
     */
    public function setIndicatorFilters($indicator_filters)
    {
        $this->container['indicator_filters'] = $indicator_filters;

        return $this;
    }

    /**
     * Gets advanced_filters
     * @return \Swagger\Client\Model\ReportAdvancedFilters
     */
    public function getAdvancedFilters()
    {
        return $this->container['advanced_filters'];
    }

    /**
     * Sets advanced_filters
     * @param \Swagger\Client\Model\ReportAdvancedFilters $advanced_filters
     * @return $this
     */
    public function setAdvancedFilters($advanced_filters)
    {
        $this->container['advanced_filters'] = $advanced_filters;

        return $this;
    }

    /**
     * Gets page_size
     * @return \Swagger\Client\Model\PageSize
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     * @param \Swagger\Client\Model\PageSize $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_number
     * @return \Swagger\Client\Model\PageNumber
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     * @param \Swagger\Client\Model\PageNumber $page_number
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets product_state
     * @return \Swagger\Client\Model\ProductStateFilter
     */
    public function getProductState()
    {
        return $this->container['product_state'];
    }

    /**
     * Sets product_state
     * @param \Swagger\Client\Model\ProductStateFilter $product_state
     * @return $this
     */
    public function setProductState($product_state)
    {
        $this->container['product_state'] = $product_state;

        return $this;
    }

    /**
     * Gets product_filters
     * @return \Swagger\Client\Model\ProductFilters
     */
    public function getProductFilters()
    {
        return $this->container['product_filters'];
    }

    /**
     * Sets product_filters
     * @param \Swagger\Client\Model\ProductFilters $product_filters
     * @return $this
     */
    public function setProductFilters($product_filters)
    {
        $this->container['product_filters'] = $product_filters;

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

