# DeskPRO\API\GlossaryApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGlossaryById**](GlossaryApi.md#deleteGlossaryById) | **DELETE** /glossary/{id} | 
[**getGlossary**](GlossaryApi.md#getGlossary) | **GET** /glossary | 
[**getGlossaryById**](GlossaryApi.md#getGlossaryById) | **GET** /glossary/{id} | 
[**getGlossaryCount**](GlossaryApi.md#getGlossaryCount) | **GET** /glossary/counts | 
[**getGlossaryWord**](GlossaryApi.md#getGlossaryWord) | **GET** /glossary/words | 
[**getGlossaryWordByWord**](GlossaryApi.md#getGlossaryWordByWord) | **GET** /glossary/words/{word} | 


# **deleteGlossaryById**
> \DeskPRO\API\Model\Response deleteGlossaryById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteGlossaryById($id);
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

# **getGlossary**
> \DeskPRO\API\Model\Response getGlossary(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getGlossary($filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------

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

# **getGlossaryById**
> \DeskPRO\API\Model\Response getGlossaryById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getGlossaryById($id);
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

# **getGlossaryCount**
> \DeskPRO\API\Model\Response getGlossaryCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getGlossaryCount();
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

# **getGlossaryWord**
> \DeskPRO\API\Model\Response getGlossaryWord(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getGlossaryWord($filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------

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

# **getGlossaryWordByWord**
> \DeskPRO\API\Model\Response getGlossaryWordByWord(string $word)



Get a definition of the word

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\GlossaryApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new GlossaryApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$word = "word_example"; // string | The word

try {
    $result = $api->getGlossaryWordByWord($word);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **word** | **string**| The word |

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

