<?php
/**
 * ChannelCatalogProductsCounters
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
 * ChannelCatalogProductsCounters Class Doc Comment
 *
 * @category Class
 * @description The channel catalog products counters. For each counter you will have a count.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogProductsCounters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogProductsCounters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'existing_product_count' => 'int',
        'uncategorized_product_count' => 'int',
        'excluded_product_count_including_uncategorized' => 'int',
        'excluded_product_count_excluding_uncategorized' => 'int',
        'disabled_product_count_excluding_uncategorized_and_excluded' => 'int',
        'disabled_product_count_including_uncategorized_and_excluded' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'existing_product_count' => 'int32',
        'uncategorized_product_count' => 'int32',
        'excluded_product_count_including_uncategorized' => 'int32',
        'excluded_product_count_excluding_uncategorized' => 'int32',
        'disabled_product_count_excluding_uncategorized_and_excluded' => 'int32',
        'disabled_product_count_including_uncategorized_and_excluded' => 'int32'
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
        'existing_product_count' => 'existingProductCount',
        'uncategorized_product_count' => 'uncategorizedProductCount',
        'excluded_product_count_including_uncategorized' => 'excludedProductCountIncludingUncategorized',
        'excluded_product_count_excluding_uncategorized' => 'excludedProductCountExcludingUncategorized',
        'disabled_product_count_excluding_uncategorized_and_excluded' => 'disabledProductCountExcludingUncategorizedAndExcluded',
        'disabled_product_count_including_uncategorized_and_excluded' => 'disabledProductCountIncludingUncategorizedAndExcluded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'existing_product_count' => 'setExistingProductCount',
        'uncategorized_product_count' => 'setUncategorizedProductCount',
        'excluded_product_count_including_uncategorized' => 'setExcludedProductCountIncludingUncategorized',
        'excluded_product_count_excluding_uncategorized' => 'setExcludedProductCountExcludingUncategorized',
        'disabled_product_count_excluding_uncategorized_and_excluded' => 'setDisabledProductCountExcludingUncategorizedAndExcluded',
        'disabled_product_count_including_uncategorized_and_excluded' => 'setDisabledProductCountIncludingUncategorizedAndExcluded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'existing_product_count' => 'getExistingProductCount',
        'uncategorized_product_count' => 'getUncategorizedProductCount',
        'excluded_product_count_including_uncategorized' => 'getExcludedProductCountIncludingUncategorized',
        'excluded_product_count_excluding_uncategorized' => 'getExcludedProductCountExcludingUncategorized',
        'disabled_product_count_excluding_uncategorized_and_excluded' => 'getDisabledProductCountExcludingUncategorizedAndExcluded',
        'disabled_product_count_including_uncategorized_and_excluded' => 'getDisabledProductCountIncludingUncategorizedAndExcluded'
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
        $this->container['existing_product_count'] = isset($data['existing_product_count']) ? $data['existing_product_count'] : null;
        $this->container['uncategorized_product_count'] = isset($data['uncategorized_product_count']) ? $data['uncategorized_product_count'] : null;
        $this->container['excluded_product_count_including_uncategorized'] = isset($data['excluded_product_count_including_uncategorized']) ? $data['excluded_product_count_including_uncategorized'] : null;
        $this->container['excluded_product_count_excluding_uncategorized'] = isset($data['excluded_product_count_excluding_uncategorized']) ? $data['excluded_product_count_excluding_uncategorized'] : null;
        $this->container['disabled_product_count_excluding_uncategorized_and_excluded'] = isset($data['disabled_product_count_excluding_uncategorized_and_excluded']) ? $data['disabled_product_count_excluding_uncategorized_and_excluded'] : null;
        $this->container['disabled_product_count_including_uncategorized_and_excluded'] = isset($data['disabled_product_count_including_uncategorized_and_excluded']) ? $data['disabled_product_count_including_uncategorized_and_excluded'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets existing_product_count
     *
     * @return int
     */
    public function getExistingProductCount()
    {
        return $this->container['existing_product_count'];
    }

    /**
     * Sets existing_product_count
     *
     * @param int $existing_product_count Imported product count currently in your catalog.
     *
     * @return $this
     */
    public function setExistingProductCount($existing_product_count)
    {
        $this->container['existing_product_count'] = $existing_product_count;

        return $this;
    }

    /**
     * Gets uncategorized_product_count
     *
     * @return int
     */
    public function getUncategorizedProductCount()
    {
        return $this->container['uncategorized_product_count'];
    }

    /**
     * Sets uncategorized_product_count
     *
     * @param int $uncategorized_product_count Product count WITHOUT category mapped on existing products.
     *
     * @return $this
     */
    public function setUncategorizedProductCount($uncategorized_product_count)
    {
        $this->container['uncategorized_product_count'] = $uncategorized_product_count;

        return $this;
    }

    /**
     * Gets excluded_product_count_including_uncategorized
     *
     * @return int
     */
    public function getExcludedProductCountIncludingUncategorized()
    {
        return $this->container['excluded_product_count_including_uncategorized'];
    }

    /**
     * Sets excluded_product_count_including_uncategorized
     *
     * @param int $excluded_product_count_including_uncategorized Excluded product count INCLUDING uncategorized products on existing products.
     *
     * @return $this
     */
    public function setExcludedProductCountIncludingUncategorized($excluded_product_count_including_uncategorized)
    {
        $this->container['excluded_product_count_including_uncategorized'] = $excluded_product_count_including_uncategorized;

        return $this;
    }

    /**
     * Gets excluded_product_count_excluding_uncategorized
     *
     * @return int
     */
    public function getExcludedProductCountExcludingUncategorized()
    {
        return $this->container['excluded_product_count_excluding_uncategorized'];
    }

    /**
     * Sets excluded_product_count_excluding_uncategorized
     *
     * @param int $excluded_product_count_excluding_uncategorized Excluded product count EXCLUDING uncategorized products on existing products.
     *
     * @return $this
     */
    public function setExcludedProductCountExcludingUncategorized($excluded_product_count_excluding_uncategorized)
    {
        $this->container['excluded_product_count_excluding_uncategorized'] = $excluded_product_count_excluding_uncategorized;

        return $this;
    }

    /**
     * Gets disabled_product_count_excluding_uncategorized_and_excluded
     *
     * @return int
     */
    public function getDisabledProductCountExcludingUncategorizedAndExcluded()
    {
        return $this->container['disabled_product_count_excluding_uncategorized_and_excluded'];
    }

    /**
     * Sets disabled_product_count_excluding_uncategorized_and_excluded
     *
     * @param int $disabled_product_count_excluding_uncategorized_and_excluded Disabled product count EXCLUDING uncategorized products AND excluded products on existing products.
     *
     * @return $this
     */
    public function setDisabledProductCountExcludingUncategorizedAndExcluded($disabled_product_count_excluding_uncategorized_and_excluded)
    {
        $this->container['disabled_product_count_excluding_uncategorized_and_excluded'] = $disabled_product_count_excluding_uncategorized_and_excluded;

        return $this;
    }

    /**
     * Gets disabled_product_count_including_uncategorized_and_excluded
     *
     * @return int
     */
    public function getDisabledProductCountIncludingUncategorizedAndExcluded()
    {
        return $this->container['disabled_product_count_including_uncategorized_and_excluded'];
    }

    /**
     * Sets disabled_product_count_including_uncategorized_and_excluded
     *
     * @param int $disabled_product_count_including_uncategorized_and_excluded Disabled product count INCLUDING uncategorized products AND excluded products on existing products.
     *
     * @return $this
     */
    public function setDisabledProductCountIncludingUncategorizedAndExcluded($disabled_product_count_including_uncategorized_and_excluded)
    {
        $this->container['disabled_product_count_including_uncategorized_and_excluded'] = $disabled_product_count_including_uncategorized_and_excluded;

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

