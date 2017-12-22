# DeskPRO\API\SearchApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSearch**](SearchApi.md#getSearch) | **GET** /search | 
[**getSearchByType**](SearchApi.md#getSearchByType) | **GET** /search/{type} | 
[**getSearchPeopleAndOrg**](SearchApi.md#getSearchPeopleAndOrg) | **GET** /search/people_and_orgs | 


# **getSearch**
> \DeskPRO\API\Model\Response getSearch(array $filters = [])



Search through articles, downloads, feedback, news, tickets, chatconversations, people and organizations.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SearchApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SearchApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"q" => "q_example", // string | search term
"sort" => "sort_example", // string | how to sort
"types" => "types_example" // string | comma separated list of types
];

try {
    $result = $api->getSearch($filters);
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
 **q** | **string**| search term | [optional]
 **sort** | **string**| how to sort | [optional]
 **types** | **string**| comma separated list of types | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearchByType**
> \DeskPRO\API\Model\Response getSearchByType(string $type, array $filters = [])



Search by entity type.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SearchApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SearchApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$type = "type_example"; // string | 
$filters = [
"q" => "q_example", // string | search term
"sort" => "sort_example" // string | how to sort
];

try {
    $result = $api->getSearchByType($type, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| search term | [optional]
 **sort** | **string**| how to sort | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearchPeopleAndOrg**
> \DeskPRO\API\Model\Response getSearchPeopleAndOrg(array $filters = [])



Search only organizations and people.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SearchApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SearchApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"q" => "q_example", // string | search term
"sort" => "sort_example" // string | how to sort
];

try {
    $result = $api->getSearchPeopleAndOrg($filters);
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
 **q** | **string**| search term | [optional]
 **sort** | **string**| how to sort | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

