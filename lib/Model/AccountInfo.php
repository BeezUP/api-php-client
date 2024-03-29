<?php
/**
 * AccountInfo
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
 * AccountInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => '\Swagger\Client\Model\BeezUPCommonUserId',
        'email' => '\Swagger\Client\Model\BeezUPCommonEmail',
        'commercial_owner_email' => '\Swagger\Client\Model\BeezUPCommonEmail',
        'personal_info' => '\Swagger\Client\Model\PersonalInfo',
        'status' => '\Swagger\Client\Model\AccountStatus',
        'company_info' => '\Swagger\Client\Model\CompanyInfo',
        'profile_picture_url' => '\Swagger\Client\Model\ProfilePictureUrl',
        'links' => '\Swagger\Client\Model\AccountInfoLinks',
        'info' => '\Swagger\Client\Model\BeezUPCommonInfoSummaries'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => null,
        'email' => null,
        'commercial_owner_email' => null,
        'personal_info' => null,
        'status' => null,
        'company_info' => null,
        'profile_picture_url' => null,
        'links' => null,
        'info' => null
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
        'user_id' => 'userId',
        'email' => 'email',
        'commercial_owner_email' => 'commercialOwnerEmail',
        'personal_info' => 'personalInfo',
        'status' => 'status',
        'company_info' => 'companyInfo',
        'profile_picture_url' => 'profilePictureUrl',
        'links' => 'links',
        'info' => 'info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'commercial_owner_email' => 'setCommercialOwnerEmail',
        'personal_info' => 'setPersonalInfo',
        'status' => 'setStatus',
        'company_info' => 'setCompanyInfo',
        'profile_picture_url' => 'setProfilePictureUrl',
        'links' => 'setLinks',
        'info' => 'setInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'commercial_owner_email' => 'getCommercialOwnerEmail',
        'personal_info' => 'getPersonalInfo',
        'status' => 'getStatus',
        'company_info' => 'getCompanyInfo',
        'profile_picture_url' => 'getProfilePictureUrl',
        'links' => 'getLinks',
        'info' => 'getInfo'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['commercial_owner_email'] = isset($data['commercial_owner_email']) ? $data['commercial_owner_email'] : null;
        $this->container['personal_info'] = isset($data['personal_info']) ? $data['personal_info'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['company_info'] = isset($data['company_info']) ? $data['company_info'] : null;
        $this->container['profile_picture_url'] = isset($data['profile_picture_url']) ? $data['profile_picture_url'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
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
     * Gets user_id
     *
     * @return \Swagger\Client\Model\BeezUPCommonUserId
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param \Swagger\Client\Model\BeezUPCommonUserId $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \Swagger\Client\Model\BeezUPCommonEmail
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \Swagger\Client\Model\BeezUPCommonEmail $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets commercial_owner_email
     *
     * @return \Swagger\Client\Model\BeezUPCommonEmail
     */
    public function getCommercialOwnerEmail()
    {
        return $this->container['commercial_owner_email'];
    }

    /**
     * Sets commercial_owner_email
     *
     * @param \Swagger\Client\Model\BeezUPCommonEmail $commercial_owner_email commercial_owner_email
     *
     * @return $this
     */
    public function setCommercialOwnerEmail($commercial_owner_email)
    {
        $this->container['commercial_owner_email'] = $commercial_owner_email;

        return $this;
    }

    /**
     * Gets personal_info
     *
     * @return \Swagger\Client\Model\PersonalInfo
     */
    public function getPersonalInfo()
    {
        return $this->container['personal_info'];
    }

    /**
     * Sets personal_info
     *
     * @param \Swagger\Client\Model\PersonalInfo $personal_info personal_info
     *
     * @return $this
     */
    public function setPersonalInfo($personal_info)
    {
        $this->container['personal_info'] = $personal_info;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\AccountStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\AccountStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets company_info
     *
     * @return \Swagger\Client\Model\CompanyInfo
     */
    public function getCompanyInfo()
    {
        return $this->container['company_info'];
    }

    /**
     * Sets company_info
     *
     * @param \Swagger\Client\Model\CompanyInfo $company_info company_info
     *
     * @return $this
     */
    public function setCompanyInfo($company_info)
    {
        $this->container['company_info'] = $company_info;

        return $this;
    }

    /**
     * Gets profile_picture_url
     *
     * @return \Swagger\Client\Model\ProfilePictureUrl
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     *
     * @param \Swagger\Client\Model\ProfilePictureUrl $profile_picture_url profile_picture_url
     *
     * @return $this
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\AccountInfoLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\AccountInfoLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets info
     *
     * @return \Swagger\Client\Model\BeezUPCommonInfoSummaries
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \Swagger\Client\Model\BeezUPCommonInfoSummaries $info info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

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


