# DeskPRO\API\TasksApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskByParentIdCommentById**](TasksApi.md#deleteTaskByParentIdCommentById) | **DELETE** /tasks/{parentId}/comments/{id} | 
[**getTaskByParentIdComment**](TasksApi.md#getTaskByParentIdComment) | **GET** /tasks/{parentId}/comments | 
[**getTaskByParentIdCommentById**](TasksApi.md#getTaskByParentIdCommentById) | **GET** /tasks/{parentId}/comments/{id} | 
[**getTaskByParentIdCommentCount**](TasksApi.md#getTaskByParentIdCommentCount) | **GET** /tasks/{parentId}/comments/counts | 


# **deleteTaskByParentIdCommentById**
> \DeskPRO\API\Model\Response deleteTaskByParentIdCommentById(int $id, string $parent_id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TasksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TasksApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->deleteTaskByParentIdCommentById($id, $parent_id);
    print_r($result->getData());
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

# **getTaskByParentIdComment**
> \DeskPRO\API\Model\Response getTaskByParentIdComment(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TasksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TasksApi(
    new Configuration('YOUR_API_KEY')
);

$parent_id = "parent_id_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTaskByParentIdComment($parent_id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

### Filters


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

# **getTaskByParentIdCommentById**
> \DeskPRO\API\Model\Response getTaskByParentIdCommentById(int $id, string $parent_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TasksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TasksApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getTaskByParentIdCommentById($id, $parent_id);
    print_r($result->getData());
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

# **getTaskByParentIdCommentCount**
> \DeskPRO\API\Model\Response getTaskByParentIdCommentCount(string $parent_id)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TasksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TasksApi(
    new Configuration('YOUR_API_KEY')
);

$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getTaskByParentIdCommentCount($parent_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

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

