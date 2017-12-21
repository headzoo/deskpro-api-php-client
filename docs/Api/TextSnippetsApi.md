# DeskPRO\API\TextSnippetsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContextSnippetById**](TextSnippetsApi.md#deleteContextSnippetById) | **DELETE** /{context}_snippets/{id} | 
[**deleteContextSnippetCategoryById**](TextSnippetsApi.md#deleteContextSnippetCategoryById) | **DELETE** /{context}_snippet_categories/{id} | 
[**getContextSnippetById**](TextSnippetsApi.md#getContextSnippetById) | **GET** /{context}_snippets/{id} | 
[**getContextSnippetByIdContent**](TextSnippetsApi.md#getContextSnippetByIdContent) | **GET** /{context}_snippets/{id}/content | 
[**getContextSnippetCategories**](TextSnippetsApi.md#getContextSnippetCategories) | **GET** /{context}_snippet_categories | 
[**getContextSnippetCategoryById**](TextSnippetsApi.md#getContextSnippetCategoryById) | **GET** /{context}_snippet_categories/{id} | 
[**getContextSnippetCategoryByIdSnippet**](TextSnippetsApi.md#getContextSnippetCategoryByIdSnippet) | **GET** /{context}_snippet_categories/{id}/snippets | 
[**getContextSnippetCategoryCount**](TextSnippetsApi.md#getContextSnippetCategoryCount) | **GET** /{context}_snippet_categories/counts | 
[**getContextSnippetCount**](TextSnippetsApi.md#getContextSnippetCount) | **GET** /{context}_snippets/counts | 
[**getContextSnippets**](TextSnippetsApi.md#getContextSnippets) | **GET** /{context}_snippets | 


# **deleteContextSnippetById**
> \DeskPRO\API\Model\Response deleteContextSnippetById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"context" => "context_example" // string | 
];

try {
    $result = $api->deleteContextSnippetById($params);
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
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContextSnippetCategoryById**
> \DeskPRO\API\Model\Response deleteContextSnippetCategoryById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"context" => "context_example" // string | 
];

try {
    $result = $api->deleteContextSnippetCategoryById($params);
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
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetById**
> \DeskPRO\API\Model\Response getContextSnippetById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"context" => "context_example" // string | 
];

try {
    $result = $api->getContextSnippetById($params);
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
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetByIdContent**
> \DeskPRO\API\Model\Response getContextSnippetByIdContent(array $params = [])



get the snippets content

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | the id of the snippet
"context" => "context_example", // string | 
"snippet" => "snippet_example" // string | the context of the category
];

try {
    $result = $api->getContextSnippetByIdContent($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the snippet |
 **context** | **string**|  |
 **snippet** | **string**| the context of the category | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetCategories**
> \DeskPRO\API\Model\Response getContextSnippetCategories(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getContextSnippetCategories($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |
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

# **getContextSnippetCategoryById**
> \DeskPRO\API\Model\Response getContextSnippetCategoryById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"context" => "context_example" // string | 
];

try {
    $result = $api->getContextSnippetCategoryById($params);
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
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetCategoryByIdSnippet**
> \DeskPRO\API\Model\Response getContextSnippetCategoryByIdSnippet(array $params = [])



get the snippets within a category

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | the id of the category
"context" => "context_example", // string | 
"snippet" => "snippet_example" // string | the context of the category
];

try {
    $result = $api->getContextSnippetCategoryByIdSnippet($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the category |
 **context** | **string**|  |
 **snippet** | **string**| the context of the category | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetCategoryCount**
> \DeskPRO\API\Model\Response getContextSnippetCategoryCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | 
];

try {
    $result = $api->getContextSnippetCategoryCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippetCount**
> \DeskPRO\API\Model\Response getContextSnippetCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | 
];

try {
    $result = $api->getContextSnippetCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContextSnippets**
> \DeskPRO\API\Model\Response getContextSnippets(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getContextSnippets($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |
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

