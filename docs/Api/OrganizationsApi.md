# DeskPRO\API\OrganizationsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrganizationById**](OrganizationsApi.md#deleteOrganizationById) | **DELETE** /organizations/{id} | 
[**deleteOrganizationByParentIdMemberByPerson**](OrganizationsApi.md#deleteOrganizationByParentIdMemberByPerson) | **DELETE** /organizations/{parentId}/members/{person} | 
[**deleteOrganizationByParentIdNoteById**](OrganizationsApi.md#deleteOrganizationByParentIdNoteById) | **DELETE** /organizations/{parentId}/notes/{id} | 
[**deleteOrganizationCustomFieldById**](OrganizationsApi.md#deleteOrganizationCustomFieldById) | **DELETE** /organization_custom_fields/{id} | 
[**getOrganizationById**](OrganizationsApi.md#getOrganizationById) | **GET** /organizations/{id} | 
[**getOrganizationByIdTicket**](OrganizationsApi.md#getOrganizationByIdTicket) | **GET** /organizations/{id}/tickets | 
[**getOrganizationByParentIdContactData**](OrganizationsApi.md#getOrganizationByParentIdContactData) | **GET** /organizations/{parentId}/contact_data | 
[**getOrganizationByParentIdContactDataById**](OrganizationsApi.md#getOrganizationByParentIdContactDataById) | **GET** /organizations/{parentId}/contact_data/{id} | 
[**getOrganizationByParentIdContactDataCount**](OrganizationsApi.md#getOrganizationByParentIdContactDataCount) | **GET** /organizations/{parentId}/contact_data/counts | 
[**getOrganizationByParentIdMember**](OrganizationsApi.md#getOrganizationByParentIdMember) | **GET** /organizations/{parentId}/members | 
[**getOrganizationByParentIdNote**](OrganizationsApi.md#getOrganizationByParentIdNote) | **GET** /organizations/{parentId}/notes | 
[**getOrganizationByParentIdNoteById**](OrganizationsApi.md#getOrganizationByParentIdNoteById) | **GET** /organizations/{parentId}/notes/{id} | 
[**getOrganizationByParentIdNoteCount**](OrganizationsApi.md#getOrganizationByParentIdNoteCount) | **GET** /organizations/{parentId}/notes/counts | 
[**getOrganizationCount**](OrganizationsApi.md#getOrganizationCount) | **GET** /organizations/counts | 
[**getOrganizationCustomFieldById**](OrganizationsApi.md#getOrganizationCustomFieldById) | **GET** /organization_custom_fields/{id} | 
[**getOrganizationCustomFields**](OrganizationsApi.md#getOrganizationCustomFields) | **GET** /organization_custom_fields | 
[**getOrganizations**](OrganizationsApi.md#getOrganizations) | **GET** /organizations | 


# **deleteOrganizationById**
> \DeskPRO\API\Model\Response deleteOrganizationById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteOrganizationById($id);
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

# **deleteOrganizationByParentIdMemberByPerson**
> \DeskPRO\API\Model\Response deleteOrganizationByParentIdMemberByPerson(string $parent_id, string $person, array $filters = [])



delete an organization member

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 
$person = "person_example"; // string | 
$filters = [
"id" => "id_example" // string | 
];

try {
    $result = $api->deleteOrganizationByParentIdMemberByPerson($parent_id, $person, $filters);
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
 **person** | **string**|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganizationByParentIdNoteById**
> \DeskPRO\API\Model\Response deleteOrganizationByParentIdNoteById(int $id, string $parent_id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->deleteOrganizationByParentIdNoteById($id, $parent_id);
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

# **deleteOrganizationCustomFieldById**
> \DeskPRO\API\Model\Response deleteOrganizationCustomFieldById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteOrganizationCustomFieldById($id);
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

# **getOrganizationById**
> \DeskPRO\API\Model\Response getOrganizationById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getOrganizationById($id);
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

# **getOrganizationByIdTicket**
> \DeskPRO\API\Model\Response getOrganizationByIdTicket(string $id)



Get tickets of the given organization

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = "id_example"; // string | 

try {
    $result = $api->getOrganizationByIdTicket($id);
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

# **getOrganizationByParentIdContactData**
> \DeskPRO\API\Model\Response getOrganizationByParentIdContactData(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
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
    $result = $api->getOrganizationByParentIdContactData($parent_id, $filters);
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

# **getOrganizationByParentIdContactDataById**
> \DeskPRO\API\Model\Response getOrganizationByParentIdContactDataById(int $id, string $parent_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getOrganizationByParentIdContactDataById($id, $parent_id);
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

# **getOrganizationByParentIdContactDataCount**
> \DeskPRO\API\Model\Response getOrganizationByParentIdContactDataCount(string $parent_id)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getOrganizationByParentIdContactDataCount($parent_id);
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

# **getOrganizationByParentIdMember**
> \DeskPRO\API\Model\Response getOrganizationByParentIdMember(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
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
    $result = $api->getOrganizationByParentIdMember($parent_id, $filters);
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

# **getOrganizationByParentIdNote**
> \DeskPRO\API\Model\Response getOrganizationByParentIdNote(string $parent_id, array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
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
    $result = $api->getOrganizationByParentIdNote($parent_id, $filters);
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

# **getOrganizationByParentIdNoteById**
> \DeskPRO\API\Model\Response getOrganizationByParentIdNoteById(int $id, string $parent_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource
$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getOrganizationByParentIdNoteById($id, $parent_id);
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

# **getOrganizationByParentIdNoteCount**
> \DeskPRO\API\Model\Response getOrganizationByParentIdNoteCount(string $parent_id)



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$parent_id = "parent_id_example"; // string | 

try {
    $result = $api->getOrganizationByParentIdNoteCount($parent_id);
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

# **getOrganizationCount**
> \DeskPRO\API\Model\Response getOrganizationCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"name" => "name_example", // string | name filter
"period_created" => "period_created_example", // string | period created filter
"user_group" => array("user_group_example"), // string[] | usergroups filter
"labels" => array("labels_example"), // string[] | labels filter option
"org_field_id" => "org_field_id_example" // string | *                  Custom organization field filter. To filter by a custom field with ID=1 you need to add  *                  ?org_field.1=value to the query string
];

try {
    $result = $api->getOrganizationCount($filters);
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
 **name** | **string**| name filter | [optional]
 **period_created** | **string**| period created filter | [optional]
 **user_group** | [**string[]**](../Model/string.md)| usergroups filter | [optional]
 **labels** | [**string[]**](../Model/string.md)| labels filter option | [optional]
 **org_field_id** | **string**| *                  Custom organization field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?org_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationCustomFieldById**
> \DeskPRO\API\Model\Response getOrganizationCustomFieldById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getOrganizationCustomFieldById($id);
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

# **getOrganizationCustomFields**
> \DeskPRO\API\Model\Response getOrganizationCustomFields(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getOrganizationCustomFields($filters);
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

# **getOrganizations**
> \DeskPRO\API\Model\Response getOrganizations(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\OrganizationsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new OrganizationsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"name" => "name_example", // string | name filter
"period_created" => "period_created_example", // string | period created filter
"user_group" => array("user_group_example"), // string[] | usergroups filter
"labels" => array("labels_example"), // string[] | labels filter option
"org_field_id" => "org_field_id_example" // string | *                  Custom organization field filter. To filter by a custom field with ID=1 you need to add  *                  ?org_field.1=value to the query string
];

try {
    $result = $api->getOrganizations($filters);
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
 **name** | **string**| name filter | [optional]
 **period_created** | **string**| period created filter | [optional]
 **user_group** | [**string[]**](../Model/string.md)| usergroups filter | [optional]
 **labels** | [**string[]**](../Model/string.md)| labels filter option | [optional]
 **org_field_id** | **string**| *                  Custom organization field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?org_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

