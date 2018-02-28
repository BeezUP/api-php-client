<?php
/**
 * LinksGetStoreTrackingStatusLink
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
 * LinksGetStoreTrackingStatusLink Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinksGetStoreTrackingStatusLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'links.GetStoreTrackingStatusLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
        'doc_url' => '\Swagger\Client\Model\BeezUPCommonDocUrl',
        'description' => 'string',
        'href' => '\Swagger\Client\Model\BeezUPCommonHref',
        'operation_id' => '\Swagger\Client\Model\BeezUPCommonOperationId',
        'method' => '\Swagger\Client\Model\BeezUPCommonHttpMethod',
        'parameters' => 'map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3]',
        'url_templated' => 'bool',
        'all_required_params_provided' => 'bool',
        'all_optional_params_provided' => 'bool',
        'info' => '\Swagger\Client\Model\BeezUPCommonInfoSummaries'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
        'doc_url' => null,
        'description' => null,
        'href' => null,
        'operation_id' => null,
        'method' => null,
        'parameters' => null,
        'url_templated' => null,
        'all_required_params_provided' => null,
        'all_optional_params_provided' => null,
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
        'label' => 'label',
        'doc_url' => 'docUrl',
        'description' => 'description',
        'href' => 'href',
        'operation_id' => 'operationId',
        'method' => 'method',
        'parameters' => 'parameters',
        'url_templated' => 'urlTemplated',
        'all_required_params_provided' => 'allRequiredParamsProvided',
        'all_optional_params_provided' => 'allOptionalParamsProvided',
        'info' => 'info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'doc_url' => 'setDocUrl',
        'description' => 'setDescription',
        'href' => 'setHref',
        'operation_id' => 'setOperationId',
        'method' => 'setMethod',
        'parameters' => 'setParameters',
        'url_templated' => 'setUrlTemplated',
        'all_required_params_provided' => 'setAllRequiredParamsProvided',
        'all_optional_params_provided' => 'setAllOptionalParamsProvided',
        'info' => 'setInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'doc_url' => 'getDocUrl',
        'description' => 'getDescription',
        'href' => 'getHref',
        'operation_id' => 'getOperationId',
        'method' => 'getMethod',
        'parameters' => 'getParameters',
        'url_templated' => 'getUrlTemplated',
        'all_required_params_provided' => 'getAllRequiredParamsProvided',
        'all_optional_params_provided' => 'getAllOptionalParamsProvided',
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['doc_url'] = isset($data['doc_url']) ? $data['doc_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['url_templated'] = isset($data['url_templated']) ? $data['url_templated'] : null;
        $this->container['all_required_params_provided'] = isset($data['all_required_params_provided']) ? $data['all_required_params_provided'] : null;
        $this->container['all_optional_params_provided'] = isset($data['all_optional_params_provided']) ? $data['all_optional_params_provided'] : null;
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

        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
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

        if ($this->container['href'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The label corresponding to the link. This label is automatically translated based on the Accept-Language http header.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets doc_url
     *
     * @return \Swagger\Client\Model\BeezUPCommonDocUrl
     */
    public function getDocUrl()
    {
        return $this->container['doc_url'];
    }

    /**
     * Sets doc_url
     *
     * @param \Swagger\Client\Model\BeezUPCommonDocUrl $doc_url doc_url
     *
     * @return $this
     */
    public function setDocUrl($doc_url)
    {
        $this->container['doc_url'] = $doc_url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the link
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets href
     *
     * @return \Swagger\Client\Model\BeezUPCommonHref
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param \Swagger\Client\Model\BeezUPCommonHref $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return \Swagger\Client\Model\BeezUPCommonOperationId
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param \Swagger\Client\Model\BeezUPCommonOperationId $operation_id operation_id
     *
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Swagger\Client\Model\BeezUPCommonHttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Swagger\Client\Model\BeezUPCommonHttpMethod $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param map[string,\Swagger\Client\Model\BeezUPCommonLinkParameter3] $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets url_templated
     *
     * @return bool
     */
    public function getUrlTemplated()
    {
        return $this->container['url_templated'];
    }

    /**
     * Sets url_templated
     *
     * @param bool $url_templated indicates whether the href is templated or not
     *
     * @return $this
     */
    public function setUrlTemplated($url_templated)
    {
        $this->container['url_templated'] = $url_templated;

        return $this;
    }

    /**
     * Gets all_required_params_provided
     *
     * @return bool
     */
    public function getAllRequiredParamsProvided()
    {
        return $this->container['all_required_params_provided'];
    }

    /**
     * Sets all_required_params_provided
     *
     * @param bool $all_required_params_provided indicates whether all required params have been provided
     *
     * @return $this
     */
    public function setAllRequiredParamsProvided($all_required_params_provided)
    {
        $this->container['all_required_params_provided'] = $all_required_params_provided;

        return $this;
    }

    /**
     * Gets all_optional_params_provided
     *
     * @return bool
     */
    public function getAllOptionalParamsProvided()
    {
        return $this->container['all_optional_params_provided'];
    }

    /**
     * Sets all_optional_params_provided
     *
     * @param bool $all_optional_params_provided indicates whether all optionals params have been provided
     *
     * @return $this
     */
    public function setAllOptionalParamsProvided($all_optional_params_provided)
    {
        $this->container['all_optional_params_provided'] = $all_optional_params_provided;

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


