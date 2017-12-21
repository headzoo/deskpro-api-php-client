# DeskPRO\API\FeaturesApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFeatureByFeature**](FeaturesApi.md#getFeatureByFeature) | **GET** /features/{feature} | 
[**getFeatures**](FeaturesApi.md#getFeatures) | **GET** /features | 
[**updateFeatureByFeatureDisable**](FeaturesApi.md#updateFeatureByFeatureDisable) | **PUT** /features/{feature}/disable | 
[**updateFeatureByFeatureEnable**](FeaturesApi.md#updateFeatureByFeatureEnable) | **PUT** /features/{feature}/enable | 


# **getFeatureByFeature**
> \DeskPRO\API\Model\Response getFeatureByFeature(array $params = [])



Get specific feature.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeaturesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeaturesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"feature" => "feature_example", // string | 
"id" => "id_example" // string | id of the feature
];

try {
    $result = $api->getFeatureByFeature($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature** | **string**|  |
 **id** | **string**| id of the feature | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatures**
> \DeskPRO\API\Model\Response getFeatures(array $params = [])



Fetch available features list.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeaturesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeaturesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getFeatures($params);
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

# **updateFeatureByFeatureDisable**
> \DeskPRO\API\Model\Response updateFeatureByFeatureDisable(array $params = [])



Queue feature disabling.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeaturesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeaturesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"feature" => "feature_example", // string | 
"id" => "id_example" // string | id of the feature
];

try {
    $result = $api->updateFeatureByFeatureDisable($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature** | **string**|  |
 **id** | **string**| id of the feature | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFeatureByFeatureEnable**
> \DeskPRO\API\Model\Response updateFeatureByFeatureEnable(array $params = [])



Queue feature enabling.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeaturesApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeaturesApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"feature" => "feature_example", // string | 
"id" => "id_example" // string | id of the feature
];

try {
    $result = $api->updateFeatureByFeatureEnable($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature** | **string**|  |
 **id** | **string**| id of the feature | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

