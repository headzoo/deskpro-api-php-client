# DeskPRO\API\TicketFormWidgetApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTicketFormWidgetCode**](TicketFormWidgetApi.md#getTicketFormWidgetCode) | **GET** /ticket-form-widget/code | 


# **getTicketFormWidgetCode**
> \DeskPRO\API\Model\Response getTicketFormWidgetCode(array $params = [])



Get ticket form widget JS code

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFormWidgetApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFormWidgetApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketFormWidgetCode($params);
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

