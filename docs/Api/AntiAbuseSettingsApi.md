# DeskPRO\API\AntiAbuseSettingsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettingAntiAbuseCaptcha**](AntiAbuseSettingsApi.md#getSettingAntiAbuseCaptcha) | **GET** /settings/anti_abuse/captcha | 
[**getSettingAntiAbusePortal**](AntiAbuseSettingsApi.md#getSettingAntiAbusePortal) | **GET** /settings/anti_abuse/portal | 


# **getSettingAntiAbuseCaptcha**
> \DeskPRO\API\Model\Response getSettingAntiAbuseCaptcha()



Get anti-abuse settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AntiAbuseSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AntiAbuseSettingsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getSettingAntiAbuseCaptcha();
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

# **getSettingAntiAbusePortal**
> \DeskPRO\API\Model\Response getSettingAntiAbusePortal()



Get anti-abuse settings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AntiAbuseSettingsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AntiAbuseSettingsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getSettingAntiAbusePortal();
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

