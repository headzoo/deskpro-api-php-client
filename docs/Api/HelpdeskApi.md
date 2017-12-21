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
> \DeskPRO\API\Model\Response getHelpdeskAgentClientInfo(array $params = [])



Used by apps when they need to know general information about a helpdesk such as which features are enabled

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getHelpdeskAgentClientInfo($params);
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

# **getHelpdeskAgentClientSetting**
> \DeskPRO\API\Model\Response getHelpdeskAgentClientSetting(array $params = [])



Get current user personal settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getHelpdeskAgentClientSetting($params);
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

# **getHelpdeskDiscover**
> \DeskPRO\API\Model\Response getHelpdeskDiscover(array $params = [])



Used by apps to detect that this is a real helpdesk

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getHelpdeskDiscover($params);
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

# **getHelpdeskUpdaterSetting**
> \DeskPRO\API\Model\Response getHelpdeskUpdaterSetting(array $params = [])



Get the updater settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getHelpdeskUpdaterSetting($params);
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

# **getHelpdeskUpdaterStatu**
> \DeskPRO\API\Model\Response getHelpdeskUpdaterStatu(array $params = [])



Get the updater status

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getHelpdeskUpdaterStatu($params);
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

# **setHelpdeskUpdaterManualSchedule**
> \DeskPRO\API\Model\Response setHelpdeskUpdaterManualSchedule(array $params = [])



Manually schedule an upgrade to run right now

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\HelpdeskApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new HelpdeskApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"delay" => 56 // int | delay before start
];

try {
    $result = $api->setHelpdeskUpdaterManualSchedule($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

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

