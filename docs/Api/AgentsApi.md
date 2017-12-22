# DeskPRO\API\AgentsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAgentById**](AgentsApi.md#deleteAgentById) | **DELETE** /agents/{id} | 
[**deleteAgentByIdAgentPermission**](AgentsApi.md#deleteAgentByIdAgentPermission) | **DELETE** /agents/{id}/agent_permissions | 
[**deleteAgentTeamById**](AgentsApi.md#deleteAgentTeamById) | **DELETE** /agent_teams/{id} | 
[**getAgentAssignedToChat**](AgentsApi.md#getAgentAssignedToChat) | **GET** /agents/assigned_to_chat | 
[**getAgentById**](AgentsApi.md#getAgentById) | **GET** /agents/{id} | 
[**getAgentCount**](AgentsApi.md#getAgentCount) | **GET** /agents/counts | 
[**getAgentGroupById**](AgentsApi.md#getAgentGroupById) | **GET** /agent_groups/{id} | 
[**getAgentGroupCount**](AgentsApi.md#getAgentGroupCount) | **GET** /agent_groups/counts | 
[**getAgentGroups**](AgentsApi.md#getAgentGroups) | **GET** /agent_groups | 
[**getAgentOnline**](AgentsApi.md#getAgentOnline) | **GET** /agents/online | 
[**getAgentTeamById**](AgentsApi.md#getAgentTeamById) | **GET** /agent_teams/{id} | 
[**getAgentTeamByIdAgent**](AgentsApi.md#getAgentTeamByIdAgent) | **GET** /agent_teams/{id}/agents | 
[**getAgentTeamCount**](AgentsApi.md#getAgentTeamCount) | **GET** /agent_teams/counts | 
[**getAgentTeams**](AgentsApi.md#getAgentTeams) | **GET** /agent_teams | 
[**getAgents**](AgentsApi.md#getAgents) | **GET** /agents | 


# **deleteAgentById**
> \DeskPRO\API\Model\Response deleteAgentById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteAgentById($id);
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

# **deleteAgentByIdAgentPermission**
> \DeskPRO\API\Model\Response deleteAgentByIdAgentPermission(string $id)



remove agents permission (converts agent to user, unassigns tickets)

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = "id_example"; // string | 

try {
    $result = $api->deleteAgentByIdAgentPermission($id);
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

# **deleteAgentTeamById**
> \DeskPRO\API\Model\Response deleteAgentTeamById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteAgentTeamById($id);
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

# **getAgentAssignedToChat**
> \DeskPRO\API\Model\Response getAgentAssignedToChat()



get a list of agents, assigned to chats

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAgentAssignedToChat();
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

# **getAgentById**
> \DeskPRO\API\Model\Response getAgentById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getAgentById($id);
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

# **getAgentCount**
> \DeskPRO\API\Model\Response getAgentCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAgentCount();
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

# **getAgentGroupById**
> \DeskPRO\API\Model\Response getAgentGroupById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getAgentGroupById($id);
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

# **getAgentGroupCount**
> \DeskPRO\API\Model\Response getAgentGroupCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAgentGroupCount();
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

# **getAgentGroups**
> \DeskPRO\API\Model\Response getAgentGroups(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAgentGroups($filters);
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

# **getAgentOnline**
> \DeskPRO\API\Model\Response getAgentOnline()



get a list of online agents

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAgentOnline();
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

# **getAgentTeamById**
> \DeskPRO\API\Model\Response getAgentTeamById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getAgentTeamById($id);
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

# **getAgentTeamByIdAgent**
> \DeskPRO\API\Model\Response getAgentTeamByIdAgent(int $id)



Return agents from team given team

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | the id of team

try {
    $result = $api->getAgentTeamByIdAgent($id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of team |

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

# **getAgentTeamCount**
> \DeskPRO\API\Model\Response getAgentTeamCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getAgentTeamCount();
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

# **getAgentTeams**
> \DeskPRO\API\Model\Response getAgentTeams(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAgentTeams($filters);
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

# **getAgents**
> \DeskPRO\API\Model\Response getAgents(array $filters = [])



get list of agents

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\AgentsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new AgentsApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"is_deleted" => 56 // int | deleted filter, defaults to 0
];

try {
    $result = $api->getAgents($filters);
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
 **is_deleted** | **int**| deleted filter, defaults to 0 | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

