# DeskPRO\API\SLAsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSlaById**](SLAsApi.md#getSlaById) | **GET** /slas/{id} | 
[**getSlas**](SLAsApi.md#getSlas) | **GET** /slas | 


# **getSlaById**
> \DeskPRO\API\Model\Response getSlaById(array $params = [])



get SLA

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SLAsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SLAsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | the id of SLA
];

try {
    $result = $api->getSlaById($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of SLA |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlas**
> \DeskPRO\API\Model\Response getSlas(array $params = [])



get SLAs collection

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\SLAsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new SLAsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getSlas($params);
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

