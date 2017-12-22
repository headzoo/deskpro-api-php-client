# DeskPRO\API\PeopleApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePeopleById**](PeopleApi.md#deletePeopleById) | **DELETE** /people/{id} | 
[**deletePeopleByParentIdNoteById**](PeopleApi.md#deletePeopleByParentIdNoteById) | **DELETE** /people/{parentId}/notes/{id} | 
[**deletePersonCustomFieldById**](PeopleApi.md#deletePersonCustomFieldById) | **DELETE** /person_custom_fields/{id} | 
[**getPeople**](PeopleApi.md#getPeople) | **GET** /people | 
[**getPeopleById**](PeopleApi.md#getPeopleById) | **GET** /people/{id} | 
[**getPeopleByIdTicket**](PeopleApi.md#getPeopleByIdTicket) | **GET** /people/{id}/tickets | 
[**getPeopleByParentIdContactData**](PeopleApi.md#getPeopleByParentIdContactData) | **GET** /people/{parentId}/contact_data | 
[**getPeopleByParentIdContactDataById**](PeopleApi.md#getPeopleByParentIdContactDataById) | **GET** /people/{parentId}/contact_data/{id} | 
[**getPeopleByParentIdContactDataCount**](PeopleApi.md#getPeopleByParentIdContactDataCount) | **GET** /people/{parentId}/contact_data/counts | 
[**getPeopleByParentIdNote**](PeopleApi.md#getPeopleByParentIdNote) | **GET** /people/{parentId}/notes | 
[**getPeopleByParentIdNoteById**](PeopleApi.md#getPeopleByParentIdNoteById) | **GET** /people/{parentId}/notes/{id} | 
[**getPeopleByParentIdNoteCount**](PeopleApi.md#getPeopleByParentIdNoteCount) | **GET** /people/{parentId}/notes/counts | 
[**getPeopleCount**](PeopleApi.md#getPeopleCount) | **GET** /people/counts | 
[**getPeopleOnboardingNew**](PeopleApi.md#getPeopleOnboardingNew) | **GET** /people/onboarding/new | 
[**getPeopleOnboardingPending**](PeopleApi.md#getPeopleOnboardingPending) | **GET** /people/onboarding/pending | 
[**getPersonCustomFieldById**](PeopleApi.md#getPersonCustomFieldById) | **GET** /person_custom_fields/{id} | 
[**getPersonCustomFields**](PeopleApi.md#getPersonCustomFields) | **GET** /person_custom_fields | 
[**updatePeopleByIdPermission**](PeopleApi.md#updatePeopleByIdPermission) | **PUT** /people/{id}/permissions | 


# **deletePeopleById**
> \DeskPRO\API\Model\Response deletePeopleById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deletePeopleById($id);
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

# **deletePeopleByParentIdNoteById**
> \DeskPRO\API\Model\Response deletePeopleByParentIdNoteById(int $id, string $parent_id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->deletePeopleByParentIdNoteById($id, $parent_id);
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
 **parent_id** | **string**|  |

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

# **deletePersonCustomFieldById**
> \DeskPRO\API\Model\Response deletePersonCustomFieldById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deletePersonCustomFieldById($id);
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

# **getPeople**
> \DeskPRO\API\Model\Response getPeople(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"order_by" => "order_by_example", // string | people list sort
"order_dir" => "order_dir_example", // string | list sort order
"primary_email" => "primary_email_example", // string | primary email filter
"organization" => "organization_example", // string | Comma separated list of IDs
"is_agent" => true, // bool | agents filter
"is_deleted" => true, // bool | deleted filter
"not_me" => true, // bool | exclude yourself filter
"agent_team" => array("agent_team_example"), // string[] | agent teams filter
"user_group" => array("user_group_example"), // string[] | usergroups filter
"label" => array("label_example"), // string[] | labels filter option
"person_field_id" => "person_field_id_example" // string | *                  Custom person field filter. To filter by a custom field with ID=1 you need to add  *                  ?person_field.1=value to the query string
];

try {
    $result = $api->getPeople($filters);
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
 **order_by** | **string**| people list sort | [optional]
 **order_dir** | **string**| list sort order | [optional]
 **primary_email** | **string**| primary email filter | [optional]
 **organization** | **string**| Comma separated list of IDs | [optional]
 **is_agent** | **bool**| agents filter | [optional]
 **is_deleted** | **bool**| deleted filter | [optional]
 **not_me** | **bool**| exclude yourself filter | [optional]
 **agent_team** | [**string[]**](../Model/string.md)| agent teams filter | [optional]
 **user_group** | [**string[]**](../Model/string.md)| usergroups filter | [optional]
 **label** | [**string[]**](../Model/string.md)| labels filter option | [optional]
 **person_field_id** | **string**| *                  Custom person field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?person_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPeopleById**
> \DeskPRO\API\Model\Response getPeopleById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getPeopleById($id);
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

# **getPeopleByIdTicket**
> \DeskPRO\API\Model\Response getPeopleByIdTicket(string $id)



Get tickets of the given person

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = "id_example"; // string | Person ID

try {
    $result = $api->getPeopleByIdTicket($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Person ID |

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

# **getPeopleByParentIdContactData**
> \DeskPRO\API\Model\Response getPeopleByParentIdContactData(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getPeopleByParentIdContactData($parent_id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

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

# **getPeopleByParentIdContactDataById**
> \DeskPRO\API\Model\Response getPeopleByParentIdContactDataById(int $id, string $parent_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getPeopleByParentIdContactDataById($id, $parent_id);
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
 **parent_id** | **string**|  |

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

# **getPeopleByParentIdContactDataCount**
> \DeskPRO\API\Model\Response getPeopleByParentIdContactDataCount(string $parent_id)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getPeopleByParentIdContactDataCount($parent_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

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

# **getPeopleByParentIdNote**
> \DeskPRO\API\Model\Response getPeopleByParentIdNote(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 
$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getPeopleByParentIdNote($parent_id, $filters);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

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

# **getPeopleByParentIdNoteById**
> \DeskPRO\API\Model\Response getPeopleByParentIdNoteById(int $id, string $parent_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getPeopleByParentIdNoteById($id, $parent_id);
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
 **parent_id** | **string**|  |

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

# **getPeopleByParentIdNoteCount**
> \DeskPRO\API\Model\Response getPeopleByParentIdNoteCount(string $parent_id)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getPeopleByParentIdNoteCount($parent_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

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

# **getPeopleCount**
> \DeskPRO\API\Model\Response getPeopleCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"order_by" => "order_by_example", // string | people list sort
"order_dir" => "order_dir_example", // string | list sort order
"primary_email" => "primary_email_example", // string | primary email filter
"organization" => "organization_example", // string | Comma separated list of IDs
"is_agent" => true, // bool | agents filter
"is_deleted" => true, // bool | deleted filter
"not_me" => true, // bool | exclude yourself filter
"agent_team" => array("agent_team_example"), // string[] | agent teams filter
"user_group" => array("user_group_example"), // string[] | usergroups filter
"label" => array("label_example"), // string[] | labels filter option
"person_field_id" => "person_field_id_example" // string | *                  Custom person field filter. To filter by a custom field with ID=1 you need to add  *                  ?person_field.1=value to the query string
];

try {
    $result = $api->getPeopleCount($filters);
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
 **order_by** | **string**| people list sort | [optional]
 **order_dir** | **string**| list sort order | [optional]
 **primary_email** | **string**| primary email filter | [optional]
 **organization** | **string**| Comma separated list of IDs | [optional]
 **is_agent** | **bool**| agents filter | [optional]
 **is_deleted** | **bool**| deleted filter | [optional]
 **not_me** | **bool**| exclude yourself filter | [optional]
 **agent_team** | [**string[]**](../Model/string.md)| agent teams filter | [optional]
 **user_group** | [**string[]**](../Model/string.md)| usergroups filter | [optional]
 **label** | [**string[]**](../Model/string.md)| labels filter option | [optional]
 **person_field_id** | **string**| *                  Custom person field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?person_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPeopleOnboardingNew**
> \DeskPRO\API\Model\Response getPeopleOnboardingNew()



Get current user available onboardings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getPeopleOnboardingNew();
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

# **getPeopleOnboardingPending**
> \DeskPRO\API\Model\Response getPeopleOnboardingPending()



Get current user pending onboardings

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getPeopleOnboardingPending();
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

# **getPersonCustomFieldById**
> \DeskPRO\API\Model\Response getPersonCustomFieldById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getPersonCustomFieldById($id);
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

# **getPersonCustomFields**
> \DeskPRO\API\Model\Response getPersonCustomFields(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getPersonCustomFields($filters);
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

# **updatePeopleByIdPermission**
> \DeskPRO\API\Model\Response updatePeopleByIdPermission(string $id, bool $agent)



adds permissions (for now only accepts {agent: true} to add agent permissions)

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\PeopleApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new PeopleApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = "id_example"; // string | 
$agent = true; // bool | set as agent

try {
    $result = $api->updatePeopleByIdPermission($id, $agent);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **agent** | **bool**| set as agent |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent** | **bool**| set as agent |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

