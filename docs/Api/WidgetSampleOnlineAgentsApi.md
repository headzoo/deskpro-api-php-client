# DeskPRO\API\WidgetSampleOnlineAgentsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWidgetLiveDemoSampleState**](WidgetSampleOnlineAgentsApi.md#getWidgetLiveDemoSampleState) | **GET** /widget/live_demo/sample_state | 
[**setSettingBrandByBrandWidgetSendInstruction**](WidgetSampleOnlineAgentsApi.md#setSettingBrandByBrandWidgetSendInstruction) | **POST** /settings/brands/{brand}/widget/send-instructions | 


# **getWidgetLiveDemoSampleState**
> \DeskPRO\API\Model\Response getWidgetLiveDemoSampleState()



get widget sample online agent

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSampleOnlineAgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSampleOnlineAgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getWidgetLiveDemoSampleState();
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

# **setSettingBrandByBrandWidgetSendInstruction**
> \DeskPRO\API\Model\Response setSettingBrandByBrandWidgetSendInstruction(string $brand, string $email)



get widget sample online agent

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WidgetSampleOnlineAgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WidgetSampleOnlineAgentsApi(
    new Configuration('YOUR_API_KEY')
);

$brand = "brand_example"; // string | 
$email = "email_example"; // string | Email address

try {
    $result = $api->setSettingBrandByBrandWidgetSendInstruction($brand, $email);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand** | **string**|  |
 **email** | **string**| Email address |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

