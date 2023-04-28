<?php
/**
 * ContractDiscountInfo
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
 * ContractDiscountInfo Class Doc Comment
 *
 * @category Class
 * @description Describe the discount information related to the offer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContractDiscountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'contractDiscountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_code_promo_discount_per_month' => 'double',
        'discount_duration_in_month' => 'int',
        'percent_discount' => 'double',
        'promotional_code_validity' => '\Swagger\Client\Model\PromotionalCodeValidity',
        'amount_code_promo_discount' => 'double',
        'coupon_discount_code' => 'string',
        'coupon_discount_id' => 'int',
        'is_coupon_discount_linked_to_coupon_offer' => 'bool',
        'customer_has_actual_discount' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_code_promo_discount_per_month' => 'double',
        'discount_duration_in_month' => 'int32',
        'percent_discount' => 'double',
        'promotional_code_validity' => null,
        'amount_code_promo_discount' => 'double',
        'coupon_discount_code' => null,
        'coupon_discount_id' => 'int32',
        'is_coupon_discount_linked_to_coupon_offer' => null,
        'customer_has_actual_discount' => null
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
        'amount_code_promo_discount_per_month' => 'amountCodePromoDiscountPerMonth',
        'discount_duration_in_month' => 'discountDurationInMonth',
        'percent_discount' => 'percentDiscount',
        'promotional_code_validity' => 'promotionalCodeValidity',
        'amount_code_promo_discount' => 'amountCodePromoDiscount',
        'coupon_discount_code' => 'couponDiscountCode',
        'coupon_discount_id' => 'couponDiscountId',
        'is_coupon_discount_linked_to_coupon_offer' => 'isCouponDiscountLinkedToCouponOffer',
        'customer_has_actual_discount' => 'customerHasActualDiscount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_code_promo_discount_per_month' => 'setAmountCodePromoDiscountPerMonth',
        'discount_duration_in_month' => 'setDiscountDurationInMonth',
        'percent_discount' => 'setPercentDiscount',
        'promotional_code_validity' => 'setPromotionalCodeValidity',
        'amount_code_promo_discount' => 'setAmountCodePromoDiscount',
        'coupon_discount_code' => 'setCouponDiscountCode',
        'coupon_discount_id' => 'setCouponDiscountId',
        'is_coupon_discount_linked_to_coupon_offer' => 'setIsCouponDiscountLinkedToCouponOffer',
        'customer_has_actual_discount' => 'setCustomerHasActualDiscount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_code_promo_discount_per_month' => 'getAmountCodePromoDiscountPerMonth',
        'discount_duration_in_month' => 'getDiscountDurationInMonth',
        'percent_discount' => 'getPercentDiscount',
        'promotional_code_validity' => 'getPromotionalCodeValidity',
        'amount_code_promo_discount' => 'getAmountCodePromoDiscount',
        'coupon_discount_code' => 'getCouponDiscountCode',
        'coupon_discount_id' => 'getCouponDiscountId',
        'is_coupon_discount_linked_to_coupon_offer' => 'getIsCouponDiscountLinkedToCouponOffer',
        'customer_has_actual_discount' => 'getCustomerHasActualDiscount'
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
        $this->container['amount_code_promo_discount_per_month'] = isset($data['amount_code_promo_discount_per_month']) ? $data['amount_code_promo_discount_per_month'] : null;
        $this->container['discount_duration_in_month'] = isset($data['discount_duration_in_month']) ? $data['discount_duration_in_month'] : null;
        $this->container['percent_discount'] = isset($data['percent_discount']) ? $data['percent_discount'] : null;
        $this->container['promotional_code_validity'] = isset($data['promotional_code_validity']) ? $data['promotional_code_validity'] : null;
        $this->container['amount_code_promo_discount'] = isset($data['amount_code_promo_discount']) ? $data['amount_code_promo_discount'] : null;
        $this->container['coupon_discount_code'] = isset($data['coupon_discount_code']) ? $data['coupon_discount_code'] : null;
        $this->container['coupon_discount_id'] = isset($data['coupon_discount_id']) ? $data['coupon_discount_id'] : null;
        $this->container['is_coupon_discount_linked_to_coupon_offer'] = isset($data['is_coupon_discount_linked_to_coupon_offer']) ? $data['is_coupon_discount_linked_to_coupon_offer'] : null;
        $this->container['customer_has_actual_discount'] = isset($data['customer_has_actual_discount']) ? $data['customer_has_actual_discount'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount_code_promo_discount_per_month
     *
     * @return double
     */
    public function getAmountCodePromoDiscountPerMonth()
    {
        return $this->container['amount_code_promo_discount_per_month'];
    }

    /**
     * Sets amount_code_promo_discount_per_month
     *
     * @param double $amount_code_promo_discount_per_month The amount discounted per month
     *
     * @return $this
     */
    public function setAmountCodePromoDiscountPerMonth($amount_code_promo_discount_per_month)
    {
        $this->container['amount_code_promo_discount_per_month'] = $amount_code_promo_discount_per_month;

        return $this;
    }

    /**
     * Gets discount_duration_in_month
     *
     * @return int
     */
    public function getDiscountDurationInMonth()
    {
        return $this->container['discount_duration_in_month'];
    }

    /**
     * Sets discount_duration_in_month
     *
     * @param int $discount_duration_in_month Duration of the discount in month
     *
     * @return $this
     */
    public function setDiscountDurationInMonth($discount_duration_in_month)
    {
        $this->container['discount_duration_in_month'] = $discount_duration_in_month;

        return $this;
    }

    /**
     * Gets percent_discount
     *
     * @return double
     */
    public function getPercentDiscount()
    {
        return $this->container['percent_discount'];
    }

    /**
     * Sets percent_discount
     *
     * @param double $percent_discount Percentage of the discount
     *
     * @return $this
     */
    public function setPercentDiscount($percent_discount)
    {
        $this->container['percent_discount'] = $percent_discount;

        return $this;
    }

    /**
     * Gets promotional_code_validity
     *
     * @return \Swagger\Client\Model\PromotionalCodeValidity
     */
    public function getPromotionalCodeValidity()
    {
        return $this->container['promotional_code_validity'];
    }

    /**
     * Sets promotional_code_validity
     *
     * @param \Swagger\Client\Model\PromotionalCodeValidity $promotional_code_validity promotional_code_validity
     *
     * @return $this
     */
    public function setPromotionalCodeValidity($promotional_code_validity)
    {
        $this->container['promotional_code_validity'] = $promotional_code_validity;

        return $this;
    }

    /**
     * Gets amount_code_promo_discount
     *
     * @return double
     */
    public function getAmountCodePromoDiscount()
    {
        return $this->container['amount_code_promo_discount'];
    }

    /**
     * Sets amount_code_promo_discount
     *
     * @param double $amount_code_promo_discount The discount amount
     *
     * @return $this
     */
    public function setAmountCodePromoDiscount($amount_code_promo_discount)
    {
        $this->container['amount_code_promo_discount'] = $amount_code_promo_discount;

        return $this;
    }

    /**
     * Gets coupon_discount_code
     *
     * @return string
     */
    public function getCouponDiscountCode()
    {
        return $this->container['coupon_discount_code'];
    }

    /**
     * Sets coupon_discount_code
     *
     * @param string $coupon_discount_code The discount code
     *
     * @return $this
     */
    public function setCouponDiscountCode($coupon_discount_code)
    {
        $this->container['coupon_discount_code'] = $coupon_discount_code;

        return $this;
    }

    /**
     * Gets coupon_discount_id
     *
     * @return int
     */
    public function getCouponDiscountId()
    {
        return $this->container['coupon_discount_id'];
    }

    /**
     * Sets coupon_discount_id
     *
     * @param int $coupon_discount_id Internal use: The discount id
     *
     * @return $this
     */
    public function setCouponDiscountId($coupon_discount_id)
    {
        $this->container['coupon_discount_id'] = $coupon_discount_id;

        return $this;
    }

    /**
     * Gets is_coupon_discount_linked_to_coupon_offer
     *
     * @return bool
     */
    public function getIsCouponDiscountLinkedToCouponOffer()
    {
        return $this->container['is_coupon_discount_linked_to_coupon_offer'];
    }

    /**
     * Sets is_coupon_discount_linked_to_coupon_offer
     *
     * @param bool $is_coupon_discount_linked_to_coupon_offer Is this discount is related to a coupon offer
     *
     * @return $this
     */
    public function setIsCouponDiscountLinkedToCouponOffer($is_coupon_discount_linked_to_coupon_offer)
    {
        $this->container['is_coupon_discount_linked_to_coupon_offer'] = $is_coupon_discount_linked_to_coupon_offer;

        return $this;
    }

    /**
     * Gets customer_has_actual_discount
     *
     * @return bool
     */
    public function getCustomerHasActualDiscount()
    {
        return $this->container['customer_has_actual_discount'];
    }

    /**
     * Sets customer_has_actual_discount
     *
     * @param bool $customer_has_actual_discount Do you have currently a discount on your contract ?
     *
     * @return $this
     */
    public function setCustomerHasActualDiscount($customer_has_actual_discount)
    {
        $this->container['customer_has_actual_discount'] = $customer_has_actual_discount;

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


