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
> \DeskPRO\API\Model\Response deleteMeNotificationById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteMeNotificationById($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the resource |

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

# **getMeNotification**
> \DeskPRO\API\Model\Response getMeNotification(array $filters = [])



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

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getMeNotification($filters);
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
> \DeskPRO\API\Model\Response getMeNotificationById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->getMeNotificationById($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the resource |

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

# **getMeNotificationCount**
> \DeskPRO\API\Model\Response getMeNotificationCount()



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


try {
    $result = $api->getMeNotificationCount();
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

# **getNotifySetupActionAlert**
> \DeskPRO\API\Model\Response getNotifySetupActionAlert()



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


try {
    $result = $api->getNotifySetupActionAlert();
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

# **getNotifySetupActionAlertClient**
> \DeskPRO\API\Model\Response getNotifySetupActionAlertClient(int $user_id, string $channel_name, string $socket_id)



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

$user_id = 56; // int | 
$channel_name = "channel_name_example"; // string | 
$socket_id = "socket_id_example"; // string | 

try {
    $result = $api->getNotifySetupActionAlertClient($user_id, $channel_name, $socket_id);
    print_r($result->getData());
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

### Filters


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
> \DeskPRO\API\Model\Response setMeNotificationDismi(string[] $alert_ids)



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

$alert_ids = array("alert_ids_example"); // string[] | 

try {
    $result = $api->setMeNotificationDismi($alert_ids);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_ids** | [**string[]**](../Model/string.md)|  |

### Filters


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
> \DeskPRO\API\Model\Response setMeNotificationDismiAll()



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


try {
    $result = $api->setMeNotificationDismiAll();
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

# **setPusherAuth**
> \DeskPRO\API\Model\Response setPusherAuth(int $user_id, string $channel_name, string $socket_id)



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

$user_id = 56; // int | 
$channel_name = "channel_name_example"; // string | 
$socket_id = "socket_id_example"; // string | 

try {
    $result = $api->setPusherAuth($user_id, $channel_name, $socket_id);
    print_r($result->getData());
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

### Filters


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
> \DeskPRO\API\Model\Response updateNotifySetupActionAlertClient(string $id, string $key, string $secret, string $host, string $port, string $mode)



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

$id = "id_example"; // string | 
$key = "key_example"; // string | 
$secret = "secret_example"; // string | 
$host = "host_example"; // string | 
$port = "port_example"; // string | 
$mode = "mode_example"; // string | 

try {
    $result = $api->updateNotifySetupActionAlertClient($id, $key, $secret, $host, $port, $mode);
    print_r($result->getData());
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

### Filters


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

