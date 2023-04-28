<?php
/**
 * ChannelInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP Merchant API
 *
 * # The REST API of BeezUP system ## Overview The REST APIs provide programmatic access to read and write BeezUP data.  Basically, with this API you will be able to do everything like you were with your browser on https://go.beezup.com !  The main features are: - Register and manage your account - Create and manage and share your stores with your friends/co-workers. - Import your product catalog and schedule the auto importation - Search the channels your want to use - Configure your channels for your catalogs to export your product information:     - cost and general settings     - category and columns mappings     - your will be able to create and manage your custom column     - put in place exlusion filters based on simple conditions on your product data     - override product values     - get product vision for a channel catalog scope - Analyze and optimize your performance of your catalogs on all yours channels with different type of reportings by day, channel, category and by product. - Automatize your optimisation by using rules! - And of course... Manage your orders harvested from all your marketplaces:     - Synchronize your orders in an uniformized way     - Get the available actions and update the order status - ...and more!  ## Authentication credentials The public API with the base path **_/v2/public** have been put in place to give you an entry point to our system for the user registration, login and lost password. The public API does not require any credentials. We give you the some public list of values and public channels for our public commercial web site [www.beezup.com](http://www.beezup.com).  The user API with the base path **_/v2/user** requires a token which is available on this page: https://go.beezup.com/Account/MyAccount  ## Things to keep in mind ### API Rate Limits - The BeezUP REST API is limited to 100 calls/minute.  ### Media type The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.  ### Required content type The required and default encoding for the request and responses is UTF8.  ### Required date time format All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.  ### Base URL The Base URL of the BeezUP API Order Management REST API conforms to the following template.  https://api.beezup.com  All URLs returned by the BeezUP API are relative to this base URL, and all requests to the REST API must use this base URL template.  You can test our API on https://api-docs.beezup.com/swagger-ui\\\\ You can contact us on [gitter, #BeezUP/API](https://gitter.im/BeezUP/API)
 *
 * OpenAPI spec version: 2.0
 * Contact: help@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
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
 * ChannelInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channelInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => '\Swagger\Client\Model\BeezUPCommonChannelId',
        'channel_name' => '\Swagger\Client\Model\BeezUPCommonChannelName',
        'channel_logo_url' => '\Swagger\Client\Model\BeezUPCommonHttpUrl',
        'channel_description' => 'string',
        'beez_up_offer' => 'string',
        'sales_contact' => '\Swagger\Client\Model\ChannelInfoSalesContact',
        'details' => '\Swagger\Client\Model\ChannelInfoDetails',
        'key_numbers' => '\Swagger\Client\Model\ChannelInfoKeyNumbers',
        'technical_contact' => '\Swagger\Client\Model\ChannelInfoTechnicalContact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_id' => null,
        'channel_name' => null,
        'channel_logo_url' => null,
        'channel_description' => null,
        'beez_up_offer' => null,
        'sales_contact' => null,
        'details' => null,
        'key_numbers' => null,
        'technical_contact' => null
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
        'channel_id' => 'channelId',
        'channel_name' => 'channelName',
        'channel_logo_url' => 'channelLogoUrl',
        'channel_description' => 'channelDescription',
        'beez_up_offer' => 'beezUPOffer',
        'sales_contact' => 'salesContact',
        'details' => 'details',
        'key_numbers' => 'keyNumbers',
        'technical_contact' => 'technicalContact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'channel_name' => 'setChannelName',
        'channel_logo_url' => 'setChannelLogoUrl',
        'channel_description' => 'setChannelDescription',
        'beez_up_offer' => 'setBeezUpOffer',
        'sales_contact' => 'setSalesContact',
        'details' => 'setDetails',
        'key_numbers' => 'setKeyNumbers',
        'technical_contact' => 'setTechnicalContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'channel_name' => 'getChannelName',
        'channel_logo_url' => 'getChannelLogoUrl',
        'channel_description' => 'getChannelDescription',
        'beez_up_offer' => 'getBeezUpOffer',
        'sales_contact' => 'getSalesContact',
        'details' => 'getDetails',
        'key_numbers' => 'getKeyNumbers',
        'technical_contact' => 'getTechnicalContact'
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['channel_name'] = isset($data['channel_name']) ? $data['channel_name'] : null;
        $this->container['channel_logo_url'] = isset($data['channel_logo_url']) ? $data['channel_logo_url'] : null;
        $this->container['channel_description'] = isset($data['channel_description']) ? $data['channel_description'] : null;
        $this->container['beez_up_offer'] = isset($data['beez_up_offer']) ? $data['beez_up_offer'] : null;
        $this->container['sales_contact'] = isset($data['sales_contact']) ? $data['sales_contact'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['key_numbers'] = isset($data['key_numbers']) ? $data['key_numbers'] : null;
        $this->container['technical_contact'] = isset($data['technical_contact']) ? $data['technical_contact'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_id'] === null) {
            $invalidProperties[] = "'channel_id' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalidProperties[] = "'channel_name' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets channel_id
     *
     * @return \Swagger\Client\Model\BeezUPCommonChannelId
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param \Swagger\Client\Model\BeezUPCommonChannelId $channel_id channel_id
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets channel_name
     *
     * @return \Swagger\Client\Model\BeezUPCommonChannelName
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param \Swagger\Client\Model\BeezUPCommonChannelName $channel_name channel_name
     *
     * @return $this
     */
    public function setChannelName($channel_name)
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets channel_logo_url
     *
     * @return \Swagger\Client\Model\BeezUPCommonHttpUrl
     */
    public function getChannelLogoUrl()
    {
        return $this->container['channel_logo_url'];
    }

    /**
     * Sets channel_logo_url
     *
     * @param \Swagger\Client\Model\BeezUPCommonHttpUrl $channel_logo_url channel_logo_url
     *
     * @return $this
     */
    public function setChannelLogoUrl($channel_logo_url)
    {
        $this->container['channel_logo_url'] = $channel_logo_url;

        return $this;
    }

    /**
     * Gets channel_description
     *
     * @return string
     */
    public function getChannelDescription()
    {
        return $this->container['channel_description'];
    }

    /**
     * Sets channel_description
     *
     * @param string $channel_description Indicae a description to the channel
     *
     * @return $this
     */
    public function setChannelDescription($channel_description)
    {
        $this->container['channel_description'] = $channel_description;

        return $this;
    }

    /**
     * Gets beez_up_offer
     *
     * @return string
     */
    public function getBeezUpOffer()
    {
        return $this->container['beez_up_offer'];
    }

    /**
     * Sets beez_up_offer
     *
     * @param string $beez_up_offer Indicate the BeezUP offer
     *
     * @return $this
     */
    public function setBeezUpOffer($beez_up_offer)
    {
        $this->container['beez_up_offer'] = $beez_up_offer;

        return $this;
    }

    /**
     * Gets sales_contact
     *
     * @return \Swagger\Client\Model\ChannelInfoSalesContact
     */
    public function getSalesContact()
    {
        return $this->container['sales_contact'];
    }

    /**
     * Sets sales_contact
     *
     * @param \Swagger\Client\Model\ChannelInfoSalesContact $sales_contact sales_contact
     *
     * @return $this
     */
    public function setSalesContact($sales_contact)
    {
        $this->container['sales_contact'] = $sales_contact;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Swagger\Client\Model\ChannelInfoDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Swagger\Client\Model\ChannelInfoDetails $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets key_numbers
     *
     * @return \Swagger\Client\Model\ChannelInfoKeyNumbers
     */
    public function getKeyNumbers()
    {
        return $this->container['key_numbers'];
    }

    /**
     * Sets key_numbers
     *
     * @param \Swagger\Client\Model\ChannelInfoKeyNumbers $key_numbers key_numbers
     *
     * @return $this
     */
    public function setKeyNumbers($key_numbers)
    {
        $this->container['key_numbers'] = $key_numbers;

        return $this;
    }

    /**
     * Gets technical_contact
     *
     * @return \Swagger\Client\Model\ChannelInfoTechnicalContact
     */
    public function getTechnicalContact()
    {
        return $this->container['technical_contact'];
    }

    /**
     * Sets technical_contact
     *
     * @param \Swagger\Client\Model\ChannelInfoTechnicalContact $technical_contact technical_contact
     *
     * @return $this
     */
    public function setTechnicalContact($technical_contact)
    {
        $this->container['technical_contact'] = $technical_contact;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


