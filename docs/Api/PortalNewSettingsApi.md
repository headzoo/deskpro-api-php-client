# DeskPRO\API\PortalNewSettingsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettingBrandNewPortalGeneral**](PortalNewSettingsApi.md#getSettingBrandNewPortalGeneral) | **GET** /settings/brands/new/portal/general | 


# **getSettingBrandNewPortalGeneral**
> \DeskPRO\API\Model\Response getSettingBrandNewPortalGeneral()



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalNewSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalNewSettingsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getSettingBrandNewPortalGeneral();
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameters.


### Filters
This endpoint does not need any filters.


### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

