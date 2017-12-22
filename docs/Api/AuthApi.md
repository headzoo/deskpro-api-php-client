# DeskPRO\API\AuthApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOauthClientById**](AuthApi.md#deleteOauthClientById) | **DELETE** /oauth_clients/{id} | 
[**getApiTokenDeviceSetupByAuth**](AuthApi.md#getApiTokenDeviceSetupByAuth) | **GET** /api_tokens/device_setup/{auth} | 
[**getApiTokenSession**](AuthApi.md#getApiTokenSession) | **GET** /api_tokens/session | 
[**getApiTokenUserSourceByUsersourceCallbackByFormat**](AuthApi.md#getApiTokenUserSourceByUsersourceCallbackByFormat) | **GET** /api_tokens/user_sources/{usersource}/callback/{format} | 
[**getApiTokenUserSourceByUsersourceLogin**](AuthApi.md#getApiTokenUserSourceByUsersourceLogin) | **GET** /api_tokens/user_sources/{usersource}/login | 
[**getApiTokenUserSourceContextFormat**](AuthApi.md#getApiTokenUserSourceContextFormat) | **GET** /api_tokens/user_sources/{context}.{_format} | 
[**getMe**](AuthApi.md#getMe) | **GET** /me | 
[**getMeDeviceSetupToken**](AuthApi.md#getMeDeviceSetupToken) | **GET** /me/device-setup-token | 
[**getMeProfile**](AuthApi.md#getMeProfile) | **GET** /me/profile | 
[**getOauthClientById**](AuthApi.md#getOauthClientById) | **GET** /oauth_clients/{id} | 
[**getOauthClientCount**](AuthApi.md#getOauthClientCount) | **GET** /oauth_clients/counts | 
[**getOauthClients**](AuthApi.md#getOauthClients) | **GET** /oauth_clients | 
[**setApiTokenUserSourceByUsersourceCallbackByFormat**](AuthApi.md#setApiTokenUserSourceByUsersourceCallbackByFormat) | **POST** /api_tokens/user_sources/{usersource}/callback/{format} | 


# **deleteOauthClientById**
> \DeskPRO\API\Model\Response deleteOauthClientById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteOauthClientById($id);
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

# **getApiTokenDeviceSetupByAuth**
> \DeskPRO\API\Model\Response getApiTokenDeviceSetupByAuth(string $auth)



Authenticate device by authorization code and return auth tokens

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$auth = "auth_example"; // string | 

try {
    $result = $api->getApiTokenDeviceSetupByAuth($auth);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth** | **string**|  |

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

# **getApiTokenSession**
> \DeskPRO\API\Model\Response getApiTokenSession()



creates a new api token based on the authenticated user's session

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getApiTokenSession();
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

# **getApiTokenUserSourceByUsersourceCallbackByFormat**
> \DeskPRO\API\Model\Response getApiTokenUserSourceByUsersourceCallbackByFormat(string $format, string $usersource)



Returns api token on usersource callback

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$format = "format_example"; // string | 
$usersource = "usersource_example"; // string | 

try {
    $result = $api->getApiTokenUserSourceByUsersourceCallbackByFormat($format, $usersource);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  |
 **usersource** | **string**|  |

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

# **getApiTokenUserSourceByUsersourceLogin**
> getApiTokenUserSourceByUsersourceLogin(string $usersource)



Login via usersource.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$usersource = "usersource_example"; // string | 

try {
    $api->getApiTokenUserSourceByUsersourceLogin($usersource);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usersource** | **string**|  |

### Filters
This endpoint does not need any filters.


### Return type

void (empty response body)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiTokenUserSourceContextFormat**
> getApiTokenUserSourceContextFormat(string $context, string $_format)



Get list of api token usersources.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$context = "context_example"; // string | 
$_format = "_format_example"; // string | 

try {
    $api->getApiTokenUserSourceContextFormat($context, $_format);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**|  |
 **_format** | **string**|  |

### Filters
This endpoint does not need any filters.


### Return type

void (empty response body)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMe**
> \DeskPRO\API\Model\Response getMe()



get information about the authenticated user

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getMe();
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

# **getMeDeviceSetupToken**
> \DeskPRO\API\Model\Response getMeDeviceSetupToken()



get my profile action

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getMeDeviceSetupToken();
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

# **getMeProfile**
> \DeskPRO\API\Model\Response getMeProfile()



get my profile action

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getMeProfile();
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

# **getOauthClientById**
> \DeskPRO\API\Model\Response getOauthClientById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getOauthClientById($id);
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

# **getOauthClientCount**
> \DeskPRO\API\Model\Response getOauthClientCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getOauthClientCount();
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

# **getOauthClients**
> \DeskPRO\API\Model\Response getOauthClients(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getOauthClients($filters);
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

# **setApiTokenUserSourceByUsersourceCallbackByFormat**
> \DeskPRO\API\Model\Response setApiTokenUserSourceByUsersourceCallbackByFormat(string $format, string $usersource)



Returns api token on usersource callback

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AuthApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AuthApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$format = "format_example"; // string | 
$usersource = "usersource_example"; // string | 

try {
    $result = $api->setApiTokenUserSourceByUsersourceCallbackByFormat($format, $usersource);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**|  |
 **usersource** | **string**|  |

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

