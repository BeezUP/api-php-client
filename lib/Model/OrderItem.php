<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @description Describe an order item. All properties with the prefix orderItem_ are translated in the list of values /user/lov/OrderMetaInfoOrderItems
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'beez_up_order_item_id' => 'string',
        'order_item_order_item_type' => 'string',
        'order_item_merchant_imported_product_id' => 'string',
        'order_item_merchant_imported_product_id_column_name' => 'string',
        'order_item_merchant_imported_product_url' => 'string',
        'order_item_merchant_product_id_column_name' => 'string',
        'order_item_beez_up_store_id' => 'string',
        'order_item_item_tax' => 'float',
        'order_item_title' => 'string',
        'order_item_image_url' => 'string',
        'order_item_merchant_product_id' => 'string',
        'order_item_market_place_product_id' => 'string',
        'order_item_gtin' => 'string',
        'order_item_item_price' => 'float',
        'order_item_quantity' => 'float',
        'order_item_total_price' => 'float',
        'order_item_shipping_price' => 'float',
        'order_item_condition' => 'string',
        'order_item_marketplace_product_uri' => 'string',
        'order_item_marketplace_image_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'beez_up_order_item_id' => null,
        'order_item_order_item_type' => null,
        'order_item_merchant_imported_product_id' => null,
        'order_item_merchant_imported_product_id_column_name' => null,
        'order_item_merchant_imported_product_url' => null,
        'order_item_merchant_product_id_column_name' => null,
        'order_item_beez_up_store_id' => null,
        'order_item_item_tax' => 'decimal',
        'order_item_title' => null,
        'order_item_image_url' => null,
        'order_item_merchant_product_id' => null,
        'order_item_market_place_product_id' => null,
        'order_item_gtin' => null,
        'order_item_item_price' => 'decimal',
        'order_item_quantity' => 'decimal',
        'order_item_total_price' => 'decimal',
        'order_item_shipping_price' => 'decimal',
        'order_item_condition' => null,
        'order_item_marketplace_product_uri' => null,
        'order_item_marketplace_image_uri' => null
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
        'beez_up_order_item_id' => 'beezUPOrderItemId',
        'order_item_order_item_type' => 'orderItem_OrderItemType',
        'order_item_merchant_imported_product_id' => 'orderItem_MerchantImportedProductId',
        'order_item_merchant_imported_product_id_column_name' => 'orderItem_MerchantImportedProductIdColumnName',
        'order_item_merchant_imported_product_url' => 'orderItem_MerchantImportedProductUrl',
        'order_item_merchant_product_id_column_name' => 'orderItem_MerchantProductIdColumnName',
        'order_item_beez_up_store_id' => 'orderItem_BeezUPStoreId',
        'order_item_item_tax' => 'orderItem_ItemTax',
        'order_item_title' => 'orderItem_Title',
        'order_item_image_url' => 'orderItem_ImageUrl',
        'order_item_merchant_product_id' => 'orderItem_MerchantProductId',
        'order_item_market_place_product_id' => 'orderItem_MarketPlaceProductId',
        'order_item_gtin' => 'orderItem_gtin',
        'order_item_item_price' => 'orderItem_ItemPrice',
        'order_item_quantity' => 'orderItem_Quantity',
        'order_item_total_price' => 'orderItem_TotalPrice',
        'order_item_shipping_price' => 'orderItem_Shipping_Price',
        'order_item_condition' => 'orderItem_Condition',
        'order_item_marketplace_product_uri' => 'orderItem_MarketplaceProductUri',
        'order_item_marketplace_image_uri' => 'orderItem_MarketplaceImageUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beez_up_order_item_id' => 'setBeezUpOrderItemId',
        'order_item_order_item_type' => 'setOrderItemOrderItemType',
        'order_item_merchant_imported_product_id' => 'setOrderItemMerchantImportedProductId',
        'order_item_merchant_imported_product_id_column_name' => 'setOrderItemMerchantImportedProductIdColumnName',
        'order_item_merchant_imported_product_url' => 'setOrderItemMerchantImportedProductUrl',
        'order_item_merchant_product_id_column_name' => 'setOrderItemMerchantProductIdColumnName',
        'order_item_beez_up_store_id' => 'setOrderItemBeezUpStoreId',
        'order_item_item_tax' => 'setOrderItemItemTax',
        'order_item_title' => 'setOrderItemTitle',
        'order_item_image_url' => 'setOrderItemImageUrl',
        'order_item_merchant_product_id' => 'setOrderItemMerchantProductId',
        'order_item_market_place_product_id' => 'setOrderItemMarketPlaceProductId',
        'order_item_gtin' => 'setOrderItemGtin',
        'order_item_item_price' => 'setOrderItemItemPrice',
        'order_item_quantity' => 'setOrderItemQuantity',
        'order_item_total_price' => 'setOrderItemTotalPrice',
        'order_item_shipping_price' => 'setOrderItemShippingPrice',
        'order_item_condition' => 'setOrderItemCondition',
        'order_item_marketplace_product_uri' => 'setOrderItemMarketplaceProductUri',
        'order_item_marketplace_image_uri' => 'setOrderItemMarketplaceImageUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beez_up_order_item_id' => 'getBeezUpOrderItemId',
        'order_item_order_item_type' => 'getOrderItemOrderItemType',
        'order_item_merchant_imported_product_id' => 'getOrderItemMerchantImportedProductId',
        'order_item_merchant_imported_product_id_column_name' => 'getOrderItemMerchantImportedProductIdColumnName',
        'order_item_merchant_imported_product_url' => 'getOrderItemMerchantImportedProductUrl',
        'order_item_merchant_product_id_column_name' => 'getOrderItemMerchantProductIdColumnName',
        'order_item_beez_up_store_id' => 'getOrderItemBeezUpStoreId',
        'order_item_item_tax' => 'getOrderItemItemTax',
        'order_item_title' => 'getOrderItemTitle',
        'order_item_image_url' => 'getOrderItemImageUrl',
        'order_item_merchant_product_id' => 'getOrderItemMerchantProductId',
        'order_item_market_place_product_id' => 'getOrderItemMarketPlaceProductId',
        'order_item_gtin' => 'getOrderItemGtin',
        'order_item_item_price' => 'getOrderItemItemPrice',
        'order_item_quantity' => 'getOrderItemQuantity',
        'order_item_total_price' => 'getOrderItemTotalPrice',
        'order_item_shipping_price' => 'getOrderItemShippingPrice',
        'order_item_condition' => 'getOrderItemCondition',
        'order_item_marketplace_product_uri' => 'getOrderItemMarketplaceProductUri',
        'order_item_marketplace_image_uri' => 'getOrderItemMarketplaceImageUri'
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
        $this->container['beez_up_order_item_id'] = isset($data['beez_up_order_item_id']) ? $data['beez_up_order_item_id'] : null;
        $this->container['order_item_order_item_type'] = isset($data['order_item_order_item_type']) ? $data['order_item_order_item_type'] : null;
        $this->container['order_item_merchant_imported_product_id'] = isset($data['order_item_merchant_imported_product_id']) ? $data['order_item_merchant_imported_product_id'] : null;
        $this->container['order_item_merchant_imported_product_id_column_name'] = isset($data['order_item_merchant_imported_product_id_column_name']) ? $data['order_item_merchant_imported_product_id_column_name'] : null;
        $this->container['order_item_merchant_imported_product_url'] = isset($data['order_item_merchant_imported_product_url']) ? $data['order_item_merchant_imported_product_url'] : null;
        $this->container['order_item_merchant_product_id_column_name'] = isset($data['order_item_merchant_product_id_column_name']) ? $data['order_item_merchant_product_id_column_name'] : null;
        $this->container['order_item_beez_up_store_id'] = isset($data['order_item_beez_up_store_id']) ? $data['order_item_beez_up_store_id'] : null;
        $this->container['order_item_item_tax'] = isset($data['order_item_item_tax']) ? $data['order_item_item_tax'] : null;
        $this->container['order_item_title'] = isset($data['order_item_title']) ? $data['order_item_title'] : null;
        $this->container['order_item_image_url'] = isset($data['order_item_image_url']) ? $data['order_item_image_url'] : null;
        $this->container['order_item_merchant_product_id'] = isset($data['order_item_merchant_product_id']) ? $data['order_item_merchant_product_id'] : null;
        $this->container['order_item_market_place_product_id'] = isset($data['order_item_market_place_product_id']) ? $data['order_item_market_place_product_id'] : null;
        $this->container['order_item_gtin'] = isset($data['order_item_gtin']) ? $data['order_item_gtin'] : null;
        $this->container['order_item_item_price'] = isset($data['order_item_item_price']) ? $data['order_item_item_price'] : null;
        $this->container['order_item_quantity'] = isset($data['order_item_quantity']) ? $data['order_item_quantity'] : null;
        $this->container['order_item_total_price'] = isset($data['order_item_total_price']) ? $data['order_item_total_price'] : null;
        $this->container['order_item_shipping_price'] = isset($data['order_item_shipping_price']) ? $data['order_item_shipping_price'] : null;
        $this->container['order_item_condition'] = isset($data['order_item_condition']) ? $data['order_item_condition'] : null;
        $this->container['order_item_marketplace_product_uri'] = isset($data['order_item_marketplace_product_uri']) ? $data['order_item_marketplace_product_uri'] : null;
        $this->container['order_item_marketplace_image_uri'] = isset($data['order_item_marketplace_image_uri']) ? $data['order_item_marketplace_image_uri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['beez_up_order_item_id'] === null) {
            $invalidProperties[] = "'beez_up_order_item_id' can't be null";
        }
        if ($this->container['order_item_order_item_type'] === null) {
            $invalidProperties[] = "'order_item_order_item_type' can't be null";
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
     * Gets beez_up_order_item_id
     *
     * @return string
     */
    public function getBeezUpOrderItemId()
    {
        return $this->container['beez_up_order_item_id'];
    }

    /**
     * Sets beez_up_order_item_id
     *
     * @param string $beez_up_order_item_id The BeezUP identifier of the order Item
     *
     * @return $this
     */
    public function setBeezUpOrderItemId($beez_up_order_item_id)
    {
        $this->container['beez_up_order_item_id'] = $beez_up_order_item_id;

        return $this;
    }

    /**
     * Gets order_item_order_item_type
     *
     * @return string
     */
    public function getOrderItemOrderItemType()
    {
        return $this->container['order_item_order_item_type'];
    }

    /**
     * Sets order_item_order_item_type
     *
     * @param string $order_item_order_item_type The order item type of the order item
     *
     * @return $this
     */
    public function setOrderItemOrderItemType($order_item_order_item_type)
    {
        $this->container['order_item_order_item_type'] = $order_item_order_item_type;

        return $this;
    }

    /**
     * Gets order_item_merchant_imported_product_id
     *
     * @return string
     */
    public function getOrderItemMerchantImportedProductId()
    {
        return $this->container['order_item_merchant_imported_product_id'];
    }

    /**
     * Sets order_item_merchant_imported_product_id
     *
     * @param string $order_item_merchant_imported_product_id The product id indicated in the catalog importation in BeezUP system for this order item. This property will help you to match the order to the inventory system.
     *
     * @return $this
     */
    public function setOrderItemMerchantImportedProductId($order_item_merchant_imported_product_id)
    {
        $this->container['order_item_merchant_imported_product_id'] = $order_item_merchant_imported_product_id;

        return $this;
    }

    /**
     * Gets order_item_merchant_imported_product_id_column_name
     *
     * @return string
     */
    public function getOrderItemMerchantImportedProductIdColumnName()
    {
        return $this->container['order_item_merchant_imported_product_id_column_name'];
    }

    /**
     * Sets order_item_merchant_imported_product_id_column_name
     *
     * @param string $order_item_merchant_imported_product_id_column_name The column name for the product id indicated in the catalog importation in BeezUP system related to this order item. This property will help you to match the order to the inventory system.
     *
     * @return $this
     */
    public function setOrderItemMerchantImportedProductIdColumnName($order_item_merchant_imported_product_id_column_name)
    {
        $this->container['order_item_merchant_imported_product_id_column_name'] = $order_item_merchant_imported_product_id_column_name;

        return $this;
    }

    /**
     * Gets order_item_merchant_imported_product_url
     *
     * @return string
     */
    public function getOrderItemMerchantImportedProductUrl()
    {
        return $this->container['order_item_merchant_imported_product_url'];
    }

    /**
     * Sets order_item_merchant_imported_product_url
     *
     * @param string $order_item_merchant_imported_product_url The product url indicated in the catalog importation in BeezUP system related to this order item
     *
     * @return $this
     */
    public function setOrderItemMerchantImportedProductUrl($order_item_merchant_imported_product_url)
    {
        $this->container['order_item_merchant_imported_product_url'] = $order_item_merchant_imported_product_url;

        return $this;
    }

    /**
     * Gets order_item_merchant_product_id_column_name
     *
     * @return string
     */
    public function getOrderItemMerchantProductIdColumnName()
    {
        return $this->container['order_item_merchant_product_id_column_name'];
    }

    /**
     * Sets order_item_merchant_product_id_column_name
     *
     * @param string $order_item_merchant_product_id_column_name The column name indicate in the mapping for the product id related to the order item
     *
     * @return $this
     */
    public function setOrderItemMerchantProductIdColumnName($order_item_merchant_product_id_column_name)
    {
        $this->container['order_item_merchant_product_id_column_name'] = $order_item_merchant_product_id_column_name;

        return $this;
    }

    /**
     * Gets order_item_beez_up_store_id
     *
     * @return string
     */
    public function getOrderItemBeezUpStoreId()
    {
        return $this->container['order_item_beez_up_store_id'];
    }

    /**
     * Sets order_item_beez_up_store_id
     *
     * @param string $order_item_beez_up_store_id The store id in the beezup system related to the order item. This property will help you to match the order to the inventory system.
     *
     * @return $this
     */
    public function setOrderItemBeezUpStoreId($order_item_beez_up_store_id)
    {
        $this->container['order_item_beez_up_store_id'] = $order_item_beez_up_store_id;

        return $this;
    }

    /**
     * Gets order_item_item_tax
     *
     * @return float
     */
    public function getOrderItemItemTax()
    {
        return $this->container['order_item_item_tax'];
    }

    /**
     * Sets order_item_item_tax
     *
     * @param float $order_item_item_tax The tax of the order item
     *
     * @return $this
     */
    public function setOrderItemItemTax($order_item_item_tax)
    {
        $this->container['order_item_item_tax'] = $order_item_item_tax;

        return $this;
    }

    /**
     * Gets order_item_title
     *
     * @return string
     */
    public function getOrderItemTitle()
    {
        return $this->container['order_item_title'];
    }

    /**
     * Sets order_item_title
     *
     * @param string $order_item_title The title of the order item
     *
     * @return $this
     */
    public function setOrderItemTitle($order_item_title)
    {
        $this->container['order_item_title'] = $order_item_title;

        return $this;
    }

    /**
     * Gets order_item_image_url
     *
     * @return string
     */
    public function getOrderItemImageUrl()
    {
        return $this->container['order_item_image_url'];
    }

    /**
     * Sets order_item_image_url
     *
     * @param string $order_item_image_url The URL of the image of the order item
     *
     * @return $this
     */
    public function setOrderItemImageUrl($order_item_image_url)
    {
        $this->container['order_item_image_url'] = $order_item_image_url;

        return $this;
    }

    /**
     * Gets order_item_merchant_product_id
     *
     * @return string
     */
    public function getOrderItemMerchantProductId()
    {
        return $this->container['order_item_merchant_product_id'];
    }

    /**
     * Sets order_item_merchant_product_id
     *
     * @param string $order_item_merchant_product_id The merchant product id of the order item
     *
     * @return $this
     */
    public function setOrderItemMerchantProductId($order_item_merchant_product_id)
    {
        $this->container['order_item_merchant_product_id'] = $order_item_merchant_product_id;

        return $this;
    }

    /**
     * Gets order_item_market_place_product_id
     *
     * @return string
     */
    public function getOrderItemMarketPlaceProductId()
    {
        return $this->container['order_item_market_place_product_id'];
    }

    /**
     * Sets order_item_market_place_product_id
     *
     * @param string $order_item_market_place_product_id The marketplace product identifier of the order item
     *
     * @return $this
     */
    public function setOrderItemMarketPlaceProductId($order_item_market_place_product_id)
    {
        $this->container['order_item_market_place_product_id'] = $order_item_market_place_product_id;

        return $this;
    }

    /**
     * Gets order_item_gtin
     *
     * @return string
     */
    public function getOrderItemGtin()
    {
        return $this->container['order_item_gtin'];
    }

    /**
     * Sets order_item_gtin
     *
     * @param string $order_item_gtin The order item gtin
     *
     * @return $this
     */
    public function setOrderItemGtin($order_item_gtin)
    {
        $this->container['order_item_gtin'] = $order_item_gtin;

        return $this;
    }

    /**
     * Gets order_item_item_price
     *
     * @return float
     */
    public function getOrderItemItemPrice()
    {
        return $this->container['order_item_item_price'];
    }

    /**
     * Sets order_item_item_price
     *
     * @param float $order_item_item_price The price of the order item
     *
     * @return $this
     */
    public function setOrderItemItemPrice($order_item_item_price)
    {
        $this->container['order_item_item_price'] = $order_item_item_price;

        return $this;
    }

    /**
     * Gets order_item_quantity
     *
     * @return float
     */
    public function getOrderItemQuantity()
    {
        return $this->container['order_item_quantity'];
    }

    /**
     * Sets order_item_quantity
     *
     * @param float $order_item_quantity The quantity of the order item
     *
     * @return $this
     */
    public function setOrderItemQuantity($order_item_quantity)
    {
        $this->container['order_item_quantity'] = $order_item_quantity;

        return $this;
    }

    /**
     * Gets order_item_total_price
     *
     * @return float
     */
    public function getOrderItemTotalPrice()
    {
        return $this->container['order_item_total_price'];
    }

    /**
     * Sets order_item_total_price
     *
     * @param float $order_item_total_price The total price of the order item
     *
     * @return $this
     */
    public function setOrderItemTotalPrice($order_item_total_price)
    {
        $this->container['order_item_total_price'] = $order_item_total_price;

        return $this;
    }

    /**
     * Gets order_item_shipping_price
     *
     * @return float
     */
    public function getOrderItemShippingPrice()
    {
        return $this->container['order_item_shipping_price'];
    }

    /**
     * Sets order_item_shipping_price
     *
     * @param float $order_item_shipping_price The shipping price of the order item
     *
     * @return $this
     */
    public function setOrderItemShippingPrice($order_item_shipping_price)
    {
        $this->container['order_item_shipping_price'] = $order_item_shipping_price;

        return $this;
    }

    /**
     * Gets order_item_condition
     *
     * @return string
     */
    public function getOrderItemCondition()
    {
        return $this->container['order_item_condition'];
    }

    /**
     * Sets order_item_condition
     *
     * @param string $order_item_condition The merchant product condition of the order item
     *
     * @return $this
     */
    public function setOrderItemCondition($order_item_condition)
    {
        $this->container['order_item_condition'] = $order_item_condition;

        return $this;
    }

    /**
     * Gets order_item_marketplace_product_uri
     *
     * @return string
     */
    public function getOrderItemMarketplaceProductUri()
    {
        return $this->container['order_item_marketplace_product_uri'];
    }

    /**
     * Sets order_item_marketplace_product_uri
     *
     * @param string $order_item_marketplace_product_uri The merchant product uri of the order item
     *
     * @return $this
     */
    public function setOrderItemMarketplaceProductUri($order_item_marketplace_product_uri)
    {
        $this->container['order_item_marketplace_product_uri'] = $order_item_marketplace_product_uri;

        return $this;
    }

    /**
     * Gets order_item_marketplace_image_uri
     *
     * @return string
     */
    public function getOrderItemMarketplaceImageUri()
    {
        return $this->container['order_item_marketplace_image_uri'];
    }

    /**
     * Sets order_item_marketplace_image_uri
     *
     * @param string $order_item_marketplace_image_uri The marketplace image uri
     *
     * @return $this
     */
    public function setOrderItemMarketplaceImageUri($order_item_marketplace_image_uri)
    {
        $this->container['order_item_marketplace_image_uri'] = $order_item_marketplace_image_uri;

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


