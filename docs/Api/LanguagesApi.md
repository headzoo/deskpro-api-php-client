# DeskPRO\API\LanguagesApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLanguageAdminPhrase**](LanguagesApi.md#getLanguageAdminPhrase) | **GET** /languages/admin_phrases | 
[**getLanguageAgentPhrase**](LanguagesApi.md#getLanguageAgentPhrase) | **GET** /languages/agent_phrases | 
[**getLanguageById**](LanguagesApi.md#getLanguageById) | **GET** /languages/{id} | 
[**getLanguageCount**](LanguagesApi.md#getLanguageCount) | **GET** /languages/counts | 
[**getLanguages**](LanguagesApi.md#getLanguages) | **GET** /languages | 


# **getLanguageAdminPhrase**
> \DeskPRO\API\Model\Response getLanguageAdminPhrase()



provide admin phrases for frontend

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LanguagesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LanguagesApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getLanguageAdminPhrase();
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

# **getLanguageAgentPhrase**
> \DeskPRO\API\Model\Response getLanguageAgentPhrase()



provide agent phrases for frontend

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LanguagesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LanguagesApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getLanguageAgentPhrase();
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

# **getLanguageById**
> \DeskPRO\API\Model\Response getLanguageById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LanguagesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LanguagesApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getLanguageById($id);
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

# **getLanguageCount**
> \DeskPRO\API\Model\Response getLanguageCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LanguagesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LanguagesApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getLanguageCount();
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

# **getLanguages**
> \DeskPRO\API\Model\Response getLanguages(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LanguagesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LanguagesApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getLanguages($filters);
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

