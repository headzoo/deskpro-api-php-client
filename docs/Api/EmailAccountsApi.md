# DeskPRO\API\EmailAccountsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEmailAccountByIdCertificate**](EmailAccountsApi.md#deleteEmailAccountByIdCertificate) | **DELETE** /email_accounts/{id}/certificate | 
[**deleteEmailAccountByIdKey**](EmailAccountsApi.md#deleteEmailAccountByIdKey) | **DELETE** /email_accounts/{id}/key | 
[**setEmailAccountByIdEncryption**](EmailAccountsApi.md#setEmailAccountByIdEncryption) | **POST** /email_accounts/{id}/encryption | 


# **deleteEmailAccountByIdCertificate**
> \DeskPRO\API\Model\Response deleteEmailAccountByIdCertificate(int $id)



Delete a certificate

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\EmailAccountsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new EmailAccountsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the email account

try {
    $result = $api->deleteEmailAccountByIdCertificate($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the email account |

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

# **deleteEmailAccountByIdKey**
> \DeskPRO\API\Model\Response deleteEmailAccountByIdKey(int $id)



Delete a key

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\EmailAccountsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new EmailAccountsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the email account

try {
    $result = $api->deleteEmailAccountByIdKey($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the email account |

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

# **setEmailAccountByIdEncryption**
> \DeskPRO\API\Model\Response setEmailAccountByIdEncryption(int $id)



Upload a certificate and a key

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\EmailAccountsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new EmailAccountsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the email account

try {
    $result = $api->setEmailAccountByIdEncryption($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the email account |

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

