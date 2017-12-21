# DeskPRO\API\WebhooksApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhookTicketById**](WebhooksApi.md#deleteWebhookTicketById) | **DELETE** /webhooks/tickets/{id} | 
[**getWebhookTicket**](WebhooksApi.md#getWebhookTicket) | **GET** /webhooks/tickets | 
[**getWebhookTicketById**](WebhooksApi.md#getWebhookTicketById) | **GET** /webhooks/tickets/{id} | 


# **deleteWebhookTicketById**
> \DeskPRO\API\Model\Response deleteWebhookTicketById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WebhooksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WebhooksApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteWebhookTicketById($params);
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

# **getWebhookTicket**
> \DeskPRO\API\Model\Response getWebhookTicket(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WebhooksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WebhooksApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getWebhookTicket($params);
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

# **getWebhookTicketById**
> \DeskPRO\API\Model\Response getWebhookTicketById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\WebhooksApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new WebhooksApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getWebhookTicketById($params);
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

