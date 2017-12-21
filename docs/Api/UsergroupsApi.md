# DeskPRO\API\UsergroupsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserGroupById**](UsergroupsApi.md#getUserGroupById) | **GET** /user_groups/{id} | 
[**getUserGroupCount**](UsergroupsApi.md#getUserGroupCount) | **GET** /user_groups/counts | 
[**getUserGroups**](UsergroupsApi.md#getUserGroups) | **GET** /user_groups | 


# **getUserGroupById**
> \DeskPRO\API\Model\Response getUserGroupById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsergroupsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsergroupsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getUserGroupById($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGroupCount**
> \DeskPRO\API\Model\Response getUserGroupCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsergroupsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsergroupsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getUserGroupCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGroups**
> \DeskPRO\API\Model\Response getUserGroups(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsergroupsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsergroupsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getUserGroups($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
