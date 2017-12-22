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
> \DeskPRO\API\Model\Response deleteNewTicketFilterById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteNewTicketFilterById($id);
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

# **deleteNewTicketFilterSetById**
> \DeskPRO\API\Model\Response deleteNewTicketFilterSetById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteNewTicketFilterSetById($id);
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

# **getNewTicketFilter**
> \DeskPRO\API\Model\Response getNewTicketFilter(array $filters = [])



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

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewTicketFilter($filters);
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

# **getNewTicketFilterByFilterCount**
> \DeskPRO\API\Model\Response getNewTicketFilterByFilterCount(int $filter, array $filters = [])



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

$filter = 56; // int | the id of the filter
$filters = [
"group_by" => "group_by_example" // string | the grouping order you want
];

try {
    $result = $api->getNewTicketFilterByFilterCount($filter, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| the id of the filter |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \DeskPRO\API\Model\Response getNewTicketFilterByFilterTicket(string $filter)



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

$filter = "filter_example"; // string | 

try {
    $result = $api->getNewTicketFilterByFilterTicket($filter);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  |

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

# **getNewTicketFilterById**
> \DeskPRO\API\Model\Response getNewTicketFilterById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->getNewTicketFilterById($id);
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

# **getNewTicketFilterCount**
> \DeskPRO\API\Model\Response getNewTicketFilterCount()



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


try {
    $result = $api->getNewTicketFilterCount();
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

# **getNewTicketFilterSet**
> \DeskPRO\API\Model\Response getNewTicketFilterSet(array $filters = [])



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

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewTicketFilterSet($filters);
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

# **getNewTicketFilterSetAllCount**
> \DeskPRO\API\Model\Response getNewTicketFilterSetAllCount(array $filters = [])



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

$filters = [
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFilterSetAllCount($filters);
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
> \DeskPRO\API\Model\Response getNewTicketFilterSetById(int $id)



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

$id = 56; // int | The id of the resource

try {
    $result = $api->getNewTicketFilterSetById($id);
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

# **getNewTicketFilterSetBySetCount**
> \DeskPRO\API\Model\Response getNewTicketFilterSetBySetCount(int $set, array $filters = [])



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

$set = 56; // int | the id of the filter
$filters = [
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFilterSetBySetCount($set, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **int**| the id of the filter |

### Filters


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

# **getNewTicketFilterSetBySetFilter**
> \DeskPRO\API\Model\Response getNewTicketFilterSetBySetFilter(string $set, array $filters = [])



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

$set = "set_example"; // string | 
$filters = [
"id" => 56 // int | the id of the filter set
];

try {
    $result = $api->getNewTicketFilterSetBySetFilter($set, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \DeskPRO\API\Model\Response getNewTicketFilterSetCount()



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


try {
    $result = $api->getNewTicketFilterSetCount();
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

# **getNewTicketFiltersCount**
> \DeskPRO\API\Model\Response getNewTicketFiltersCount(array $filters = [])



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

$filters = [
"group_by" => "group_by_example" // string | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getNewTicketFiltersCount($filters);
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
 **group_by** | **string**| [Ticket filter ID &#x3D;&gt; group_by] map | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

