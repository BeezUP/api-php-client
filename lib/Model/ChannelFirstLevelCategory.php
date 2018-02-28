<?php
/**
 * ChannelFirstLevelCategory
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * # The REST API of BeezUP system ## Overview The REST APIs provide programmatic access to read and write BeezUP data.  Basically, with this API you will be able to do everything like you were with your browser on https://go.beezup.com !  The main features are: - Register and manage your account - Create and manage and share your stores with your friends/co-workers. - Import your product catalog and schedule the auto importation - Search the channels your want to use - Configure your channels for your catalogs to export your product information:     - cost and general settings     - category and columns mappings     - your will be able to create and manage your custom column     - put in place exlusion filters based on simple conditions on your product data     - override product values     - get product vision for a channel catalog scope - Analyze and optimize your performance of your catalogs on all yours channels with different type of reportings by day, channel, category and by product. - Automatize your optimisation by using rules! - And of course... Manage your orders harvested from all your marketplaces:     - Synchronize your orders in an uniformized way     - Get the available actions and update the order status - ...and more!  ## Authentication credentials The public API with the base path **_/v2/public** have been put in place to give you an entry point to our system for the user registration, login and lost password. The public API does not require any credentials. We give you the some public list of values and public channels for our public commercial web site [www.beezup.com](http://www.beezup.com).  The user API with the base path **_/v2/user** requires a token which is available on this page: https://go.beezup.com/Account/MyAccount  ## Things to keep in mind ### API Rate Limits - The BeezUP REST API is limited to 100 calls/minute.  ### Media type The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.  ### Required content type The required and default encoding for the request and responses is UTF8.  ### Required date time format All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.  ### Base URL The Base URL of the BeezUP API Order Management REST API conforms to the following template.  https://api.beezup.com  All URLs returned by the BeezUP API are relative to this base URL, and all requests to the REST API must use this base URL template.  You can test our API on https://api-docs.beezup.com/swagger-ui\\ You can contact us on [gitter, #BeezUP/API](https://gitter.im/BeezUP/API)
 *
 * OpenAPI spec version: 2.0
 * Contact: help@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChannelFirstLevelCategory Class Doc Comment
 *
 * @category Class
 * @description The first level category with his sub categories
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelFirstLevelCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channelFirstLevelCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_category_id' => '\Swagger\Client\Model\BeezUPCommonChannelCategoryId',
        'channel_category_name' => 'string',
        'channel_category_level' => '\Swagger\Client\Model\ChannelCategoryLevel',
        'channel_category_default_cost' => '\Swagger\Client\Model\ChannelCategoryDefaultCost',
        'channel_category_channel_code' => '\Swagger\Client\Model\ChannelCategoryChannelCode',
        'channel_category_column_overrides' => '\Swagger\Client\Model\ChannelCategoryColumnOverrides',
        'sub_categories' => '\Swagger\Client\Model\ChannelCategory[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_category_id' => null,
        'channel_category_name' => null,
        'channel_category_level' => null,
        'channel_category_default_cost' => null,
        'channel_category_channel_code' => null,
        'channel_category_column_overrides' => null,
        'sub_categories' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channel_category_id' => 'channelCategoryId',
        'channel_category_name' => 'channelCategoryName',
        'channel_category_level' => 'channelCategoryLevel',
        'channel_category_default_cost' => 'channelCategoryDefaultCost',
        'channel_category_channel_code' => 'channelCategoryChannelCode',
        'channel_category_column_overrides' => 'channelCategoryColumnOverrides',
        'sub_categories' => 'subCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_category_id' => 'setChannelCategoryId',
        'channel_category_name' => 'setChannelCategoryName',
        'channel_category_level' => 'setChannelCategoryLevel',
        'channel_category_default_cost' => 'setChannelCategoryDefaultCost',
        'channel_category_channel_code' => 'setChannelCategoryChannelCode',
        'channel_category_column_overrides' => 'setChannelCategoryColumnOverrides',
        'sub_categories' => 'setSubCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_category_id' => 'getChannelCategoryId',
        'channel_category_name' => 'getChannelCategoryName',
        'channel_category_level' => 'getChannelCategoryLevel',
        'channel_category_default_cost' => 'getChannelCategoryDefaultCost',
        'channel_category_channel_code' => 'getChannelCategoryChannelCode',
        'channel_category_column_overrides' => 'getChannelCategoryColumnOverrides',
        'sub_categories' => 'getSubCategories'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

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
        $this->container['channel_category_id'] = isset($data['channel_category_id']) ? $data['channel_category_id'] : null;
        $this->container['channel_category_name'] = isset($data['channel_category_name']) ? $data['channel_category_name'] : null;
        $this->container['channel_category_level'] = isset($data['channel_category_level']) ? $data['channel_category_level'] : null;
        $this->container['channel_category_default_cost'] = isset($data['channel_category_default_cost']) ? $data['channel_category_default_cost'] : null;
        $this->container['channel_category_channel_code'] = isset($data['channel_category_channel_code']) ? $data['channel_category_channel_code'] : null;
        $this->container['channel_category_column_overrides'] = isset($data['channel_category_column_overrides']) ? $data['channel_category_column_overrides'] : null;
        $this->container['sub_categories'] = isset($data['sub_categories']) ? $data['sub_categories'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_category_id'] === null) {
            $invalidProperties[] = "'channel_category_id' can't be null";
        }
        if ($this->container['channel_category_name'] === null) {
            $invalidProperties[] = "'channel_category_name' can't be null";
        }
        if ($this->container['channel_category_level'] === null) {
            $invalidProperties[] = "'channel_category_level' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['channel_category_id'] === null) {
            return false;
        }
        if ($this->container['channel_category_name'] === null) {
            return false;
        }
        if ($this->container['channel_category_level'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_category_id
     *
     * @return \Swagger\Client\Model\BeezUPCommonChannelCategoryId
     */
    public function getChannelCategoryId()
    {
        return $this->container['channel_category_id'];
    }

    /**
     * Sets channel_category_id
     *
     * @param \Swagger\Client\Model\BeezUPCommonChannelCategoryId $channel_category_id channel_category_id
     *
     * @return $this
     */
    public function setChannelCategoryId($channel_category_id)
    {
        $this->container['channel_category_id'] = $channel_category_id;

        return $this;
    }

    /**
     * Gets channel_category_name
     *
     * @return string
     */
    public function getChannelCategoryName()
    {
        return $this->container['channel_category_name'];
    }

    /**
     * Sets channel_category_name
     *
     * @param string $channel_category_name The channel category name
     *
     * @return $this
     */
    public function setChannelCategoryName($channel_category_name)
    {
        $this->container['channel_category_name'] = $channel_category_name;

        return $this;
    }

    /**
     * Gets channel_category_level
     *
     * @return \Swagger\Client\Model\ChannelCategoryLevel
     */
    public function getChannelCategoryLevel()
    {
        return $this->container['channel_category_level'];
    }

    /**
     * Sets channel_category_level
     *
     * @param \Swagger\Client\Model\ChannelCategoryLevel $channel_category_level channel_category_level
     *
     * @return $this
     */
    public function setChannelCategoryLevel($channel_category_level)
    {
        $this->container['channel_category_level'] = $channel_category_level;

        return $this;
    }

    /**
     * Gets channel_category_default_cost
     *
     * @return \Swagger\Client\Model\ChannelCategoryDefaultCost
     */
    public function getChannelCategoryDefaultCost()
    {
        return $this->container['channel_category_default_cost'];
    }

    /**
     * Sets channel_category_default_cost
     *
     * @param \Swagger\Client\Model\ChannelCategoryDefaultCost $channel_category_default_cost channel_category_default_cost
     *
     * @return $this
     */
    public function setChannelCategoryDefaultCost($channel_category_default_cost)
    {
        $this->container['channel_category_default_cost'] = $channel_category_default_cost;

        return $this;
    }

    /**
     * Gets channel_category_channel_code
     *
     * @return \Swagger\Client\Model\ChannelCategoryChannelCode
     */
    public function getChannelCategoryChannelCode()
    {
        return $this->container['channel_category_channel_code'];
    }

    /**
     * Sets channel_category_channel_code
     *
     * @param \Swagger\Client\Model\ChannelCategoryChannelCode $channel_category_channel_code channel_category_channel_code
     *
     * @return $this
     */
    public function setChannelCategoryChannelCode($channel_category_channel_code)
    {
        $this->container['channel_category_channel_code'] = $channel_category_channel_code;

        return $this;
    }

    /**
     * Gets channel_category_column_overrides
     *
     * @return \Swagger\Client\Model\ChannelCategoryColumnOverrides
     */
    public function getChannelCategoryColumnOverrides()
    {
        return $this->container['channel_category_column_overrides'];
    }

    /**
     * Sets channel_category_column_overrides
     *
     * @param \Swagger\Client\Model\ChannelCategoryColumnOverrides $channel_category_column_overrides channel_category_column_overrides
     *
     * @return $this
     */
    public function setChannelCategoryColumnOverrides($channel_category_column_overrides)
    {
        $this->container['channel_category_column_overrides'] = $channel_category_column_overrides;

        return $this;
    }

    /**
     * Gets sub_categories
     *
     * @return \Swagger\Client\Model\ChannelCategory[]
     */
    public function getSubCategories()
    {
        return $this->container['sub_categories'];
    }

    /**
     * Sets sub_categories
     *
     * @param \Swagger\Client\Model\ChannelCategory[] $sub_categories sub_categories
     *
     * @return $this
     */
    public function setSubCategories($sub_categories)
    {
        $this->container['sub_categories'] = $sub_categories;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

