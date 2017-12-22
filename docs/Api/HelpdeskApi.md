# DeskPRO\API\HelpdeskApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHelpdeskAgentClientInfo**](HelpdeskApi.md#getHelpdeskAgentClientInfo) | **GET** /helpdesk/agent-client/info | 
[**getHelpdeskAgentClientSetting**](HelpdeskApi.md#getHelpdeskAgentClientSetting) | **GET** /helpdesk/agent-client/settings | 
[**getHelpdeskDiscover**](HelpdeskApi.md#getHelpdeskDiscover) | **GET** /helpdesk/discover | 
[**getHelpdeskUpdaterSetting**](HelpdeskApi.md#getHelpdeskUpdaterSetting) | **GET** /helpdesk/updater/settings | 
[**getHelpdeskUpdaterStatu**](HelpdeskApi.md#getHelpdeskUpdaterStatu) | **GET** /helpdesk/updater/status | 
[**setHelpdeskUpdaterManualSchedule**](HelpdeskApi.md#setHelpdeskUpdaterManualSchedule) | **POST** /helpdesk/updater/manual-schedule | 


# **getHelpdeskAgentClientInfo**
> \DeskPRO\API\Model\Response getHelpdeskAgentClientInfo()



Used by apps when they need to know general information about a helpdesk such as which features are enabled

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getHelpdeskAgentClientInfo();
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

# **getHelpdeskAgentClientSetting**
> \DeskPRO\API\Model\Response getHelpdeskAgentClientSetting()



Get current user personal settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getHelpdeskAgentClientSetting();
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

# **getHelpdeskDiscover**
> \DeskPRO\API\Model\Response getHelpdeskDiscover()



Used by apps to detect that this is a real helpdesk

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getHelpdeskDiscover();
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

# **getHelpdeskUpdaterSetting**
> \DeskPRO\API\Model\Response getHelpdeskUpdaterSetting()



Get the updater settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getHelpdeskUpdaterSetting();
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

# **getHelpdeskUpdaterStatu**
> \DeskPRO\API\Model\Response getHelpdeskUpdaterStatu()



Get the updater status

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getHelpdeskUpdaterStatu();
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

# **setHelpdeskUpdaterManualSchedule**
> \DeskPRO\API\Model\Response setHelpdeskUpdaterManualSchedule(int $delay)



Manually schedule an upgrade to run right now

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$delay = 56; // int | delay before start

try {
    $result = $api->setHelpdeskUpdaterManualSchedule($delay);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delay** | **int**| delay before start |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delay** | **int**| delay before start |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

