# DeskPRO\API\DepartmentsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteChatDepartmentById**](DepartmentsApi.md#deleteChatDepartmentById) | **DELETE** /chat_departments/{id} | 
[**deleteTicketDepartmentById**](DepartmentsApi.md#deleteTicketDepartmentById) | **DELETE** /ticket_departments/{id} | 
[**getChatDepartmentById**](DepartmentsApi.md#getChatDepartmentById) | **GET** /chat_departments/{id} | 
[**getChatDepartmentByIdAgent**](DepartmentsApi.md#getChatDepartmentByIdAgent) | **GET** /chat_departments/{id}/agents | 
[**getChatDepartmentCount**](DepartmentsApi.md#getChatDepartmentCount) | **GET** /chat_departments/counts | 
[**getChatDepartments**](DepartmentsApi.md#getChatDepartments) | **GET** /chat_departments | 
[**getTicketDepartmentById**](DepartmentsApi.md#getTicketDepartmentById) | **GET** /ticket_departments/{id} | 
[**getTicketDepartmentByIdAgent**](DepartmentsApi.md#getTicketDepartmentByIdAgent) | **GET** /ticket_departments/{id}/agents | 
[**getTicketDepartmentCount**](DepartmentsApi.md#getTicketDepartmentCount) | **GET** /ticket_departments/counts | 
[**getTicketDepartments**](DepartmentsApi.md#getTicketDepartments) | **GET** /ticket_departments | 


# **deleteChatDepartmentById**
> \DeskPRO\API\Model\Response deleteChatDepartmentById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteChatDepartmentById($params);
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

# **deleteTicketDepartmentById**
> \DeskPRO\API\Model\Response deleteTicketDepartmentById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteTicketDepartmentById($params);
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

# **getChatDepartmentById**
> \DeskPRO\API\Model\Response getChatDepartmentById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getChatDepartmentById($params);
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

# **getChatDepartmentByIdAgent**
> \DeskPRO\API\Model\Response getChatDepartmentByIdAgent(array $params = [])



Get agents belongs to department

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | the id of the department
];

try {
    $result = $api->getChatDepartmentByIdAgent($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the department |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatDepartmentCount**
> \DeskPRO\API\Model\Response getChatDepartmentCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getChatDepartmentCount($params);
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

# **getChatDepartments**
> \DeskPRO\API\Model\Response getChatDepartments(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getChatDepartments($params);
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

# **getTicketDepartmentById**
> \DeskPRO\API\Model\Response getTicketDepartmentById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketDepartmentById($params);
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

# **getTicketDepartmentByIdAgent**
> \DeskPRO\API\Model\Response getTicketDepartmentByIdAgent(array $params = [])



Get agents belongs to department

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | the id of the department
];

try {
    $result = $api->getTicketDepartmentByIdAgent($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the department |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketDepartmentCount**
> \DeskPRO\API\Model\Response getTicketDepartmentCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketDepartmentCount($params);
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

# **getTicketDepartments**
> \DeskPRO\API\Model\Response getTicketDepartments(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\DepartmentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new DepartmentsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketDepartments($params);
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

