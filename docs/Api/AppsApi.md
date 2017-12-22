# DeskPRO\API\AppsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAppProxyHttpByInstance**](AppsApi.md#deleteAppProxyHttpByInstance) | **DELETE** /apps/proxy-http/{instance} | 
[**deleteAppZapierHookById**](AppsApi.md#deleteAppZapierHookById) | **DELETE** /apps/zapier/hooks/{id} | 
[**getAppPackageById**](AppsApi.md#getAppPackageById) | **GET** /app_packages/{id} | 
[**getAppPackageCount**](AppsApi.md#getAppPackageCount) | **GET** /app_packages/counts | 
[**getAppPackages**](AppsApi.md#getAppPackages) | **GET** /app_packages | 
[**getAppProxyHttpByInstance**](AppsApi.md#getAppProxyHttpByInstance) | **GET** /apps/proxy-http/{instance} | 
[**getAppZapierPing**](AppsApi.md#getAppZapierPing) | **GET** /apps/zapier/ping | 
[**getApps**](AppsApi.md#getApps) | **GET** /apps | 
[**headAppProxyHttpByInstance**](AppsApi.md#headAppProxyHttpByInstance) | **HEAD** /apps/proxy-http/{instance} | 
[**optionsAppProxyHttpByInstance**](AppsApi.md#optionsAppProxyHttpByInstance) | **OPTIONS** /apps/proxy-http/{instance} | 
[**patchAppProxyHttpByInstance**](AppsApi.md#patchAppProxyHttpByInstance) | **PATCH** /apps/proxy-http/{instance} | 
[**setAppProxyHttpByInstance**](AppsApi.md#setAppProxyHttpByInstance) | **POST** /apps/proxy-http/{instance} | 
[**updateAppProxyHttpByInstance**](AppsApi.md#updateAppProxyHttpByInstance) | **PUT** /apps/proxy-http/{instance} | 


# **deleteAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response deleteAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->deleteAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **deleteAppZapierHookById**
> \DeskPRO\API\Model\Response deleteAppZapierHookById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteAppZapierHookById($id);
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

# **getAppPackageById**
> \DeskPRO\API\Model\Response getAppPackageById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getAppPackageById($id);
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppPackageCount**
> \DeskPRO\API\Model\Response getAppPackageCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAppPackageCount();
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppPackages**
> \DeskPRO\API\Model\Response getAppPackages(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAppPackages($filters);
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response getAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->getAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **getAppZapierPing**
> \DeskPRO\API\Model\Response getAppZapierPing()



ping and if it not the case install Zapier app

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAppZapierPing();
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

# **getApps**
> \DeskPRO\API\Model\Response getApps()



Returns a list of application instances

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getApps();
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

# **headAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response headAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->headAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **optionsAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response optionsAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->optionsAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **patchAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response patchAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->patchAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **setAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response setAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->setAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

# **updateAppProxyHttpByInstance**
> \DeskPRO\API\Model\Response updateAppProxyHttpByInstance(string $instance)



App http proxy

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AppsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AppsApi(
    new Configuration('YOUR_API_KEY')
);

$instance = "instance_example"; // string | 

try {
    $result = $api->updateAppProxyHttpByInstance($instance);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance** | **string**|  |

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

