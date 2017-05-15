# SwaggerClient-php
The features exposed in this API are centered around managing Orders harvested from your configured marketplaces.\\ This includes: - fetching current information (as known by BeezUP) for a single or multiple Orders, - requesting Order harvest to synchronize your marketplaces and BeezUP accounts, - changing BeezUP data and requesting changes to your marketplaces (accepting, shipping, etc), - configuring automatic changes to marketplace based our newly fetched data, - creating and exporting reports for your Orders.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\AutoTransitionsApi();
$request = new \Swagger\Client\Model\ConfigureAutomaticTransitionRequest(); // \Swagger\Client\Model\ConfigureAutomaticTransitionRequest | 

try {
    $api_instance->configureAutomaticTransitions($request);
} catch (Exception $e) {
    echo 'Exception when calling AutoTransitionsApi->configureAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.beezup.com/v2/user/marketplaces/orders*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutoTransitionsApi* | [**configureAutomaticTransitions**](docs/Api/AutoTransitionsApi.md#configureautomatictransitions) | **POST** /automaticTransitions | Configure new or existing automatic Order status transition
*AutoTransitionsApi* | [**getAutomaticTransitions**](docs/Api/AutoTransitionsApi.md#getautomatictransitions) | **GET** /automaticTransitions | Get list of configured automatic Order status transitions
*BatchesApi* | [**changeOrderList**](docs/Api/BatchesApi.md#changeorderlist) | **POST** /batches/changeOrders/{changeOrderType} | Send a batch of operations to change your marketplace Order information (accept, ship, etc.)
*BatchesApi* | [**clearMerchantOrderInfoList**](docs/Api/BatchesApi.md#clearmerchantorderinfolist) | **POST** /batches/clearMerchantOrderInfos | Send a batch of operations to clear an Order&#39;s merchant information
*BatchesApi* | [**setMerchantOrderInfoList**](docs/Api/BatchesApi.md#setmerchantorderinfolist) | **POST** /batches/setMerchantOrderInfos | Send a batch of operations to set an Order&#39;s merchant information
*ExportsApi* | [**exportOrders**](docs/Api/ExportsApi.md#exportorders) | **POST** /exportations | Request a new Order report exportation to be generated
*ExportsApi* | [**getOrderExportations**](docs/Api/ExportsApi.md#getorderexportations) | **GET** /exportations | Get a paginated list of Order report exportations
*GlobalApi* | [**getMarketplaceAccountsSynchronization**](docs/Api/GlobalApi.md#getmarketplaceaccountssynchronization) | **GET** /status | Get current synchronization status between your marketplaces and BeezUP accounts
*GlobalApi* | [**getOrderIndex**](docs/Api/GlobalApi.md#getorderindex) | **GET** / | Get all actions you can do on the order API
*GlobalApi* | [**harvestAll**](docs/Api/GlobalApi.md#harvestall) | **POST** /harvest | Send harvest request to all your marketplaces
*ListApi* | [**getOrderListFull**](docs/Api/ListApi.md#getorderlistfull) | **POST** /list/full | Get a paginated list of all Orders with all Order and Order Item(s) properties
*ListApi* | [**getOrderListLight**](docs/Api/ListApi.md#getorderlistlight) | **POST** /list/light | Get a paginated list of all Orders without details
*OrderApi* | [**changeOrder**](docs/Api/OrderApi.md#changeorder) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change your marketplace Order Information (accept, ship, etc.)
*OrderApi* | [**clearMerchantOrderInfo**](docs/Api/OrderApi.md#clearmerchantorderinfo) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear an Order&#39;s merchant information
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get full Order and Order Item(s) properties
*OrderApi* | [**getOrderHistory**](docs/Api/OrderApi.md#getorderhistory) | **GET** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get an Order&#39;s harvest and change history
*OrderApi* | [**harvestOrder**](docs/Api/OrderApi.md#harvestorder) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Send harvest request for a single Order
*OrderApi* | [**setMerchantOrderInfo**](docs/Api/OrderApi.md#setmerchantorderinfo) | **POST** /{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Set an Order&#39;s merchant information


## Documentation For Models

 - [AccountId](docs/Model/AccountId.md)
 - [AccountSynchronization](docs/Model/AccountSynchronization.md)
 - [AccountSynchronizations](docs/Model/AccountSynchronizations.md)
 - [AutomaticTransition](docs/Model/AutomaticTransition.md)
 - [AutomaticTransitionInfo](docs/Model/AutomaticTransitionInfo.md)
 - [AutomaticTransitionInfoLinks](docs/Model/AutomaticTransitionInfoLinks.md)
 - [AutomaticTransitionInfos](docs/Model/AutomaticTransitionInfos.md)
 - [AutomaticTransitionInfosLinks](docs/Model/AutomaticTransitionInfosLinks.md)
 - [BatchOrderOperationResponse](docs/Model/BatchOrderOperationResponse.md)
 - [BeezUPCommonCurrencyCode](docs/Model/BeezUPCommonCurrencyCode.md)
 - [BeezUPCommonDocUrl](docs/Model/BeezUPCommonDocUrl.md)
 - [BeezUPCommonErrorResponseMessage](docs/Model/BeezUPCommonErrorResponseMessage.md)
 - [BeezUPCommonErrorSummary](docs/Model/BeezUPCommonErrorSummary.md)
 - [BeezUPCommonExceptionDetail](docs/Model/BeezUPCommonExceptionDetail.md)
 - [BeezUPCommonHref](docs/Model/BeezUPCommonHref.md)
 - [BeezUPCommonHttpMethod](docs/Model/BeezUPCommonHttpMethod.md)
 - [BeezUPCommonHttpUrl](docs/Model/BeezUPCommonHttpUrl.md)
 - [BeezUPCommonInfoSummaries](docs/Model/BeezUPCommonInfoSummaries.md)
 - [BeezUPCommonInfoSummary](docs/Model/BeezUPCommonInfoSummary.md)
 - [BeezUPCommonLOVLink3](docs/Model/BeezUPCommonLOVLink3.md)
 - [BeezUPCommonLink3](docs/Model/BeezUPCommonLink3.md)
 - [BeezUPCommonLinkParameter3](docs/Model/BeezUPCommonLinkParameter3.md)
 - [BeezUPCommonLinkParameterProperty3](docs/Model/BeezUPCommonLinkParameterProperty3.md)
 - [BeezUPCommonMarketplaceBusinessCode](docs/Model/BeezUPCommonMarketplaceBusinessCode.md)
 - [BeezUPCommonMarketplaceTechnicalCode](docs/Model/BeezUPCommonMarketplaceTechnicalCode.md)
 - [BeezUPCommonOperationId](docs/Model/BeezUPCommonOperationId.md)
 - [BeezUPCommonPaginationResult](docs/Model/BeezUPCommonPaginationResult.md)
 - [BeezUPCommonPaginationResultLinks](docs/Model/BeezUPCommonPaginationResultLinks.md)
 - [BeezUPCommonParameterIn](docs/Model/BeezUPCommonParameterIn.md)
 - [BeezUPCommonParameterType](docs/Model/BeezUPCommonParameterType.md)
 - [BeezUPCommonStoreId](docs/Model/BeezUPCommonStoreId.md)
 - [BeezUPCommonSuccessSummary](docs/Model/BeezUPCommonSuccessSummary.md)
 - [BeezUPCommonUserErrorMessage](docs/Model/BeezUPCommonUserErrorMessage.md)
 - [BeezUPCommonUserErrorMessageArguments](docs/Model/BeezUPCommonUserErrorMessageArguments.md)
 - [BeezUPCommonUserId](docs/Model/BeezUPCommonUserId.md)
 - [BeezUPCommonWarningSummary](docs/Model/BeezUPCommonWarningSummary.md)
 - [BeezUPOrderId](docs/Model/BeezUPOrderId.md)
 - [BeezUPOrderStatus](docs/Model/BeezUPOrderStatus.md)
 - [BusinessOperationType](docs/Model/BusinessOperationType.md)
 - [ChangeOrderListRequest](docs/Model/ChangeOrderListRequest.md)
 - [ChangeOrderListRequestItem](docs/Model/ChangeOrderListRequestItem.md)
 - [ChangeOrderReporting](docs/Model/ChangeOrderReporting.md)
 - [ChangeOrderRequest](docs/Model/ChangeOrderRequest.md)
 - [ClearMerchantOrderInfoListRequest](docs/Model/ClearMerchantOrderInfoListRequest.md)
 - [ConfigureAutomaticTransitionRequest](docs/Model/ConfigureAutomaticTransitionRequest.md)
 - [DateSearchType](docs/Model/DateSearchType.md)
 - [Etag](docs/Model/Etag.md)
 - [ExecutionUUID](docs/Model/ExecutionUUID.md)
 - [ExportOrderListFormat](docs/Model/ExportOrderListFormat.md)
 - [ExportOrderListRequest](docs/Model/ExportOrderListRequest.md)
 - [HarvestOrderReporting](docs/Model/HarvestOrderReporting.md)
 - [LinksChangeOrderLink](docs/Model/LinksChangeOrderLink.md)
 - [LinksClearMerchantOrderInfoLink](docs/Model/LinksClearMerchantOrderInfoLink.md)
 - [LinksClearMerchantOrderInfoListLink](docs/Model/LinksClearMerchantOrderInfoListLink.md)
 - [LinksConfigureAutomaticTransitionsLink](docs/Model/LinksConfigureAutomaticTransitionsLink.md)
 - [LinksExportOrdersLink](docs/Model/LinksExportOrdersLink.md)
 - [LinksGetAutomaticTransitionsLink](docs/Model/LinksGetAutomaticTransitionsLink.md)
 - [LinksGetMarketplaceAccountsSynchronizationLink](docs/Model/LinksGetMarketplaceAccountsSynchronizationLink.md)
 - [LinksGetOrderExportationsLink](docs/Model/LinksGetOrderExportationsLink.md)
 - [LinksGetOrderHistoryLink](docs/Model/LinksGetOrderHistoryLink.md)
 - [LinksGetOrderIndexLink](docs/Model/LinksGetOrderIndexLink.md)
 - [LinksGetOrderLink](docs/Model/LinksGetOrderLink.md)
 - [LinksGetOrderListFullLink](docs/Model/LinksGetOrderListFullLink.md)
 - [LinksGetOrderListLightLink](docs/Model/LinksGetOrderListLightLink.md)
 - [LinksHarvestAllLink](docs/Model/LinksHarvestAllLink.md)
 - [LinksHarvestOrderLink](docs/Model/LinksHarvestOrderLink.md)
 - [LinksSetMerchantOrderInfoLink](docs/Model/LinksSetMerchantOrderInfoLink.md)
 - [LinksSetMerchantOrderInfoListLink](docs/Model/LinksSetMerchantOrderInfoListLink.md)
 - [MarketplaceOrderId](docs/Model/MarketplaceOrderId.md)
 - [MarketplaceOrderStatus](docs/Model/MarketplaceOrderStatus.md)
 - [Order](docs/Model/Order.md)
 - [OrderBuyerName](docs/Model/OrderBuyerName.md)
 - [OrderExportationReporting](docs/Model/OrderExportationReporting.md)
 - [OrderExportationReportingProcessingStatus](docs/Model/OrderExportationReportingProcessingStatus.md)
 - [OrderExportations](docs/Model/OrderExportations.md)
 - [OrderExportationsLinks](docs/Model/OrderExportationsLinks.md)
 - [OrderHeader](docs/Model/OrderHeader.md)
 - [OrderHeaderLinks](docs/Model/OrderHeaderLinks.md)
 - [OrderHistory](docs/Model/OrderHistory.md)
 - [OrderIdentifier](docs/Model/OrderIdentifier.md)
 - [OrderIdentifierWithETag](docs/Model/OrderIdentifierWithETag.md)
 - [OrderIndex](docs/Model/OrderIndex.md)
 - [OrderIndexLinks](docs/Model/OrderIndexLinks.md)
 - [OrderIndexLovLinks](docs/Model/OrderIndexLovLinks.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderLinks](docs/Model/OrderLinks.md)
 - [OrderListFull](docs/Model/OrderListFull.md)
 - [OrderListFullLinks](docs/Model/OrderListFullLinks.md)
 - [OrderListLight](docs/Model/OrderListLight.md)
 - [OrderListLightLinks](docs/Model/OrderListLightLinks.md)
 - [OrderListLinks](docs/Model/OrderListLinks.md)
 - [OrderListRequest](docs/Model/OrderListRequest.md)
 - [OrderMerchantECommerceSoftwareName](docs/Model/OrderMerchantECommerceSoftwareName.md)
 - [OrderMerchantECommerceSoftwareVersion](docs/Model/OrderMerchantECommerceSoftwareVersion.md)
 - [OrderMerchantOrderId](docs/Model/OrderMerchantOrderId.md)
 - [OrderOperationResponse](docs/Model/OrderOperationResponse.md)
 - [OrderTransitionLinks](docs/Model/OrderTransitionLinks.md)
 - [PageNumber](docs/Model/PageNumber.md)
 - [PageSize](docs/Model/PageSize.md)
 - [Processing](docs/Model/Processing.md)
 - [SetMerchantOrderInfoListRequest](docs/Model/SetMerchantOrderInfoListRequest.md)
 - [SetMerchantOrderInfoListRequestItem](docs/Model/SetMerchantOrderInfoListRequestItem.md)
 - [SetMerchantOrderInfoRequest](docs/Model/SetMerchantOrderInfoRequest.md)
 - [SourceType](docs/Model/SourceType.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header


## Author

support@beezup.com

