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
> \DeskPRO\API\Model\Response deleteAgentById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteAgentById($params);
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

# **deleteAgentByIdAgentPermission**
> \DeskPRO\API\Model\Response deleteAgentByIdAgentPermission(array $params = [])



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

$params = [
"id" => "id_example" // string | 
];

try {
    $result = $api->deleteAgentByIdAgentPermission($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentTeamById**
> \DeskPRO\API\Model\Response deleteAgentTeamById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteAgentTeamById($params);
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

# **getAgentAssignedToChat**
> \DeskPRO\API\Model\Response getAgentAssignedToChat(array $params = [])



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

$params = [
];

try {
    $result = $api->getAgentAssignedToChat($params);
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

# **getAgentById**
> \DeskPRO\API\Model\Response getAgentById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getAgentById($params);
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

# **getAgentCount**
> \DeskPRO\API\Model\Response getAgentCount(array $params = [])



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

$params = [
];

try {
    $result = $api->getAgentCount($params);
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

# **getAgentGroupById**
> \DeskPRO\API\Model\Response getAgentGroupById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getAgentGroupById($params);
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

# **getAgentGroupCount**
> \DeskPRO\API\Model\Response getAgentGroupCount(array $params = [])



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

$params = [
];

try {
    $result = $api->getAgentGroupCount($params);
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

# **getAgentGroups**
> \DeskPRO\API\Model\Response getAgentGroups(array $params = [])



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

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAgentGroups($params);
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

# **getAgentOnline**
> \DeskPRO\API\Model\Response getAgentOnline(array $params = [])



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

$params = [
];

try {
    $result = $api->getAgentOnline($params);
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

# **getAgentTeamById**
> \DeskPRO\API\Model\Response getAgentTeamById(array $params = [])



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

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getAgentTeamById($params);
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

# **getAgentTeamByIdAgent**
> \DeskPRO\API\Model\Response getAgentTeamByIdAgent(array $params = [])



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

$params = [
"id" => 56 // int | the id of team
];

try {
    $result = $api->getAgentTeamByIdAgent($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the id of team |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentTeamCount**
> \DeskPRO\API\Model\Response getAgentTeamCount(array $params = [])



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

$params = [
];

try {
    $result = $api->getAgentTeamCount($params);
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

# **getAgentTeams**
> \DeskPRO\API\Model\Response getAgentTeams(array $params = [])



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

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAgentTeams($params);
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

# **getAgents**
> \DeskPRO\API\Model\Response getAgents(array $params = [])



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

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"is_deleted" => 56 // int | deleted filter, defaults to 0
];

try {
    $result = $api->getAgents($params);
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
 **is_deleted** | **int**| deleted filter, defaults to 0 | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

