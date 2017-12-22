# DeskPRO\API\FeedbackApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFeedbackById**](FeedbackApi.md#deleteFeedbackById) | **DELETE** /feedback/{id} | 
[**deleteFeedbackCommentById**](FeedbackApi.md#deleteFeedbackCommentById) | **DELETE** /feedback_comments/{id} | 
[**getFeedback**](FeedbackApi.md#getFeedback) | **GET** /feedback | 
[**getFeedbackById**](FeedbackApi.md#getFeedbackById) | **GET** /feedback/{id} | 
[**getFeedbackCategories**](FeedbackApi.md#getFeedbackCategories) | **GET** /feedback_categories | 
[**getFeedbackCommentById**](FeedbackApi.md#getFeedbackCommentById) | **GET** /feedback_comments/{id} | 
[**getFeedbackCommentCount**](FeedbackApi.md#getFeedbackCommentCount) | **GET** /feedback_comments/counts | 
[**getFeedbackComments**](FeedbackApi.md#getFeedbackComments) | **GET** /feedback_comments | 
[**getFeedbackCount**](FeedbackApi.md#getFeedbackCount) | **GET** /feedback/counts | 
[**getFeedbackTypeById**](FeedbackApi.md#getFeedbackTypeById) | **GET** /feedback_types/{id} | 
[**getFeedbackTypeCount**](FeedbackApi.md#getFeedbackTypeCount) | **GET** /feedback_types/counts | 
[**getFeedbackTypes**](FeedbackApi.md#getFeedbackTypes) | **GET** /feedback_types | 


# **deleteFeedbackById**
> \DeskPRO\API\Model\Response deleteFeedbackById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteFeedbackById($id);
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

# **deleteFeedbackCommentById**
> \DeskPRO\API\Model\Response deleteFeedbackCommentById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteFeedbackCommentById($id);
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

# **getFeedback**
> \DeskPRO\API\Model\Response getFeedback(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | comma separated ids list
"awaiting_validation" => true, // bool | select feedback awaiting validation only
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | limit with hidden_status
"status_category" => "status_category_example", // string | filter by status category
"category" => "category_example", // string | category title, or titles array
"custom_category" => "custom_category_example", // string | filter by custom category
"labels_mode" => "labels_mode_example", // string | how to load labels
"label" => "label_example", // string | select feedback with given lables
"no_labels" => true, // bool | select feedback have no label
"created_from" => "created_from_example", // string | limit by date, interval`s start
"created_to" => "created_to_example", // string | limit by date, interval`s end
"feedback_field_id" => "feedback_field_id_example", // string | *                  Custom feedback field filter. To filter by a custom field with ID=1 you need to add  *                  ?feedback_field.1=value to the query string
"order_by" => "order_by_example", // string | how to order result
"order_dir" => "order_dir_example" // string | order direction
];

try {
    $result = $api->getFeedback($filters);
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
 **ids** | **string**| comma separated ids list | [optional]
 **awaiting_validation** | **bool**| select feedback awaiting validation only | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| limit with hidden_status | [optional]
 **status_category** | **string**| filter by status category | [optional]
 **category** | **string**| category title, or titles array | [optional]
 **custom_category** | **string**| filter by custom category | [optional]
 **labels_mode** | **string**| how to load labels | [optional]
 **label** | **string**| select feedback with given lables | [optional]
 **no_labels** | **bool**| select feedback have no label | [optional]
 **created_from** | **string**| limit by date, interval&#x60;s start | [optional]
 **created_to** | **string**| limit by date, interval&#x60;s end | [optional]
 **feedback_field_id** | **string**| *                  Custom feedback field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?feedback_field.1&#x3D;value to the query string | [optional]
 **order_by** | **string**| how to order result | [optional]
 **order_dir** | **string**| order direction | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackById**
> \DeskPRO\API\Model\Response getFeedbackById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getFeedbackById($id);
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

# **getFeedbackCategories**
> \DeskPRO\API\Model\Response getFeedbackCategories()



get list of feedback categories

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getFeedbackCategories();
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

# **getFeedbackCommentById**
> \DeskPRO\API\Model\Response getFeedbackCommentById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getFeedbackCommentById($id);
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

# **getFeedbackCommentCount**
> \DeskPRO\API\Model\Response getFeedbackCommentCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getFeedbackCommentCount();
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

# **getFeedbackComments**
> \DeskPRO\API\Model\Response getFeedbackComments(array $filters = [])



get list of feedback comments

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => "page_example", // string | current page
"count" => "count_example", // string | per page comments quantity
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | a comma separated list of comment`s ids
"awaiting_validation" => "awaiting_validation_example", // string | set it if you want to fetch new comments
"category" => "category_example", // string | category to search, exact name
"status_category" => 56, // int | integer represents status category
"label" => "label_example", // string | a comma separated list of exact label names
"no_labels" => true, // bool | boolean value
"custom_category" => "custom_category_example", // string | an array of exact custom categories names
"status" => 56, // int | an integer value represents current status
"hidden_status" => "hidden_status_example", // string | an integer value represents current hidden_status
"created_from" => "created_from_example", // string | a datetime string to search comments since
"created_to" => "created_to_example", // string | a datetime string to search comments until
"feedback_field_id" => "feedback_field_id_example" // string | *                  Custom feedback field filter. To filter by a custom field with ID=1 you need to add  *                  ?feedback_field.1=value to the query string
];

try {
    $result = $api->getFeedbackComments($filters);
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
 **page** | **string**| current page | [optional]
 **count** | **string**| per page comments quantity | [optional]
 **limit** | **int**| Max number of resources to return | [optional]
 **ids** | **string**| a comma separated list of comment&#x60;s ids | [optional]
 **awaiting_validation** | **string**| set it if you want to fetch new comments | [optional]
 **category** | **string**| category to search, exact name | [optional]
 **status_category** | **int**| integer represents status category | [optional]
 **label** | **string**| a comma separated list of exact label names | [optional]
 **no_labels** | **bool**| boolean value | [optional]
 **custom_category** | **string**| an array of exact custom categories names | [optional]
 **status** | **int**| an integer value represents current status | [optional]
 **hidden_status** | **string**| an integer value represents current hidden_status | [optional]
 **created_from** | **string**| a datetime string to search comments since | [optional]
 **created_to** | **string**| a datetime string to search comments until | [optional]
 **feedback_field_id** | **string**| *                  Custom feedback field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?feedback_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackCount**
> \DeskPRO\API\Model\Response getFeedbackCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"awaiting_validation" => true, // bool | select feedback awaiting validation only
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | limit with hidden_status
"status_category" => "status_category_example", // string | filter by status category
"category" => "category_example", // string | category title, or titles array
"custom_category" => "custom_category_example", // string | filter by custom category
"labels_mode" => "labels_mode_example", // string | how to load labels
"label" => "label_example", // string | select feedback with given lables
"no_labels" => true, // bool | select feedback have no label
"ids" => "ids_example", // string | comma separated ids list
"created_from" => "created_from_example", // string | limit by date, interval`s start
"created_to" => "created_to_example", // string | limit by date, interval`s end
"feedback_field_id" => "feedback_field_id_example", // string | *                  Custom feedback field filter. To filter by a custom field with ID=1 you need to add  *                  ?feedback_field.1=value to the query string
"group_by" => true // bool | how to group counts
];

try {
    $result = $api->getFeedbackCount($filters);
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
 **awaiting_validation** | **bool**| select feedback awaiting validation only | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| limit with hidden_status | [optional]
 **status_category** | **string**| filter by status category | [optional]
 **category** | **string**| category title, or titles array | [optional]
 **custom_category** | **string**| filter by custom category | [optional]
 **labels_mode** | **string**| how to load labels | [optional]
 **label** | **string**| select feedback with given lables | [optional]
 **no_labels** | **bool**| select feedback have no label | [optional]
 **ids** | **string**| comma separated ids list | [optional]
 **created_from** | **string**| limit by date, interval&#x60;s start | [optional]
 **created_to** | **string**| limit by date, interval&#x60;s end | [optional]
 **feedback_field_id** | **string**| *                  Custom feedback field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?feedback_field.1&#x3D;value to the query string | [optional]
 **group_by** | **bool**| how to group counts | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeedbackTypeById**
> \DeskPRO\API\Model\Response getFeedbackTypeById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getFeedbackTypeById($id);
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

# **getFeedbackTypeCount**
> \DeskPRO\API\Model\Response getFeedbackTypeCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getFeedbackTypeCount();
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

# **getFeedbackTypes**
> \DeskPRO\API\Model\Response getFeedbackTypes(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\FeedbackApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new FeedbackApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getFeedbackTypes($filters);
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

