# DeskPRO\API\TagsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiTagById**](TagsApi.md#getApiTagById) | **GET** /api_tags/{id} | 
[**getApiTagByIdFlatten**](TagsApi.md#getApiTagByIdFlatten) | **GET** /api_tags/{id}/flatten | 
[**updateApiTagById**](TagsApi.md#updateApiTagById) | **PUT** /api_tags/{id} | 


# **getApiTagById**
> \DeskPRO\API\Model\Response getApiTagById(array $params = [])



get api tags collection

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TagsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TagsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of key
];

try {
    $result = $api->getApiTagById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of key |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiTagByIdFlatten**
> \DeskPRO\API\Model\Response getApiTagByIdFlatten(array $params = [])



get api tags faltten collection

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TagsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TagsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of key
];

try {
    $result = $api->getApiTagByIdFlatten($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of key |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApiTagById**
> \DeskPRO\API\Model\Response updateApiTagById(array $params = [])



update tags for key

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TagsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TagsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of key
"action" => "action_example", // string | Tag name
"value" => true // bool | Allow|deny
];

try {
    $result = $api->updateApiTagById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of key |
 **action** | **string**| Tag name | [optional]
 **value** | **bool**| Allow|deny | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

