<?php
/**
 * CatalogsCatalogApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CatalogsCatalogApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogsCatalogApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for catalogChangeCatalogColumnUserName
     *
     * Change Catalog Column User Name.
     *
     */
    public function testCatalogChangeCatalogColumnUserName()
    {
    }

    /**
     * Test case for catalogChangeCustomColumnExpression
     *
     * Change custom column expression.
     *
     */
    public function testCatalogChangeCustomColumnExpression()
    {
    }

    /**
     * Test case for catalogChangeCustomColumnUserName
     *
     * Change Custom Column User Name.
     *
     */
    public function testCatalogChangeCustomColumnUserName()
    {
    }

    /**
     * Test case for catalogComputeExpression
     *
     * Compute the expression for this catalog..
     *
     */
    public function testCatalogComputeExpression()
    {
    }

    /**
     * Test case for catalogDeleteCustomColumn
     *
     * Delete custom column.
     *
     */
    public function testCatalogDeleteCustomColumn()
    {
    }

    /**
     * Test case for catalogGetCatalogColumns
     *
     * Get catalog column list.
     *
     */
    public function testCatalogGetCatalogColumns()
    {
    }

    /**
     * Test case for catalogGetCategories
     *
     * Get category list.
     *
     */
    public function testCatalogGetCategories()
    {
    }

    /**
     * Test case for catalogGetCustomColumnExpression
     *
     * Get the encrypted custom column expression.
     *
     */
    public function testCatalogGetCustomColumnExpression()
    {
    }

    /**
     * Test case for catalogGetCustomColumns
     *
     * Get custom column list.
     *
     */
    public function testCatalogGetCustomColumns()
    {
    }

    /**
     * Test case for catalogGetProductByProductId
     *
     * Get product by ProductId.
     *
     */
    public function testCatalogGetProductByProductId()
    {
    }

    /**
     * Test case for catalogGetProductBySku
     *
     * Get product by Sku.
     *
     */
    public function testCatalogGetProductBySku()
    {
    }

    /**
     * Test case for catalogGetProducts
     *
     * Get product list.
     *
     */
    public function testCatalogGetProducts()
    {
    }

    /**
     * Test case for catalogGetRandomProducts
     *
     * Get random product list.
     *
     */
    public function testCatalogGetRandomProducts()
    {
    }

    /**
     * Test case for catalogSaveCustomColumn
     *
     * Create or replace a custom column.
     *
     */
    public function testCatalogSaveCustomColumn()
    {
    }

    /**
     * Test case for catalogStoreIndex
     *
     * Get the index of the catalog API for this store.
     *
     */
    public function testCatalogStoreIndex()
    {
    }

    /**
     * Test case for importationGetManualUpdateLastInputConfig
     *
     * Get the last input configuration.
     *
     */
    public function testImportationGetManualUpdateLastInputConfig()
    {
    }
}
