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
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalDownload(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalDownload($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingBrandByBrandPortalFeedback**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalFeedback(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalFeedback($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingBrandByBrandPortalGeneral**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalGeneral(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalGeneral($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingBrandByBrandPortalGuide**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalGuide(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalGuide($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingBrandByBrandPortalKb**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalKb(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalKb($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingBrandByBrandPortalNews**
> \DeskPRO\API\Model\Response getSettingBrandByBrandPortalNews(array $params = [])



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

$params = [
"brand" => "brand_example" // string | 
];

try {
    $result = $api->getSettingBrandByBrandPortalNews($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

