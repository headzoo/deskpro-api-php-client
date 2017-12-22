# DeskPRO\API\TicketFiltersLegacyApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTicketFilterByFilterTicket**](TicketFiltersLegacyApi.md#getTicketFilterByFilterTicket) | **GET** /ticket_filters/{filter}/tickets | 
[**getTicketFilterById**](TicketFiltersLegacyApi.md#getTicketFilterById) | **GET** /ticket_filters/{id} | 
[**getTicketFilterByIdCount**](TicketFiltersLegacyApi.md#getTicketFilterByIdCount) | **GET** /ticket_filters/{id}/count | 
[**getTicketFilterCount**](TicketFiltersLegacyApi.md#getTicketFilterCount) | **GET** /ticket_filters/counts | 
[**getTicketFilterSetAllCount**](TicketFiltersLegacyApi.md#getTicketFilterSetAllCount) | **GET** /ticket_filter_sets/all/counts | 
[**getTicketFilterSetById**](TicketFiltersLegacyApi.md#getTicketFilterSetById) | **GET** /ticket_filter_sets/{id} | 
[**getTicketFilterSetByIdCount**](TicketFiltersLegacyApi.md#getTicketFilterSetByIdCount) | **GET** /ticket_filter_sets/{id}/count | 
[**getTicketFilterSetByIdFilter**](TicketFiltersLegacyApi.md#getTicketFilterSetByIdFilter) | **GET** /ticket_filter_sets/{id}/filters | 
[**getTicketFilterSets**](TicketFiltersLegacyApi.md#getTicketFilterSets) | **GET** /ticket_filter_sets | 
[**getTicketFilters**](TicketFiltersLegacyApi.md#getTicketFilters) | **GET** /ticket_filters | 
[**getTicketFiltersCounts**](TicketFiltersLegacyApi.md#getTicketFiltersCounts) | **GET** /ticket_filters_counts | 


# **getTicketFilterByFilterTicket**
> \DeskPRO\API\Model\Response getTicketFilterByFilterTicket(string $filter, array $filters = [])



Get filter's tickets. See /tickets endpoint docs for the parameter details.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$filter = "filter_example"; // string | 
$filters = [
"sort" => "sort_example", // string | tickets list sort
"order" => "order_example", // string | tickets list sort order
"page" => 56, // int | pagination page parameter
"count" => 56, // int | pagination results per page parameter.
"department" => 56, // int | department filter
"organization" => 56, // int | organization filter
"person" => 56, // int | person filter
"language" => 56, // int | language filter
"urgency" => 56, // int | urgency filter
"agent" => 56, // int | agent filter
"agent_team" => 56, // int | agent team filter
"waiting_time" => 56, // int | user waiting time filter
"all_waiting_time" => 56, // int | total user waiting time filter
"date_created" => 56, // int | date created filter
"ticket_field_id" => "ticket_field_id_example" // string | *                 Custom ticket field filter. To filter by a custom field with ID=1 you need to add      *                 ?ticket_field.1=value to the query string
];

try {
    $result = $api->getTicketFilterByFilterTicket($filter, $filters);
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


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| tickets list sort | [optional]
 **order** | **string**| tickets list sort order | [optional]
 **page** | **int**| pagination page parameter | [optional]
 **count** | **int**| pagination results per page parameter. | [optional]
 **department** | **int**| department filter | [optional]
 **organization** | **int**| organization filter | [optional]
 **person** | **int**| person filter | [optional]
 **language** | **int**| language filter | [optional]
 **urgency** | **int**| urgency filter | [optional]
 **agent** | **int**| agent filter | [optional]
 **agent_team** | **int**| agent team filter | [optional]
 **waiting_time** | **int**| user waiting time filter | [optional]
 **all_waiting_time** | **int**| total user waiting time filter | [optional]
 **date_created** | **int**| date created filter | [optional]
 **ticket_field_id** | **string**| *                 Custom ticket field filter. To filter by a custom field with ID&#x3D;1 you need to add      *                 ?ticket_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketFilterById**
> \DeskPRO\API\Model\Response getTicketFilterById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getTicketFilterById($id);
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

# **getTicketFilterByIdCount**
> \DeskPRO\API\Model\Response getTicketFilterByIdCount(int $id, array $filters = [])



Get a filter's count

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | the id of the filter
$filters = [
"group_by" => "group_by_example" // string | the grouping order you want
];

try {
    $result = $api->getTicketFilterByIdCount($id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the filter |

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

# **getTicketFilterCount**
> \DeskPRO\API\Model\Response getTicketFilterCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getTicketFilterCount();
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

# **getTicketFilterSetAllCount**
> \DeskPRO\API\Model\Response getTicketFilterSetAllCount(array $filters = [])



Get all filter set counts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getTicketFilterSetAllCount($filters);
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

# **getTicketFilterSetById**
> \DeskPRO\API\Model\Response getTicketFilterSetById(int $id)



get a filter set

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | the id of the filter set

try {
    $result = $api->getTicketFilterSetById($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the filter set |

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

# **getTicketFilterSetByIdCount**
> \DeskPRO\API\Model\Response getTicketFilterSetByIdCount(int $id, array $filters = [])



Get a filter set count

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | the id of the filter
$filters = [
"group_by" => array("group_by_example") // string[] | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getTicketFilterSetByIdCount($id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the filter |

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

# **getTicketFilterSetByIdFilter**
> \DeskPRO\API\Model\Response getTicketFilterSetByIdFilter(int $id)



get filters belong to filter set

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | the id of the filter set

try {
    $result = $api->getTicketFilterSetByIdFilter($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of the filter set |

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

# **getTicketFilterSets**
> \DeskPRO\API\Model\Response getTicketFilterSets()



get filter sets

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getTicketFilterSets();
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

# **getTicketFilters**
> \DeskPRO\API\Model\Response getTicketFilters(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketFilters($filters);
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

# **getTicketFiltersCounts**
> \DeskPRO\API\Model\Response getTicketFiltersCounts(array $filters = [])



Get all filters counts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketFiltersLegacyApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketFiltersLegacyApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"group_by" => "group_by_example" // string | [Ticket filter ID => group_by] map
];

try {
    $result = $api->getTicketFiltersCounts($filters);
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

