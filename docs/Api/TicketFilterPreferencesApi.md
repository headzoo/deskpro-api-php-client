# DeskPRO\API\TicketFilterPreferencesApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNewTicketFilterByParentIdPrefById**](TicketFilterPreferencesApi.md#deleteNewTicketFilterByParentIdPrefById) | **DELETE** /new/ticket_filters/{parentId}/prefs/{id} | 
[**getNewTicketFilterByParentIdPref**](TicketFilterPreferencesApi.md#getNewTicketFilterByParentIdPref) | **GET** /new/ticket_filters/{parentId}/prefs | 
[**getNewTicketFilterByParentIdPrefById**](TicketFilterPreferencesApi.md#getNewTicketFilterByParentIdPrefById) | **GET** /new/ticket_filters/{parentId}/prefs/{id} | 
[**getNewTicketFilterByParentIdPrefCount**](TicketFilterPreferencesApi.md#getNewTicketFilterByParentIdPrefCount) | **GET** /new/ticket_filters/{parentId}/prefs/counts | 


# **deleteNewTicketFilterByParentIdPrefById**
> \DeskPRO\API\Model\Response deleteNewTicketFilterByParentIdPrefById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFilterPreferencesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFilterPreferencesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->deleteNewTicketFilterByParentIdPrefById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the resource |
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterByParentIdPref**
> \DeskPRO\API\Model\Response getNewTicketFilterByParentIdPref(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFilterPreferencesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFilterPreferencesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewTicketFilterByParentIdPref($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
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

# **getNewTicketFilterByParentIdPrefById**
> \DeskPRO\API\Model\Response getNewTicketFilterByParentIdPrefById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFilterPreferencesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFilterPreferencesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getNewTicketFilterByParentIdPrefById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the resource |
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterByParentIdPrefCount**
> \DeskPRO\API\Model\Response getNewTicketFilterByParentIdPrefCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFilterPreferencesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFilterPreferencesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getNewTicketFilterByParentIdPrefCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

