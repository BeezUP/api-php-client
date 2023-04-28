<?php
/**
 * TrackedExternalOrder
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
 * TrackedExternalOrder Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackedExternalOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'trackedExternalOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'utc_date' => '\DateTime',
        'merchant_order_id' => 'string',
        'visitor_id' => 'string',
        'total_amount' => 'float',
        'currency_code' => '\Swagger\Client\Model\BeezUPCommonCurrencyCode',
        'payment_validated' => 'bool',
        'products' => '\Swagger\Client\Model\TrackedExternalOrderProduct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'utc_date' => 'date-time',
        'merchant_order_id' => null,
        'visitor_id' => null,
        'total_amount' => null,
        'currency_code' => null,
        'payment_validated' => null,
        'products' => null
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
        'utc_date' => 'utcDate',
        'merchant_order_id' => 'merchantOrderId',
        'visitor_id' => 'visitorId',
        'total_amount' => 'totalAmount',
        'currency_code' => 'currencyCode',
        'payment_validated' => 'paymentValidated',
        'products' => 'products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'utc_date' => 'setUtcDate',
        'merchant_order_id' => 'setMerchantOrderId',
        'visitor_id' => 'setVisitorId',
        'total_amount' => 'setTotalAmount',
        'currency_code' => 'setCurrencyCode',
        'payment_validated' => 'setPaymentValidated',
        'products' => 'setProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'utc_date' => 'getUtcDate',
        'merchant_order_id' => 'getMerchantOrderId',
        'visitor_id' => 'getVisitorId',
        'total_amount' => 'getTotalAmount',
        'currency_code' => 'getCurrencyCode',
        'payment_validated' => 'getPaymentValidated',
        'products' => 'getProducts'
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
        $this->container['utc_date'] = isset($data['utc_date']) ? $data['utc_date'] : null;
        $this->container['merchant_order_id'] = isset($data['merchant_order_id']) ? $data['merchant_order_id'] : null;
        $this->container['visitor_id'] = isset($data['visitor_id']) ? $data['visitor_id'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['payment_validated'] = isset($data['payment_validated']) ? $data['payment_validated'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['utc_date'] === null) {
            $invalidProperties[] = "'utc_date' can't be null";
        }
        if ($this->container['merchant_order_id'] === null) {
            $invalidProperties[] = "'merchant_order_id' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['payment_validated'] === null) {
            $invalidProperties[] = "'payment_validated' can't be null";
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
     * Gets utc_date
     *
     * @return \DateTime
     */
    public function getUtcDate()
    {
        return $this->container['utc_date'];
    }

    /**
     * Sets utc_date
     *
     * @param \DateTime $utc_date The utc date of the external order
     *
     * @return $this
     */
    public function setUtcDate($utc_date)
    {
        $this->container['utc_date'] = $utc_date;

        return $this;
    }

    /**
     * Gets merchant_order_id
     *
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->container['merchant_order_id'];
    }

    /**
     * Sets merchant_order_id
     *
     * @param string $merchant_order_id The merchant order identifier
     *
     * @return $this
     */
    public function setMerchantOrderId($merchant_order_id)
    {
        $this->container['merchant_order_id'] = $merchant_order_id;

        return $this;
    }

    /**
     * Gets visitor_id
     *
     * @return string
     */
    public function getVisitorId()
    {
        return $this->container['visitor_id'];
    }

    /**
     * Sets visitor_id
     *
     * @param string $visitor_id Can be null. The visitor identifier of the external order
     *
     * @return $this
     */
    public function setVisitorId($visitor_id)
    {
        $this->container['visitor_id'] = $visitor_id;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount The total amount of the external order
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return \Swagger\Client\Model\BeezUPCommonCurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param \Swagger\Client\Model\BeezUPCommonCurrencyCode $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets payment_validated
     *
     * @return bool
     */
    public function getPaymentValidated()
    {
        return $this->container['payment_validated'];
    }

    /**
     * Sets payment_validated
     *
     * @param bool $payment_validated Indicate if the payment of this external order has been validated or not
     *
     * @return $this
     */
    public function setPaymentValidated($payment_validated)
    {
        $this->container['payment_validated'] = $payment_validated;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Swagger\Client\Model\TrackedExternalOrderProduct[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Swagger\Client\Model\TrackedExternalOrderProduct[] $products Can be null. The product list included in the external order
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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


