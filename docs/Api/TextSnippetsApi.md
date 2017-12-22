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
> \DeskPRO\API\Model\Response deleteContextSnippetById(int $id, string $context)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$context = "context_example"; // string | 

try {
    $result = $api->deleteContextSnippetById($id, $context);
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

# **deleteContextSnippetCategoryById**
> \DeskPRO\API\Model\Response deleteContextSnippetCategoryById(int $id, string $context)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$context = "context_example"; // string | 

try {
    $result = $api->deleteContextSnippetCategoryById($id, $context);
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

# **getContextSnippetById**
> \DeskPRO\API\Model\Response getContextSnippetById(int $id, string $context)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$context = "context_example"; // string | 

try {
    $result = $api->getContextSnippetById($id, $context);
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

# **getContextSnippetByIdContent**
> \DeskPRO\API\Model\Response getContextSnippetByIdContent(int $id, string $context, array $filters = [])



get the snippets content

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | the id of the snippet
$context = "context_example"; // string | 
$filters = [
"snippet" => "snippet_example" // string | the context of the category
];

try {
    $result = $api->getContextSnippetByIdContent($id, $context, $filters);
    print_r($result->getData());
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

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \DeskPRO\API\Model\Response getContextSnippetCategories(string $context, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$context = "context_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getContextSnippetCategories($context, $filters);
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

# **getContextSnippetCategoryById**
> \DeskPRO\API\Model\Response getContextSnippetCategoryById(int $id, string $context)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$context = "context_example"; // string | 

try {
    $result = $api->getContextSnippetCategoryById($id, $context);
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

# **getContextSnippetCategoryByIdSnippet**
> \DeskPRO\API\Model\Response getContextSnippetCategoryByIdSnippet(int $id, string $context, array $filters = [])



get the snippets within a category

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | the id of the category
$context = "context_example"; // string | 
$filters = [
"snippet" => "snippet_example" // string | the context of the category
];

try {
    $result = $api->getContextSnippetCategoryByIdSnippet($id, $context, $filters);
    print_r($result->getData());
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

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \DeskPRO\API\Model\Response getContextSnippetCategoryCount(string $context)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$context = "context_example"; // string | 

try {
    $result = $api->getContextSnippetCategoryCount($context);
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

# **getContextSnippetCount**
> \DeskPRO\API\Model\Response getContextSnippetCount(string $context)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$context = "context_example"; // string | 

try {
    $result = $api->getContextSnippetCount($context);
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

# **getContextSnippets**
> \DeskPRO\API\Model\Response getContextSnippets(string $context, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TextSnippetsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TextSnippetsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$context = "context_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getContextSnippets($context, $filters);
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

