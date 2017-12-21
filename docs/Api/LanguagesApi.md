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
> \DeskPRO\API\Model\Response getLanguageAdminPhrase(array $params = [])



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

$params = [
];

try {
    $result = $api->getLanguageAdminPhrase($params);
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

# **getLanguageAgentPhrase**
> \DeskPRO\API\Model\Response getLanguageAgentPhrase(array $params = [])



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

$params = [
];

try {
    $result = $api->getLanguageAgentPhrase($params);
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

# **getLanguageById**
> \DeskPRO\API\Model\Response getLanguageById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getLanguageById($params);
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

# **getLanguageCount**
> \DeskPRO\API\Model\Response getLanguageCount(array $params = [])



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

$params = [
];

try {
    $result = $api->getLanguageCount($params);
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

# **getLanguages**
> \DeskPRO\API\Model\Response getLanguages(array $params = [])



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

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getLanguages($params);
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

