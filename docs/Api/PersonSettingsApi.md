# DeskPRO\API\PersonSettingsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPersonSetting**](PersonSettingsApi.md#getPersonSetting) | **GET** /person_setting | 
[**getPersonSettingByName**](PersonSettingsApi.md#getPersonSettingByName) | **GET** /person_setting/{name} | 
[**setPersonSetting**](PersonSettingsApi.md#setPersonSetting) | **POST** /person_setting | 
[**updatePersonSetting**](PersonSettingsApi.md#updatePersonSetting) | **PUT** /person_setting | 


# **getPersonSetting**
> \DeskPRO\API\Model\Response getPersonSetting(array $params = [])



get person settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PersonSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PersonSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getPersonSetting($params);
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

# **getPersonSettingByName**
> \DeskPRO\API\Model\Response getPersonSettingByName(array $params = [])



get a person setting

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PersonSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PersonSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"name" => "name_example" // string | the name of the setting
];

try {
    $result = $api->getPersonSettingByName($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| the name of the setting |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPersonSetting**
> \DeskPRO\API\Model\Response setPersonSetting(array $params = [])



create a new person setting

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PersonSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PersonSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"name" => "name_example", // string | setting name
"value" => "value_example" // string | setting value
];

try {
    $result = $api->setPersonSetting($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| setting name |
 **value** | **string**| setting value |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePersonSetting**
> \DeskPRO\API\Model\Response updatePersonSetting(array $params = [])



update person setting

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PersonSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PersonSettingsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"name" => "name_example", // string | setting name
"value" => "value_example" // string | setting value
];

try {
    $result = $api->updatePersonSetting($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| setting name |
 **value** | **string**| setting value |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

