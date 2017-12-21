# DeskPRO\API\ChatsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAgentChatById**](ChatsApi.md#deleteAgentChatById) | **DELETE** /agent_chats/{id} | 
[**deleteAgentChatByIdDelete**](ChatsApi.md#deleteAgentChatByIdDelete) | **DELETE** /agent_chats/{id}/delete | 
[**deleteAgentChatByIdLeave**](ChatsApi.md#deleteAgentChatByIdLeave) | **DELETE** /agent_chats/{id}/leave | 
[**deleteAgentChatByParentIdMessageById**](ChatsApi.md#deleteAgentChatByParentIdMessageById) | **DELETE** /agent_chats/{parentId}/messages/{id} | 
[**deleteUserChatById**](ChatsApi.md#deleteUserChatById) | **DELETE** /user_chats/{id} | 
[**deleteUserChatCustomFieldById**](ChatsApi.md#deleteUserChatCustomFieldById) | **DELETE** /user_chat_custom_fields/{id} | 
[**getAgentChatById**](ChatsApi.md#getAgentChatById) | **GET** /agent_chats/{id} | 
[**getAgentChatByParentIdMessage**](ChatsApi.md#getAgentChatByParentIdMessage) | **GET** /agent_chats/{parentId}/messages | 
[**getAgentChatByParentIdMessageById**](ChatsApi.md#getAgentChatByParentIdMessageById) | **GET** /agent_chats/{parentId}/messages/{id} | 
[**getAgentChatByParentIdMessageByIdPage**](ChatsApi.md#getAgentChatByParentIdMessageByIdPage) | **GET** /agent_chats/{parentId}/messages/{id}/page | 
[**getAgentChatByParentIdMessageCount**](ChatsApi.md#getAgentChatByParentIdMessageCount) | **GET** /agent_chats/{parentId}/messages/counts | 
[**getAgentChatCount**](ChatsApi.md#getAgentChatCount) | **GET** /agent_chats/counts | 
[**getAgentChatGroup**](ChatsApi.md#getAgentChatGroup) | **GET** /agent_chats/groups | 
[**getAgentChatMessageCount**](ChatsApi.md#getAgentChatMessageCount) | **GET** /agent_chats/messages/counts | 
[**getAgentChats**](ChatsApi.md#getAgentChats) | **GET** /agent_chats | 
[**getUserChatByConversationIdMessage**](ChatsApi.md#getUserChatByConversationIdMessage) | **GET** /user_chats/{conversationId}/messages | 
[**getUserChatByConversationIdMessageCount**](ChatsApi.md#getUserChatByConversationIdMessageCount) | **GET** /user_chats/{conversationId}/messages/counts | 
[**getUserChatById**](ChatsApi.md#getUserChatById) | **GET** /user_chats/{id} | 
[**getUserChatCount**](ChatsApi.md#getUserChatCount) | **GET** /user_chats/counts | 
[**getUserChatCustomFieldById**](ChatsApi.md#getUserChatCustomFieldById) | **GET** /user_chat_custom_fields/{id} | 
[**getUserChatCustomFields**](ChatsApi.md#getUserChatCustomFields) | **GET** /user_chat_custom_fields | 
[**getUserChats**](ChatsApi.md#getUserChats) | **GET** /user_chats | 
[**updateAgentChatByParentIdMessageMarkAll**](ChatsApi.md#updateAgentChatByParentIdMessageMarkAll) | **PUT** /agent_chats/{parentId}/messages/mark_all | 
[**updateUserChatByIdAssignByAgentId**](ChatsApi.md#updateUserChatByIdAssignByAgentId) | **PUT** /user_chats/{id}/assign/{agentId} | 
[**updateUserChatByIdEnd**](ChatsApi.md#updateUserChatByIdEnd) | **PUT** /user_chats/{id}/end | 


# **deleteAgentChatById**
> \DeskPRO\API\Model\Response deleteAgentChatById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteAgentChatById($params);
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

# **deleteAgentChatByIdDelete**
> \DeskPRO\API\Model\Response deleteAgentChatByIdDelete(array $params = [])



delete group

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | a chat id
];

try {
    $result = $api->deleteAgentChatByIdDelete($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| a chat id |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentChatByIdLeave**
> \DeskPRO\API\Model\Response deleteAgentChatByIdLeave(array $params = [])



leave group

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | a chat id
];

try {
    $result = $api->deleteAgentChatByIdLeave($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| a chat id |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentChatByParentIdMessageById**
> \DeskPRO\API\Model\Response deleteAgentChatByParentIdMessageById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->deleteAgentChatByParentIdMessageById($params);
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
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserChatById**
> \DeskPRO\API\Model\Response deleteUserChatById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteUserChatById($params);
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

# **deleteUserChatCustomFieldById**
> \DeskPRO\API\Model\Response deleteUserChatCustomFieldById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteUserChatCustomFieldById($params);
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

# **getAgentChatById**
> \DeskPRO\API\Model\Response getAgentChatById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getAgentChatById($params);
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

# **getAgentChatByParentIdMessage**
> \DeskPRO\API\Model\Response getAgentChatByParentIdMessage(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"search" => "search_example", // string | 
"order" => "order_example" // string | 
];

try {
    $result = $api->getAgentChatByParentIdMessage($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
 **page** | **int**| Which page to display | [optional]
 **count** | **int**| Resource per page count | [optional]
 **limit** | **int**| Max number of resources to return | [optional]
 **ids** | **string**| Comma separated list of IDs | [optional]
 **search** | **string**|  | [optional]
 **order** | **string**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentChatByParentIdMessageById**
> \DeskPRO\API\Model\Response getAgentChatByParentIdMessageById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getAgentChatByParentIdMessageById($params);
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
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentChatByParentIdMessageByIdPage**
> \DeskPRO\API\Model\Response getAgentChatByParentIdMessageByIdPage(array $params = [])



get page where this message is

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"id" => "id_example" // string | 
];

try {
    $result = $api->getAgentChatByParentIdMessageByIdPage($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentChatByParentIdMessageCount**
> \DeskPRO\API\Model\Response getAgentChatByParentIdMessageCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getAgentChatByParentIdMessageCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentChatCount**
> \DeskPRO\API\Model\Response getAgentChatCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getAgentChatCount($params);
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

# **getAgentChatGroup**
> \DeskPRO\API\Model\Response getAgentChatGroup(array $params = [])



get agent chat groups

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getAgentChatGroup($params);
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

# **getAgentChatMessageCount**
> \DeskPRO\API\Model\Response getAgentChatMessageCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getAgentChatMessageCount($params);
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

# **getAgentChats**
> \DeskPRO\API\Model\Response getAgentChats(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getAgentChats($params);
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

# **getUserChatByConversationIdMessage**
> \DeskPRO\API\Model\Response getUserChatByConversationIdMessage(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"conversation_id" => "conversation_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"last_message_id" => 56, // int | 
"agent_only" => 56 // int | 
];

try {
    $result = $api->getUserChatByConversationIdMessage($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **page** | **int**| Which page to display | [optional]
 **count** | **int**| Resource per page count | [optional]
 **limit** | **int**| Max number of resources to return | [optional]
 **ids** | **string**| Comma separated list of IDs | [optional]
 **last_message_id** | **int**|  | [optional]
 **agent_only** | **int**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserChatByConversationIdMessageCount**
> \DeskPRO\API\Model\Response getUserChatByConversationIdMessageCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"conversation_id" => "conversation_id_example", // string | 
"last_message_id" => 56, // int | 
"agent_only" => 56 // int | 
];

try {
    $result = $api->getUserChatByConversationIdMessageCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_id** | **string**|  |
 **last_message_id** | **int**|  | [optional]
 **agent_only** | **int**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserChatById**
> \DeskPRO\API\Model\Response getUserChatById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getUserChatById($params);
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

# **getUserChatCount**
> \DeskPRO\API\Model\Response getUserChatCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"date_created" => "date_created_example", // string | 
"date_period" => "date_period_example", // string | 
"agent" => 56, // int | 
"department" => 56, // int | 
"chat_field_id" => "chat_field_id_example", // string | *                  Custom chat field filter. To filter by a custom field with ID=1 you need to add  *                  ?chat_field.1=value to the query string
"group_by" => true // bool | how to group counts
];

try {
    $result = $api->getUserChatCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_created** | **string**|  | [optional]
 **date_period** | **string**|  | [optional]
 **agent** | **int**|  | [optional]
 **department** | **int**|  | [optional]
 **chat_field_id** | **string**| *                  Custom chat field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?chat_field.1&#x3D;value to the query string | [optional]
 **group_by** | **bool**| how to group counts | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserChatCustomFieldById**
> \DeskPRO\API\Model\Response getUserChatCustomFieldById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getUserChatCustomFieldById($params);
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

# **getUserChatCustomFields**
> \DeskPRO\API\Model\Response getUserChatCustomFields(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getUserChatCustomFields($params);
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

# **getUserChats**
> \DeskPRO\API\Model\Response getUserChats(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"date_created" => "date_created_example", // string | 
"date_period" => "date_period_example", // string | 
"agent" => 56, // int | 
"department" => 56, // int | 
"chat_field_id" => "chat_field_id_example" // string | *                  Custom chat field filter. To filter by a custom field with ID=1 you need to add  *                  ?chat_field.1=value to the query string
];

try {
    $result = $api->getUserChats($params);
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
 **date_created** | **string**|  | [optional]
 **date_period** | **string**|  | [optional]
 **agent** | **int**|  | [optional]
 **department** | **int**|  | [optional]
 **chat_field_id** | **string**| *                  Custom chat field filter. To filter by a custom field with ID&#x3D;1 you need to add  *                  ?chat_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgentChatByParentIdMessageMarkAll**
> \DeskPRO\API\Model\Response updateAgentChatByParentIdMessageMarkAll(array $params = [])



mark message as sent/read

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->updateAgentChatByParentIdMessageMarkAll($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserChatByIdAssignByAgentId**
> \DeskPRO\API\Model\Response updateUserChatByIdAssignByAgentId(array $params = [])



Assign chat to agent

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | 
"agent_id" => 56 // int | 
];

try {
    $result = $api->updateUserChatByIdAssignByAgentId($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **agent_id** | **int**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserChatByIdEnd**
> \DeskPRO\API\Model\Response updateUserChatByIdEnd(array $params = [])



End a chat conversation

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ChatsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ChatsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | 
];

try {
    $result = $api->updateUserChatByIdEnd($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

