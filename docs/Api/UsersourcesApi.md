# DeskPRO\API\UsersourcesApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSourceByContext**](UsersourcesApi.md#getUserSourceByContext) | **GET** /user_sources/{context} | 
[**getUserSourceByContextById**](UsersourcesApi.md#getUserSourceByContextById) | **GET** /user_sources/{context}/{id} | 
[**getUserSourceByContextCount**](UsersourcesApi.md#getUserSourceByContextCount) | **GET** /user_sources/{context}/counts | 


# **getUserSourceByContext**
> \DeskPRO\API\Model\Response getUserSourceByContext(string $context, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsersourcesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsersourcesApi(
    new Configuration('YOUR_API_KEY')
);

$context = "context_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getUserSourceByContext($context, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |

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

# **getUserSourceByContextById**
> \DeskPRO\API\Model\Response getUserSourceByContextById(int $id, string $context)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsersourcesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsersourcesApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource
$context = "context_example"; // string | 

try {
    $result = $api->getUserSourceByContextById($id, $context);
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
 **context** | **string**|  |

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

# **getUserSourceByContextCount**
> \DeskPRO\API\Model\Response getUserSourceByContextCount(string $context)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\UsersourcesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new UsersourcesApi(
    new Configuration('YOUR_API_KEY')
);

$context = "context_example"; // string | 

try {
    $result = $api->getUserSourceByContextCount($context);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |

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

