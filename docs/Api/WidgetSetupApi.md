# DeskPRO\API\WidgetSetupApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSettingBrandByBrandWidgetSetup**](WidgetSetupApi.md#deleteSettingBrandByBrandWidgetSetup) | **DELETE** /settings/brands/{brand}/widget/setup | 
[**getSettingBrandByBrandWidgetCode**](WidgetSetupApi.md#getSettingBrandByBrandWidgetCode) | **GET** /settings/brands/{brand}/widget/code | 
[**getSettingBrandByBrandWidgetLiveDemoCode**](WidgetSetupApi.md#getSettingBrandByBrandWidgetLiveDemoCode) | **GET** /settings/brands/{brand}/widget/live_demo_code | 
[**getSettingBrandByBrandWidgetSetup**](WidgetSetupApi.md#getSettingBrandByBrandWidgetSetup) | **GET** /settings/brands/{brand}/widget/setup | 


# **deleteSettingBrandByBrandWidgetSetup**
> \DeskPRO\API\Model\Response deleteSettingBrandByBrandWidgetSetup(string $brand)



reset widget settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSetupApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSetupApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$brand = "brand_example"; // string | 

try {
    $result = $api->deleteSettingBrandByBrandWidgetSetup($brand);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

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

# **getSettingBrandByBrandWidgetCode**
> \DeskPRO\API\Model\Response getSettingBrandByBrandWidgetCode(string $brand)



Get the HTML code for the widget

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSetupApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSetupApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandWidgetCode($brand);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

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

# **getSettingBrandByBrandWidgetLiveDemoCode**
> \DeskPRO\API\Model\Response getSettingBrandByBrandWidgetLiveDemoCode(string $brand)



Get the HTML code for the widget

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSetupApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSetupApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandWidgetLiveDemoCode($brand);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

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

# **getSettingBrandByBrandWidgetSetup**
> \DeskPRO\API\Model\Response getSettingBrandByBrandWidgetSetup(string $brand)



get widget setup

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSetupApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSetupApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandWidgetSetup($brand);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

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

