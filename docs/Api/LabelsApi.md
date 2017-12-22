# DeskPRO\API\LabelsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTypeLabels**](LabelsApi.md#getTypeLabels) | **GET** /{type}_labels | 


# **getTypeLabels**
> \DeskPRO\API\Model\Response getTypeLabels(string $type, array $filters = [])



Get all labels by types

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\LabelsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new LabelsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$type = "type_example"; // string | Which entity type labels we are searching?
$filters = [
"term" => "term_example" // string | Filter label by given word
];

try {
    $result = $api->getTypeLabels($type, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Which entity type labels we are searching? |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| Filter label by given word | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

