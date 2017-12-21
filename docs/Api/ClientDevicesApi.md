# DeskPRO\API\ClientDevicesApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientDeviceByAppTypeById**](ClientDevicesApi.md#deleteClientDeviceByAppTypeById) | **DELETE** /client_devices/{app_type}/{id} | 
[**getClientDeviceByAppType**](ClientDevicesApi.md#getClientDeviceByAppType) | **GET** /client_devices/{app_type} | 
[**getClientDeviceByAppTypeById**](ClientDevicesApi.md#getClientDeviceByAppTypeById) | **GET** /client_devices/{app_type}/{id} | 
[**getClientDeviceByAppTypeCount**](ClientDevicesApi.md#getClientDeviceByAppTypeCount) | **GET** /client_devices/{app_type}/counts | 


# **deleteClientDeviceByAppTypeById**
> \DeskPRO\API\Model\Response deleteClientDeviceByAppTypeById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ClientDevicesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ClientDevicesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id or device_id of the resource
"app_type" => "app_type_example" // string | 
];

try {
    $result = $api->deleteClientDeviceByAppTypeById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id or device_id of the resource |
 **app_type** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientDeviceByAppType**
> \DeskPRO\API\Model\Response getClientDeviceByAppType(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ClientDevicesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ClientDevicesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"app_type" => "app_type_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getClientDeviceByAppType($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_type** | **string**|  |
 **page** | **int**| Which page to display | [optional]
 **count** | **int**| Resource per page count | [optional]
 **limit** | **int**| Max number of resources to return | [optional]
 **ids** | **string**| Comma separated list of IDs | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientDeviceByAppTypeById**
> \DeskPRO\API\Model\Response getClientDeviceByAppTypeById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ClientDevicesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ClientDevicesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id or device_id of the resource
"app_type" => "app_type_example" // string | 
];

try {
    $result = $api->getClientDeviceByAppTypeById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id or device_id of the resource |
 **app_type** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientDeviceByAppTypeCount**
> \DeskPRO\API\Model\Response getClientDeviceByAppTypeCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ClientDevicesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ClientDevicesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"app_type" => "app_type_example" // string | 
];

try {
    $result = $api->getClientDeviceByAppTypeCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_type** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

