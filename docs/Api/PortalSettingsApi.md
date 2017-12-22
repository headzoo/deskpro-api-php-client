# DeskPRO\API\PortalSettingsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettingBrandByBrandPortalDownload**](PortalSettingsApi.md#getSettingBrandByBrandPortalDownload) | **GET** /settings/brands/{brand}/portal/downloads | 
[**getSettingBrandByBrandPortalFeedback**](PortalSettingsApi.md#getSettingBrandByBrandPortalFeedback) | **GET** /settings/brands/{brand}/portal/feedback | 
[**getSettingBrandByBrandPortalGeneral**](PortalSettingsApi.md#getSettingBrandByBrandPortalGeneral) | **GET** /settings/brands/{brand}/portal/general | 
[**getSettingBrandByBrandPortalGuide**](PortalSettingsApi.md#getSettingBrandByBrandPortalGuide) | **GET** /settings/brands/{brand}/portal/guides | 
[**getSettingBrandByBrandPortalKb**](PortalSettingsApi.md#getSettingBrandByBrandPortalKb) | **GET** /settings/brands/{brand}/portal/kb | 
[**getSettingBrandByBrandPortalNews**](PortalSettingsApi.md#getSettingBrandByBrandPortalNews) | **GET** /settings/brands/{brand}/portal/news | 


# **getSettingBrandByBrandPortalDownload**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalDownload(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalDownload($brand);
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

# **getSettingBrandByBrandPortalFeedback**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalFeedback(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalFeedback($brand);
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

# **getSettingBrandByBrandPortalGeneral**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalGeneral(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalGeneral($brand);
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

# **getSettingBrandByBrandPortalGuide**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalGuide(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalGuide($brand);
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

# **getSettingBrandByBrandPortalKb**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalKb(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalKb($brand);
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

# **getSettingBrandByBrandPortalNews**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalNews(string $brand)



Get portal general settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PortalSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PortalSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 

try {
    $result = $api->getSettingBrandByBrandPortalNews($brand);
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

