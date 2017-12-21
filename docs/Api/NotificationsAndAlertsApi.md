# DeskPRO\API\NotificationsAndAlertsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMeNotificationById**](NotificationsAndAlertsApi.md#deleteMeNotificationById) | **DELETE** /me/notifications/{id} | 
[**getMeNotification**](NotificationsAndAlertsApi.md#getMeNotification) | **GET** /me/notifications | 
[**getMeNotificationById**](NotificationsAndAlertsApi.md#getMeNotificationById) | **GET** /me/notifications/{id} | 
[**getMeNotificationCount**](NotificationsAndAlertsApi.md#getMeNotificationCount) | **GET** /me/notifications/counts | 
[**getNotifySetupActionAlert**](NotificationsAndAlertsApi.md#getNotifySetupActionAlert) | **GET** /notify/setup/action-alerts | 
[**getNotifySetupActionAlertClient**](NotificationsAndAlertsApi.md#getNotifySetupActionAlertClient) | **GET** /notify/setup/action-alerts/clients | 
[**setMeNotificationDismi**](NotificationsAndAlertsApi.md#setMeNotificationDismi) | **POST** /me/notifications/dismiss | 
[**setMeNotificationDismiAll**](NotificationsAndAlertsApi.md#setMeNotificationDismiAll) | **POST** /me/notifications/dismiss/all | 
[**setPusherAuth**](NotificationsAndAlertsApi.md#setPusherAuth) | **POST** /pusher/auth | 
[**updateNotifySetupActionAlertClient**](NotificationsAndAlertsApi.md#updateNotifySetupActionAlertClient) | **PUT** /notify/setup/action-alerts/clients | 


# **deleteMeNotificationById**
> \DeskPRO\API\Model\Response deleteMeNotificationById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteMeNotificationById($params);
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

# **getMeNotification**
> \DeskPRO\API\Model\Response getMeNotification(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getMeNotification($params);
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

# **getMeNotificationById**
> \DeskPRO\API\Model\Response getMeNotificationById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getMeNotificationById($params);
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

# **getMeNotificationCount**
> \DeskPRO\API\Model\Response getMeNotificationCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getMeNotificationCount($params);
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

# **getNotifySetupActionAlert**
> \DeskPRO\API\Model\Response getNotifySetupActionAlert(array $params = [])



You can use this endpoint to gather information about clients you need to obtain notifications and alerts.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getNotifySetupActionAlert($params);
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

# **getNotifySetupActionAlertClient**
> \DeskPRO\API\Model\Response getNotifySetupActionAlertClient(array $params = [])



This endpoint provide you an ability to get pusher credentials you are using (admin only).

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"user_id" => 56, // int | 
"channel_name" => "channel_name_example", // string | 
"socket_id" => "socket_id_example" // string | 
];

try {
    $result = $api->getNotifySetupActionAlertClient($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **channel_name** | **string**|  |
 **socket_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMeNotificationDismi**
> \DeskPRO\API\Model\Response setMeNotificationDismi(array $params = [])



Dismiss set of alerts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"alert_ids" => array("alert_ids_example") // string[] | 
];

try {
    $result = $api->setMeNotificationDismi($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_ids** | [**string[]**](../Model/string.md)|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMeNotificationDismiAll**
> \DeskPRO\API\Model\Response setMeNotificationDismiAll(array $params = [])



dismiss all alerts for the current user

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->setMeNotificationDismiAll($params);
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

# **setPusherAuth**
> \DeskPRO\API\Model\Response setPusherAuth(array $params = [])



This endpoint provide you an ability to authenticate pusher app.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"user_id" => 56, // int | 
"channel_name" => "channel_name_example", // string | 
"socket_id" => "socket_id_example" // string | 
];

try {
    $result = $api->setPusherAuth($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **channel_name** | **string**|  |
 **socket_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotifySetupActionAlertClient**
> \DeskPRO\API\Model\Response updateNotifySetupActionAlertClient(array $params = [])



Save pusher credentials and enable/disable it.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\NotificationsAndAlertsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new NotificationsAndAlertsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => "id_example", // string | 
"key" => "key_example", // string | 
"secret" => "secret_example", // string | 
"host" => "host_example", // string | 
"port" => "port_example", // string | 
"mode" => "mode_example" // string | 
];

try {
    $result = $api->updateNotifySetupActionAlertClient($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **key** | **string**|  |
 **secret** | **string**|  |
 **host** | **string**|  |
 **port** | **string**|  |
 **mode** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

