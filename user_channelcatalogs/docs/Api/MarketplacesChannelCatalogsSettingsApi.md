# Swagger\Client\MarketplacesChannelCatalogsSettingsApi

All URIs are relative to *https://api.beezup.comv2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelCatalogMarketplaceProperties**](MarketplacesChannelCatalogsSettingsApi.md#getChannelCatalogMarketplaceProperties) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/properties | Get the marketplace properties for a channel catalog
[**getChannelCatalogMarketplaceSettings**](MarketplacesChannelCatalogsSettingsApi.md#getChannelCatalogMarketplaceSettings) | **GET** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Get the marketplace settings for a channel catalog
[**setChannelCatalogMarketplaceSettings**](MarketplacesChannelCatalogsSettingsApi.md#setChannelCatalogMarketplaceSettings) | **POST** /v2/user/marketplaces/channelcatalogs/{channelCatalogId}/settings | Save new marketplace settings for a channel catalog


# **getChannelCatalogMarketplaceProperties**
> \Swagger\Client\Model\ChannelCatalogMarketplaceProperties getChannelCatalogMarketplaceProperties($channel_catalog_id)

Get the marketplace properties for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\MarketplacesChannelCatalogsSettingsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | 

try {
    $result = $api_instance->getChannelCatalogMarketplaceProperties($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->getChannelCatalogMarketplaceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceProperties**](../Model/ChannelCatalogMarketplaceProperties.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelCatalogMarketplaceSettings**
> \Swagger\Client\Model\ChannelCatalogMarketplaceSettings getChannelCatalogMarketplaceSettings($channel_catalog_id)

Get the marketplace settings for a channel catalog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\MarketplacesChannelCatalogsSettingsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query (required)

try {
    $result = $api_instance->getChannelCatalogMarketplaceSettings($channel_catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->getChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query (required) |

### Return type

[**\Swagger\Client\Model\ChannelCatalogMarketplaceSettings**](../Model/ChannelCatalogMarketplaceSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChannelCatalogMarketplaceSettings**
> setChannelCatalogMarketplaceSettings($channel_catalog_id, $model)

Save new marketplace settings for a channel catalog

Allow you to configure your marketplace settings.  Partial update accepted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\MarketplacesChannelCatalogsSettingsApi();
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id to query
$model = new \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest(); // \Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest | Settings to save

try {
    $api_instance->setChannelCatalogMarketplaceSettings($channel_catalog_id, $model);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesChannelCatalogsSettingsApi->setChannelCatalogMarketplaceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| Channel Catalog Id to query |
 **model** | [**\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest**](../Model/\Swagger\Client\Model\SetChannelCatalogMarketplaceSettingsRequest.md)| Settings to save |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
