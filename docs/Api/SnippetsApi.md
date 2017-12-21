# DeskPRO\API\SnippetsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSnippetById**](SnippetsApi.md#deleteSnippetById) | **DELETE** /snippets/{id} | 
[**getSnippetById**](SnippetsApi.md#getSnippetById) | **GET** /snippets/{id} | 
[**getSnippetCount**](SnippetsApi.md#getSnippetCount) | **GET** /snippets/counts | 
[**getSnippetCsv**](SnippetsApi.md#getSnippetCsv) | **GET** /snippets/csv | 
[**getSnippetLabel**](SnippetsApi.md#getSnippetLabel) | **GET** /snippets/labels | 
[**getSnippetRenderByIdByTypeByObjectId**](SnippetsApi.md#getSnippetRenderByIdByTypeByObjectId) | **GET** /snippets/render/{id}/{type}/{objectId} | 
[**getSnippets**](SnippetsApi.md#getSnippets) | **GET** /snippets | 
[**getSnippetsChangeLogs**](SnippetsApi.md#getSnippetsChangeLogs) | **GET** /snippets_change_logs | 
[**getSnippetsUse**](SnippetsApi.md#getSnippetsUse) | **GET** /snippets_use | 


# **deleteSnippetById**
> \DeskPRO\API\Model\Response deleteSnippetById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteSnippetById($params);
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

# **getSnippetById**
> \DeskPRO\API\Model\Response getSnippetById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getSnippetById($params);
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

# **getSnippetCount**
> \DeskPRO\API\Model\Response getSnippetCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"inline_sideloads" => "inline_sideloads_example", // string | sideload entities
"include" => "include_example", // string | entities to sideload (ex: snippet_translation)
"type" => "type_example", // string | type to limit result
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getSnippetCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_sideloads** | **string**| sideload entities | [optional]
 **include** | **string**| entities to sideload (ex: snippet_translation) | [optional]
 **type** | **string**| type to limit result | [optional]
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

# **getSnippetCsv**
> \DeskPRO\API\Model\Response getSnippetCsv(array $params = [])



Get an export of snippets

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getSnippetCsv($params);
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

# **getSnippetLabel**
> \DeskPRO\API\Model\Response getSnippetLabel(array $params = [])



Get collection of snippet labels

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getSnippetLabel($params);
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

# **getSnippetRenderByIdByTypeByObjectId**
> \DeskPRO\API\Model\Response getSnippetRenderByIdByTypeByObjectId(array $params = [])



Render a snippet for an object

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the object
"type" => "type_example", // string | The type of object to render the snippet for
"object_id" => "object_id_example" // string | 
];

try {
    $result = $api->getSnippetRenderByIdByTypeByObjectId($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the object |
 **type** | **string**| The type of object to render the snippet for |
 **object_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippets**
> \DeskPRO\API\Model\Response getSnippets(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"inline_sideloads" => "inline_sideloads_example", // string | sideload entities
"include" => "include_example", // string | entities to sideload (ex: snippet_translation)
"type" => "type_example" // string | type to limit result
];

try {
    $result = $api->getSnippets($params);
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
 **inline_sideloads** | **string**| sideload entities | [optional]
 **include** | **string**| entities to sideload (ex: snippet_translation) | [optional]
 **type** | **string**| type to limit result | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetsChangeLogs**
> \DeskPRO\API\Model\Response getSnippetsChangeLogs(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"inline_sideloads" => "inline_sideloads_example", // string | sideload entities
"include" => "include_example", // string | entities to sideload (ex: ticket_message)
"snippet_id" => "snippet_id_example", // string | Snippet Id
"language_id" => "language_id_example", // string | Language Id
"type" => "type_example" // string | Type
];

try {
    $result = $api->getSnippetsChangeLogs($params);
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
 **inline_sideloads** | **string**| sideload entities | [optional]
 **include** | **string**| entities to sideload (ex: ticket_message) | [optional]
 **snippet_id** | **string**| Snippet Id | [optional]
 **language_id** | **string**| Language Id | [optional]
 **type** | **string**| Type | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetsUse**
> \DeskPRO\API\Model\Response getSnippetsUse(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"inline_sideloads" => "inline_sideloads_example", // string | sideload entities
"include" => "include_example", // string | entities to sideload (ex: ticket_message)
"snippet_id" => "snippet_id_example" // string | Snippet Id
];

try {
    $result = $api->getSnippetsUse($params);
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
 **inline_sideloads** | **string**| sideload entities | [optional]
 **include** | **string**| entities to sideload (ex: ticket_message) | [optional]
 **snippet_id** | **string**| Snippet Id | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

