<?php
/**
 * StandardOffer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
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
 * StandardOffer Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StandardOffer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'standardOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_click_price' => 'double',
        'included_click' => 'int',
        'is_most_popular' => 'bool',
        'is_old_offer' => 'bool',
        'name' => 'string',
        'offer_id' => 'int',
        'fixed_price' => 'double',
        'currency_code' => '\Swagger\Client\Model\BeezUPCommonCurrencyCode',
        'position' => 'int',
        'functionalities' => '\Swagger\Client\Model\OfferFunctionality[]'
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
        'additional_click_price' => 'additionalClickPrice',
        'included_click' => 'includedClick',
        'is_most_popular' => 'isMostPopular',
        'is_old_offer' => 'isOldOffer',
        'name' => 'name',
        'offer_id' => 'offerId',
        'fixed_price' => 'fixedPrice',
        'currency_code' => 'currencyCode',
        'position' => 'position',
        'functionalities' => 'functionalities'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_click_price' => 'setAdditionalClickPrice',
        'included_click' => 'setIncludedClick',
        'is_most_popular' => 'setIsMostPopular',
        'is_old_offer' => 'setIsOldOffer',
        'name' => 'setName',
        'offer_id' => 'setOfferId',
        'fixed_price' => 'setFixedPrice',
        'currency_code' => 'setCurrencyCode',
        'position' => 'setPosition',
        'functionalities' => 'setFunctionalities'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_click_price' => 'getAdditionalClickPrice',
        'included_click' => 'getIncludedClick',
        'is_most_popular' => 'getIsMostPopular',
        'is_old_offer' => 'getIsOldOffer',
        'name' => 'getName',
        'offer_id' => 'getOfferId',
        'fixed_price' => 'getFixedPrice',
        'currency_code' => 'getCurrencyCode',
        'position' => 'getPosition',
        'functionalities' => 'getFunctionalities'
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
        $this->container['additional_click_price'] = isset($data['additional_click_price']) ? $data['additional_click_price'] : null;
        $this->container['included_click'] = isset($data['included_click']) ? $data['included_click'] : null;
        $this->container['is_most_popular'] = isset($data['is_most_popular']) ? $data['is_most_popular'] : null;
        $this->container['is_old_offer'] = isset($data['is_old_offer']) ? $data['is_old_offer'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['functionalities'] = isset($data['functionalities']) ? $data['functionalities'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets additional_click_price
     * @return double
     */
    public function getAdditionalClickPrice()
    {
        return $this->container['additional_click_price'];
    }

    /**
     * Sets additional_click_price
     * @param double $additional_click_price The additional click price
     * @return $this
     */
    public function setAdditionalClickPrice($additional_click_price)
    {
        $this->container['additional_click_price'] = $additional_click_price;

        return $this;
    }

    /**
     * Gets included_click
     * @return int
     */
    public function getIncludedClick()
    {
        return $this->container['included_click'];
    }

    /**
     * Sets included_click
     * @param int $included_click The included click
     * @return $this
     */
    public function setIncludedClick($included_click)
    {
        $this->container['included_click'] = $included_click;

        return $this;
    }

    /**
     * Gets is_most_popular
     * @return bool
     */
    public function getIsMostPopular()
    {
        return $this->container['is_most_popular'];
    }

    /**
     * Sets is_most_popular
     * @param bool $is_most_popular UI purpose. Is the offer is the most popular
     * @return $this
     */
    public function setIsMostPopular($is_most_popular)
    {
        $this->container['is_most_popular'] = $is_most_popular;

        return $this;
    }

    /**
     * Gets is_old_offer
     * @return bool
     */
    public function getIsOldOffer()
    {
        return $this->container['is_old_offer'];
    }

    /**
     * Sets is_old_offer
     * @param bool $is_old_offer Is an old offer
     * @return $this
     */
    public function setIsOldOffer($is_old_offer)
    {
        $this->container['is_old_offer'] = $is_old_offer;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The offer name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets offer_id
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     * @param int $offer_id The offer Id
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets fixed_price
     * @return double
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     * @param double $fixed_price The fixed price of the offer
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets currency_code
     * @return \Swagger\Client\Model\BeezUPCommonCurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     * @param \Swagger\Client\Model\BeezUPCommonCurrencyCode $currency_code
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position UI purpose. The position of the offer
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets functionalities
     * @return \Swagger\Client\Model\OfferFunctionality[]
     */
    public function getFunctionalities()
    {
        return $this->container['functionalities'];
    }

    /**
     * Sets functionalities
     * @param \Swagger\Client\Model\OfferFunctionality[] $functionalities
     * @return $this
     */
    public function setFunctionalities($functionalities)
    {
        $this->container['functionalities'] = $functionalities;

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

