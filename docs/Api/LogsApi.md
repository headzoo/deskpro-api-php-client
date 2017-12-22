# DeskPRO\API\LogsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiLogById**](LogsApi.md#getApiLogById) | **GET** /api_logs/{id} | 
[**getApiLogs**](LogsApi.md#getApiLogs) | **GET** /api_logs | 
[**getApiLogsOptions**](LogsApi.md#getApiLogsOptions) | **GET** /api_logs_options | 
[**setApiLogByIdReplay**](LogsApi.md#setApiLogByIdReplay) | **POST** /api_logs/{id}/replay | 
[**updateApiLogsOptions**](LogsApi.md#updateApiLogsOptions) | **PUT** /api_logs_options | 


# **getApiLogById**
> \DeskPRO\API\Model\Response getApiLogById(string $id, array $filters = [])



get api log

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LogsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LogsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = "id_example"; // string | 
$filters = [
"page" => "page_example" // string | 
];

try {
    $result = $api->getApiLogById($id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **string**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiLogs**
> \DeskPRO\API\Model\Response getApiLogs()



get api logs collection

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LogsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LogsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getApiLogs();
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

# **getApiLogsOptions**
> \DeskPRO\API\Model\Response getApiLogsOptions()



get logging options

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LogsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LogsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getApiLogsOptions();
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

# **setApiLogByIdReplay**
> \DeskPRO\API\Model\Response setApiLogByIdReplay(int $id, array $filters = [])



update logging options

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LogsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LogsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | id of entry to replay
$filters = [
"mode" => "mode_example" // string | how to replay
];

try {
    $result = $api->setApiLogByIdReplay($id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of entry to replay |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **string**| how to replay | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApiLogsOptions**
> \DeskPRO\API\Model\Response updateApiLogsOptions(int $request_length, int $response_length, array $filters = [])



update logging options

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LogsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LogsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$request_length = 56; // int | 
$response_length = 56; // int | 
$filters = [
"enabled" => true, // bool | provide 1 if you want to enable logging
"modes" => array("modes_example"), // string[] | strings array, values are session, key, token
"request_length" => 56, // int | 
"response_length" => 56 // int | 
];

try {
    $result = $api->updateApiLogsOptions($request_length, $response_length, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_length** | **int**|  |
 **response_length** | **int**|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enabled** | **bool**| provide 1 if you want to enable logging | [optional]
 **modes** | [**string[]**](../Model/string.md)| strings array, values are session, key, token | [optional]
 **request_length** | **int**|  |
 **response_length** | **int**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

