# DeskPRO\API\TicketFiltersApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNewTicketFilterById**](TicketFiltersApi.md#deleteNewTicketFilterById) | **DELETE** /new/ticket_filters/{id} | 
[**deleteNewTicketFilterSetById**](TicketFiltersApi.md#deleteNewTicketFilterSetById) | **DELETE** /new/ticket_filter_sets/{id} | 
[**getNewTicketFilter**](TicketFiltersApi.md#getNewTicketFilter) | **GET** /new/ticket_filters | 
[**getNewTicketFilterByFilterCount**](TicketFiltersApi.md#getNewTicketFilterByFilterCount) | **GET** /new/ticket_filters/{filter}/count | 
[**getNewTicketFilterByFilterTicket**](TicketFiltersApi.md#getNewTicketFilterByFilterTicket) | **GET** /new/ticket_filters/{filter}/tickets | 
[**getNewTicketFilterById**](TicketFiltersApi.md#getNewTicketFilterById) | **GET** /new/ticket_filters/{id} | 
[**getNewTicketFilterCount**](TicketFiltersApi.md#getNewTicketFilterCount) | **GET** /new/ticket_filters/counts | 
[**getNewTicketFilterSet**](TicketFiltersApi.md#getNewTicketFilterSet) | **GET** /new/ticket_filter_sets | 
[**getNewTicketFilterSetAllCount**](TicketFiltersApi.md#getNewTicketFilterSetAllCount) | **GET** /new/ticket_filter_sets/all/counts | 
[**getNewTicketFilterSetById**](TicketFiltersApi.md#getNewTicketFilterSetById) | **GET** /new/ticket_filter_sets/{id} | 
[**getNewTicketFilterSetBySetCount**](TicketFiltersApi.md#getNewTicketFilterSetBySetCount) | **GET** /new/ticket_filter_sets/{set}/count | 
[**getNewTicketFilterSetBySetFilter**](TicketFiltersApi.md#getNewTicketFilterSetBySetFilter) | **GET** /new/ticket_filter_sets/{set}/filters | 
[**getNewTicketFilterSetCount**](TicketFiltersApi.md#getNewTicketFilterSetCount) | **GET** /new/ticket_filter_sets/counts | 
[**getNewTicketFiltersCount**](TicketFiltersApi.md#getNewTicketFiltersCount) | **GET** /new/ticket_filters_counts | 


# **deleteNewTicketFilterById**
> \DeskPRO\API\Model\Response deleteNewTicketFilterById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteNewTicketFilterById($params);
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

# **deleteNewTicketFilterSetById**
> \DeskPRO\API\Model\Response deleteNewTicketFilterSetById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteNewTicketFilterSetById($params);
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

# **getNewTicketFilter**
> \DeskPRO\API\Model\Response getNewTicketFilter(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewTicketFilter($params);
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

# **getNewTicketFilterByFilterCount**
> \DeskPRO\API\Model\Response getNewTicketFilterByFilterCount(array $params = [])



Get a filter's count

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"filter" => 56, // int | the id of the filter
"group_by" => "group_by_example" // string | the grouping order you want
];

try {
    $result = $api->getNewTicketFilterByFilterCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| the id of the filter |
 **group_by** | **string**| the grouping order you want | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterByFilterTicket**
> \DeskPRO\API\Model\Response getNewTicketFilterByFilterTicket(array $params = [])



get filtered tickets

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"filter" => "filter_example" // string | 
];

try {
    $result = $api->getNewTicketFilterByFilterTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterById**
> \DeskPRO\API\Model\Response getNewTicketFilterById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getNewTicketFilterById($params);
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

# **getNewTicketFilterCount**
> \DeskPRO\API\Model\Response getNewTicketFilterCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getNewTicketFilterCount($params);
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

# **getNewTicketFilterSet**
> \DeskPRO\API\Model\Response getNewTicketFilterSet(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewTicketFilterSet($params);
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

# **getNewTicketFilterSetAllCount**
> \DeskPRO\API\Model\Response getNewTicketFilterSetAllCount(array $params = [])



Get all filter set counts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFilterSetAllCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_by** | [**string[]**](../Model/string.md)| [Ticket filter ID &#x3D;&gt; group_by] map | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterSetById**
> \DeskPRO\API\Model\Response getNewTicketFilterSetById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getNewTicketFilterSetById($params);
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

# **getNewTicketFilterSetBySetCount**
> \DeskPRO\API\Model\Response getNewTicketFilterSetBySetCount(array $params = [])



Get a filter set count

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"set" => 56, // int | the id of the filter
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFilterSetBySetCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **int**| the id of the filter |
 **group_by** | [**string[]**](../Model/string.md)| [Ticket filter ID &#x3D;&gt; group_by] map | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterSetBySetFilter**
> \DeskPRO\API\Model\Response getNewTicketFilterSetBySetFilter(array $params = [])



Get the filters within a filter set

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"set" => "set_example", // string | 
"id" => 56 // int | the id of the filter set
];

try {
    $result = $api->getNewTicketFilterSetBySetFilter($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**|  |
 **id** | **int**| the id of the filter set | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewTicketFilterSetCount**
> \DeskPRO\API\Model\Response getNewTicketFilterSetCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getNewTicketFilterSetCount($params);
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

# **getNewTicketFiltersCount**
> \DeskPRO\API\Model\Response getNewTicketFiltersCount(array $params = [])



Get all filters counts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"group_by" => "group_by_example" // string | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFiltersCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_by** | **string**| [Ticket filter ID &#x3D;&gt; group_by] map | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

