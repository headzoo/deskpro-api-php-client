# DeskPRO\API\TicketsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTicketById**](TicketsApi.md#deleteTicketById) | **DELETE** /tickets/{id} | 
[**deleteTicketByParentIdCcById**](TicketsApi.md#deleteTicketByParentIdCcById) | **DELETE** /tickets/{parentId}/cc/{id} | 
[**deleteTicketByParentIdMessageById**](TicketsApi.md#deleteTicketByParentIdMessageById) | **DELETE** /tickets/{parentId}/messages/{id} | 
[**deleteTicketByParentIdTicketSlaById**](TicketsApi.md#deleteTicketByParentIdTicketSlaById) | **DELETE** /tickets/{parentId}/ticket_slas/{id} | 
[**deleteTicketByParentIdTicketSlaBySlaBySlaId**](TicketsApi.md#deleteTicketByParentIdTicketSlaBySlaBySlaId) | **DELETE** /tickets/{parentId}/ticket_slas/by_sla/{slaId} | 
[**deleteTicketByTicketFollowUpById**](TicketsApi.md#deleteTicketByTicketFollowUpById) | **DELETE** /tickets/{ticket}/follow-ups/{id} | 
[**deleteTicketByTicketLink**](TicketsApi.md#deleteTicketByTicketLink) | **DELETE** /tickets/{ticket}/links | 
[**deleteTicketCustomFieldById**](TicketsApi.md#deleteTicketCustomFieldById) | **DELETE** /ticket_custom_fields/{id} | 
[**deleteTicketProblemById**](TicketsApi.md#deleteTicketProblemById) | **DELETE** /ticket_problems/{id} | 
[**get20170401TicketLayoutByContext**](TicketsApi.md#get20170401TicketLayoutByContext) | **GET** /20170401/ticket_layouts/{context} | 
[**get20170401TicketLayoutByContextByDepartment**](TicketsApi.md#get20170401TicketLayoutByContextByDepartment) | **GET** /20170401/ticket_layouts/{context}/{department} | 
[**get20170401TicketLayoutByContextDepartmentJ**](TicketsApi.md#get20170401TicketLayoutByContextDepartmentJ) | **GET** /20170401/ticket_layouts/{context}/{department}.js | 
[**get20170401TicketLayoutContextJ**](TicketsApi.md#get20170401TicketLayoutContextJ) | **GET** /20170401/ticket_layouts/{context}.js | 
[**getTicketById**](TicketsApi.md#getTicketById) | **GET** /tickets/{id} | 
[**getTicketByParentIdAttachment**](TicketsApi.md#getTicketByParentIdAttachment) | **GET** /tickets/{parentId}/attachments | 
[**getTicketByParentIdCc**](TicketsApi.md#getTicketByParentIdCc) | **GET** /tickets/{parentId}/cc | 
[**getTicketByParentIdCcById**](TicketsApi.md#getTicketByParentIdCcById) | **GET** /tickets/{parentId}/cc/{id} | 
[**getTicketByParentIdLog**](TicketsApi.md#getTicketByParentIdLog) | **GET** /tickets/{parentId}/logs | 
[**getTicketByParentIdLogById**](TicketsApi.md#getTicketByParentIdLogById) | **GET** /tickets/{parentId}/logs/{id} | 
[**getTicketByParentIdLogCount**](TicketsApi.md#getTicketByParentIdLogCount) | **GET** /tickets/{parentId}/logs/counts | 
[**getTicketByParentIdMessage**](TicketsApi.md#getTicketByParentIdMessage) | **GET** /tickets/{parentId}/messages | 
[**getTicketByParentIdMessageById**](TicketsApi.md#getTicketByParentIdMessageById) | **GET** /tickets/{parentId}/messages/{id} | 
[**getTicketByParentIdMessageByIdAttachment**](TicketsApi.md#getTicketByParentIdMessageByIdAttachment) | **GET** /tickets/{parentId}/messages/{id}/attachments | 
[**getTicketByParentIdMessageCount**](TicketsApi.md#getTicketByParentIdMessageCount) | **GET** /tickets/{parentId}/messages/counts | 
[**getTicketByParentIdTicketSla**](TicketsApi.md#getTicketByParentIdTicketSla) | **GET** /tickets/{parentId}/ticket_slas | 
[**getTicketByParentIdTicketSlaById**](TicketsApi.md#getTicketByParentIdTicketSlaById) | **GET** /tickets/{parentId}/ticket_slas/{id} | 
[**getTicketByParentIdTicketSlaBySlaBySlaId**](TicketsApi.md#getTicketByParentIdTicketSlaBySlaBySlaId) | **GET** /tickets/{parentId}/ticket_slas/by_sla/{slaId} | 
[**getTicketByParentIdTicketSlaCount**](TicketsApi.md#getTicketByParentIdTicketSlaCount) | **GET** /tickets/{parentId}/ticket_slas/counts | 
[**getTicketByTicketFollowUp**](TicketsApi.md#getTicketByTicketFollowUp) | **GET** /tickets/{ticket}/follow-ups | 
[**getTicketByTicketFollowUpById**](TicketsApi.md#getTicketByTicketFollowUpById) | **GET** /tickets/{ticket}/follow-ups/{id} | 
[**getTicketByTicketFollowUpCount**](TicketsApi.md#getTicketByTicketFollowUpCount) | **GET** /tickets/{ticket}/follow-ups/counts | 
[**getTicketByTicketLink**](TicketsApi.md#getTicketByTicketLink) | **GET** /tickets/{ticket}/links | 
[**getTicketCategories**](TicketsApi.md#getTicketCategories) | **GET** /ticket_categories | 
[**getTicketCategoryById**](TicketsApi.md#getTicketCategoryById) | **GET** /ticket_categories/{id} | 
[**getTicketCategoryCount**](TicketsApi.md#getTicketCategoryCount) | **GET** /ticket_categories/counts | 
[**getTicketCount**](TicketsApi.md#getTicketCount) | **GET** /tickets/counts | 
[**getTicketCustomFieldById**](TicketsApi.md#getTicketCustomFieldById) | **GET** /ticket_custom_fields/{id} | 
[**getTicketCustomFields**](TicketsApi.md#getTicketCustomFields) | **GET** /ticket_custom_fields | 
[**getTicketLabelByLabelTicket**](TicketsApi.md#getTicketLabelByLabelTicket) | **GET** /ticket_labels/{label}/tickets | 
[**getTicketLayoutByContext**](TicketsApi.md#getTicketLayoutByContext) | **GET** /ticket_layouts/{context} | 
[**getTicketLayoutByContextByDepartment**](TicketsApi.md#getTicketLayoutByContextByDepartment) | **GET** /ticket_layouts/{context}/{department} | 
[**getTicketLayoutByContextDepartmentJ**](TicketsApi.md#getTicketLayoutByContextDepartmentJ) | **GET** /ticket_layouts/{context}/{department}.js | 
[**getTicketLayoutContextJ**](TicketsApi.md#getTicketLayoutContextJ) | **GET** /ticket_layouts/{context}.js | 
[**getTicketMacroById**](TicketsApi.md#getTicketMacroById) | **GET** /ticket_macros/{id} | 
[**getTicketMacros**](TicketsApi.md#getTicketMacros) | **GET** /ticket_macros | 
[**getTicketPriorities**](TicketsApi.md#getTicketPriorities) | **GET** /ticket_priorities | 
[**getTicketPriorityById**](TicketsApi.md#getTicketPriorityById) | **GET** /ticket_priorities/{id} | 
[**getTicketPriorityCount**](TicketsApi.md#getTicketPriorityCount) | **GET** /ticket_priorities/counts | 
[**getTicketProblemById**](TicketsApi.md#getTicketProblemById) | **GET** /ticket_problems/{id} | 
[**getTicketProblemByIdTicket**](TicketsApi.md#getTicketProblemByIdTicket) | **GET** /ticket_problems/{id}/tickets | 
[**getTicketProblemCount**](TicketsApi.md#getTicketProblemCount) | **GET** /ticket_problems/counts | 
[**getTicketProblems**](TicketsApi.md#getTicketProblems) | **GET** /ticket_problems | 
[**getTicketProductById**](TicketsApi.md#getTicketProductById) | **GET** /ticket_products/{id} | 
[**getTicketProductCount**](TicketsApi.md#getTicketProductCount) | **GET** /ticket_products/counts | 
[**getTicketProducts**](TicketsApi.md#getTicketProducts) | **GET** /ticket_products | 
[**getTicketStarByStarTicket**](TicketsApi.md#getTicketStarByStarTicket) | **GET** /ticket_stars/{star}/tickets | 
[**getTicketStarCount**](TicketsApi.md#getTicketStarCount) | **GET** /ticket_stars/counts | 
[**getTicketStars**](TicketsApi.md#getTicketStars) | **GET** /ticket_stars | 
[**getTicketStatuseByStatuTicket**](TicketsApi.md#getTicketStatuseByStatuTicket) | **GET** /ticket_statuses/{status}/tickets | 
[**getTicketStatuses**](TicketsApi.md#getTicketStatuses) | **GET** /ticket_statuses | 
[**getTicketWorkflowById**](TicketsApi.md#getTicketWorkflowById) | **GET** /ticket_workflows/{id} | 
[**getTicketWorkflowCount**](TicketsApi.md#getTicketWorkflowCount) | **GET** /ticket_workflows/counts | 
[**getTicketWorkflows**](TicketsApi.md#getTicketWorkflows) | **GET** /ticket_workflows | 
[**getTickets**](TicketsApi.md#getTickets) | **GET** /tickets | 
[**setTicketMacroByIdApplyByTicket**](TicketsApi.md#setTicketMacroByIdApplyByTicket) | **POST** /ticket_macros/{id}/apply/{ticket} | 
[**updateTicketByTicketActionLock**](TicketsApi.md#updateTicketByTicketActionLock) | **PUT** /tickets/{ticket}/actions/lock | 
[**updateTicketByTicketActionUnlock**](TicketsApi.md#updateTicketByTicketActionUnlock) | **PUT** /tickets/{ticket}/actions/unlock | 


# **deleteTicketById**
> \DeskPRO\API\Model\Response deleteTicketById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteTicketById($params);
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

# **deleteTicketByParentIdCcById**
> \DeskPRO\API\Model\Response deleteTicketByParentIdCcById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->deleteTicketByParentIdCcById($params);
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

# **deleteTicketByParentIdMessageById**
> \DeskPRO\API\Model\Response deleteTicketByParentIdMessageById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->deleteTicketByParentIdMessageById($params);
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

# **deleteTicketByParentIdTicketSlaById**
> \DeskPRO\API\Model\Response deleteTicketByParentIdTicketSlaById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->deleteTicketByParentIdTicketSlaById($params);
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

# **deleteTicketByParentIdTicketSlaBySlaBySlaId**
> \DeskPRO\API\Model\Response deleteTicketByParentIdTicketSlaBySlaBySlaId(array $params = [])



Delete single Ticket SLA.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => 56, // int | the id of parent ticket
"sla_id" => 56 // int | the id of parent SLA
];

try {
    $result = $api->deleteTicketByParentIdTicketSlaBySlaBySlaId($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| the id of parent ticket |
 **sla_id** | **int**| the id of parent SLA |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTicketByTicketFollowUpById**
> \DeskPRO\API\Model\Response deleteTicketByTicketFollowUpById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"ticket" => "ticket_example" // string | 
];

try {
    $result = $api->deleteTicketByTicketFollowUpById($params);
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
 **ticket** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTicketByTicketLink**
> \DeskPRO\API\Model\Response deleteTicketByTicketLink(array $params = [])



delete relation between two tickets

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example", // string | 
"ticket_id" => 56, // int | base ticket
"unlink_ticket_id" => 56, // int | ticket to unlink
"link_type" => "link_type_example" // string | you have to specify relation type to unlink tickets properly
];

try {
    $result = $api->deleteTicketByTicketLink($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |
 **ticket_id** | **int**| base ticket | [optional]
 **unlink_ticket_id** | **int**| ticket to unlink | [optional]
 **link_type** | **string**| you have to specify relation type to unlink tickets properly | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTicketCustomFieldById**
> \DeskPRO\API\Model\Response deleteTicketCustomFieldById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteTicketCustomFieldById($params);
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

# **deleteTicketProblemById**
> \DeskPRO\API\Model\Response deleteTicketProblemById(array $params = [])



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->deleteTicketProblemById($params);
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

# **get20170401TicketLayoutByContext**
> \DeskPRO\API\Model\Response get20170401TicketLayoutByContext(array $params = [])



Get ticket layouts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | context for layout
];

try {
    $result = $api->get20170401TicketLayoutByContext($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| context for layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get20170401TicketLayoutByContextByDepartment**
> \DeskPRO\API\Model\Response get20170401TicketLayoutByContextByDepartment(array $params = [])



Get ticket department layout for given context

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"department" => 56, // int | department id for which you want to get layout
"context" => "context_example" // string | context of layout
];

try {
    $result = $api->get20170401TicketLayoutByContextByDepartment($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | **int**| department id for which you want to get layout |
 **context** | **string**| context of layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get20170401TicketLayoutByContextDepartmentJ**
> \DeskPRO\API\Model\Response get20170401TicketLayoutByContextDepartmentJ(array $params = [])



Get ticket department layout JS with compiled fields criteria for given context

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"department" => 56, // int | department id for which you want to get layout
"context" => "context_example" // string | context of layout
];

try {
    $result = $api->get20170401TicketLayoutByContextDepartmentJ($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | **int**| department id for which you want to get layout |
 **context** | **string**| context of layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get20170401TicketLayoutContextJ**
> \DeskPRO\API\Model\Response get20170401TicketLayoutContextJ(array $params = [])



Get ticket layouts JS with compiled fields criteria

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | context for layout
];

try {
    $result = $api->get20170401TicketLayoutContextJ($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| context for layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketById**
> \DeskPRO\API\Model\Response getTicketById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketById($params);
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

# **getTicketByParentIdAttachment**
> \DeskPRO\API\Model\Response getTicketByParentIdAttachment(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdAttachment($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdCc**
> \DeskPRO\API\Model\Response getTicketByParentIdCc(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdCc($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdCcById**
> \DeskPRO\API\Model\Response getTicketByParentIdCcById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdCcById($params);
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

# **getTicketByParentIdLog**
> \DeskPRO\API\Model\Response getTicketByParentIdLog(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdLog($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdLogById**
> \DeskPRO\API\Model\Response getTicketByParentIdLogById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdLogById($params);
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

# **getTicketByParentIdLogCount**
> \DeskPRO\API\Model\Response getTicketByParentIdLogCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdLogCount($params);
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

# **getTicketByParentIdMessage**
> \DeskPRO\API\Model\Response getTicketByParentIdMessage(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdMessage($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdMessageById**
> \DeskPRO\API\Model\Response getTicketByParentIdMessageById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdMessageById($params);
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

# **getTicketByParentIdMessageByIdAttachment**
> \DeskPRO\API\Model\Response getTicketByParentIdMessageByIdAttachment(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"id" => "id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdMessageByIdAttachment($params);
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

# **getTicketByParentIdMessageCount**
> \DeskPRO\API\Model\Response getTicketByParentIdMessageCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdMessageCount($params);
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

# **getTicketByParentIdTicketSla**
> \DeskPRO\API\Model\Response getTicketByParentIdTicketSla(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByParentIdTicketSla($params);
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

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdTicketSlaById**
> \DeskPRO\API\Model\Response getTicketByParentIdTicketSlaById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdTicketSlaById($params);
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

# **getTicketByParentIdTicketSlaBySlaBySlaId**
> \DeskPRO\API\Model\Response getTicketByParentIdTicketSlaBySlaBySlaId(array $params = [])



Retrieve single SLA for ticket by parent SLA's ID.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => 56, // int | the id of parent ticket
"sla_id" => 56 // int | the id of parent SLA
];

try {
    $result = $api->getTicketByParentIdTicketSlaBySlaBySlaId($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| the id of parent ticket |
 **sla_id** | **int**| the id of parent SLA |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByParentIdTicketSlaCount**
> \DeskPRO\API\Model\Response getTicketByParentIdTicketSlaCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"parent_id" => "parent_id_example" // string | 
];

try {
    $result = $api->getTicketByParentIdTicketSlaCount($params);
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

# **getTicketByTicketFollowUp**
> \DeskPRO\API\Model\Response getTicketByTicketFollowUp(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example", // string | 
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketByTicketFollowUp($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |
 **page** | **int**| Which page to display | [optional]
 **count** | **int**| Resource per page count | [optional]
 **limit** | **int**| Max number of resources to return | [optional]
 **ids** | **string**| Comma separated list of IDs | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByTicketFollowUpById**
> \DeskPRO\API\Model\Response getTicketByTicketFollowUpById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | The id of the resource
"ticket" => "ticket_example" // string | 
];

try {
    $result = $api->getTicketByTicketFollowUpById($params);
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
 **ticket** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByTicketFollowUpCount**
> \DeskPRO\API\Model\Response getTicketByTicketFollowUpCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example" // string | 
];

try {
    $result = $api->getTicketByTicketFollowUpCount($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketByTicketLink**
> \DeskPRO\API\Model\Response getTicketByTicketLink(array $params = [])



get tickets linked with ticket under provided id

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example", // string | 
"ticket_id" => 56 // int | ticket to find id
];

try {
    $result = $api->getTicketByTicketLink($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |
 **ticket_id** | **int**| ticket to find id | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketCategories**
> \DeskPRO\API\Model\Response getTicketCategories(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketCategories($params);
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

# **getTicketCategoryById**
> \DeskPRO\API\Model\Response getTicketCategoryById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketCategoryById($params);
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

# **getTicketCategoryCount**
> \DeskPRO\API\Model\Response getTicketCategoryCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketCategoryCount($params);
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

# **getTicketCount**
> \DeskPRO\API\Model\Response getTicketCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketCount($params);
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

# **getTicketCustomFieldById**
> \DeskPRO\API\Model\Response getTicketCustomFieldById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketCustomFieldById($params);
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

# **getTicketCustomFields**
> \DeskPRO\API\Model\Response getTicketCustomFields(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketCustomFields($params);
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

# **getTicketLabelByLabelTicket**
> \DeskPRO\API\Model\Response getTicketLabelByLabelTicket(array $params = [])



Get tickets with the given label

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"label" => "label_example" // string | label to filter tickets
];

try {
    $result = $api->getTicketLabelByLabelTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label** | **string**| label to filter tickets |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketLayoutByContext**
> \DeskPRO\API\Model\Response getTicketLayoutByContext(array $params = [])



Get ticket layouts

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | context for layout
];

try {
    $result = $api->getTicketLayoutByContext($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| context for layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketLayoutByContextByDepartment**
> \DeskPRO\API\Model\Response getTicketLayoutByContextByDepartment(array $params = [])



Get ticket department layout for given context

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"department" => 56, // int | department id for which you want to get layout
"context" => "context_example" // string | context of layout
];

try {
    $result = $api->getTicketLayoutByContextByDepartment($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | **int**| department id for which you want to get layout |
 **context** | **string**| context of layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketLayoutByContextDepartmentJ**
> \DeskPRO\API\Model\Response getTicketLayoutByContextDepartmentJ(array $params = [])



Get ticket department layout JS with compiled fields criteria for given context

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"department" => 56, // int | department id for which you want to get layout
"context" => "context_example" // string | context of layout
];

try {
    $result = $api->getTicketLayoutByContextDepartmentJ($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | **int**| department id for which you want to get layout |
 **context** | **string**| context of layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketLayoutContextJ**
> \DeskPRO\API\Model\Response getTicketLayoutContextJ(array $params = [])



Get ticket layouts JS with compiled fields criteria

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"context" => "context_example" // string | context for layout
];

try {
    $result = $api->getTicketLayoutContextJ($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| context for layout |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketMacroById**
> \DeskPRO\API\Model\Response getTicketMacroById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketMacroById($params);
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

# **getTicketMacros**
> \DeskPRO\API\Model\Response getTicketMacros(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketMacros($params);
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

# **getTicketPriorities**
> \DeskPRO\API\Model\Response getTicketPriorities(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketPriorities($params);
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

# **getTicketPriorityById**
> \DeskPRO\API\Model\Response getTicketPriorityById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketPriorityById($params);
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

# **getTicketPriorityCount**
> \DeskPRO\API\Model\Response getTicketPriorityCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketPriorityCount($params);
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

# **getTicketProblemById**
> \DeskPRO\API\Model\Response getTicketProblemById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketProblemById($params);
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

# **getTicketProblemByIdTicket**
> \DeskPRO\API\Model\Response getTicketProblemByIdTicket(array $params = [])



Get tickets associated with the given problem

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | problem id
];

try {
    $result = $api->getTicketProblemByIdTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| problem id |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketProblemCount**
> \DeskPRO\API\Model\Response getTicketProblemCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketProblemCount($params);
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

# **getTicketProblems**
> \DeskPRO\API\Model\Response getTicketProblems(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketProblems($params);
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

# **getTicketProductById**
> \DeskPRO\API\Model\Response getTicketProductById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketProductById($params);
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

# **getTicketProductCount**
> \DeskPRO\API\Model\Response getTicketProductCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketProductCount($params);
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

# **getTicketProducts**
> \DeskPRO\API\Model\Response getTicketProducts(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketProducts($params);
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

# **getTicketStarByStarTicket**
> \DeskPRO\API\Model\Response getTicketStarByStarTicket(array $params = [])



Get the tickets for a star

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"star" => 56 // int | the id of star to filter by
];

try {
    $result = $api->getTicketStarByStarTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star** | **int**| the id of star to filter by |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketStarCount**
> \DeskPRO\API\Model\Response getTicketStarCount(array $params = [])



Get the counts of tickets marked with each star

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketStarCount($params);
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

# **getTicketStars**
> \DeskPRO\API\Model\Response getTicketStars(array $params = [])



get a list of ticket stars

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketStars($params);
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

# **getTicketStatuseByStatuTicket**
> \DeskPRO\API\Model\Response getTicketStatuseByStatuTicket(array $params = [])



Get tickets with the given status

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"status" => "status_example" // string | provide a status to filter
];

try {
    $result = $api->getTicketStatuseByStatuTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| provide a status to filter |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTicketStatuses**
> \DeskPRO\API\Model\Response getTicketStatuses(array $params = [])



Get all available statuses for tickets, sorted alphabetically

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketStatuses($params);
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

# **getTicketWorkflowById**
> \DeskPRO\API\Model\Response getTicketWorkflowById(array $params = [])



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->getTicketWorkflowById($params);
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

# **getTicketWorkflowCount**
> \DeskPRO\API\Model\Response getTicketWorkflowCount(array $params = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
];

try {
    $result = $api->getTicketWorkflowCount($params);
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

# **getTicketWorkflows**
> \DeskPRO\API\Model\Response getTicketWorkflows(array $params = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getTicketWorkflows($params);
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

# **getTickets**
> \DeskPRO\API\Model\Response getTickets(array $params = [])



Get a list of tickets (see parameters description for additional information)

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"order_by" => "order_by_example", // string | tickets list sort
"ids" => "ids_example", // string | ticket list to fetch, comma separated list
"order_dir" => "order_dir_example", // string | tickets list sort order
"page" => 56, // int | pagination page parameter
"count" => 56, // int | pagination results per page parameter.
"filter" => 56, // int | TicketFilter ID option
"labels" => array("labels_example"), // string[] | labels filter option
"star" => 56, // int | star filter
"status" => 56, // int | status filter
"not_status" => 56, // int | not status filter
"agent" => 56, // int | agent filter
"person" => 56, // int | person filter
"language" => 56, // int | language filter
"organization" => 56, // int | organization filter
"problem" => 56, // int | problem filter
"department" => 56, // int | department filter
"sla" => 56, // int | sla id filter
"sla_status" => 56, // int | sla status filter
"ticket_field_id" => "ticket_field_id_example" // string | *                  Custom ticket field filter. To filter by a custom field with ID=1 you need to add      *                  ?ticket_field.1=value to the query string
];

try {
    $result = $api->getTickets($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| tickets list sort | [optional]
 **ids** | **string**| ticket list to fetch, comma separated list | [optional]
 **order_dir** | **string**| tickets list sort order | [optional]
 **page** | **int**| pagination page parameter | [optional]
 **count** | **int**| pagination results per page parameter. | [optional]
 **filter** | **int**| TicketFilter ID option | [optional]
 **labels** | [**string[]**](../Model/string.md)| labels filter option | [optional]
 **star** | **int**| star filter | [optional]
 **status** | **int**| status filter | [optional]
 **not_status** | **int**| not status filter | [optional]
 **agent** | **int**| agent filter | [optional]
 **person** | **int**| person filter | [optional]
 **language** | **int**| language filter | [optional]
 **organization** | **int**| organization filter | [optional]
 **problem** | **int**| problem filter | [optional]
 **department** | **int**| department filter | [optional]
 **sla** | **int**| sla id filter | [optional]
 **sla_status** | **int**| sla status filter | [optional]
 **ticket_field_id** | **string**| *                  Custom ticket field filter. To filter by a custom field with ID&#x3D;1 you need to add      *                  ?ticket_field.1&#x3D;value to the query string | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTicketMacroByIdApplyByTicket**
> \DeskPRO\API\Model\Response setTicketMacroByIdApplyByTicket(array $params = [])



apply macro to ticket

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"id" => 56, // int | the macro identity
"ticket" => "ticket_example", // string | 
"ticket_id" => 56 // int | the ticket identity
];

try {
    $result = $api->setTicketMacroByIdApplyByTicket($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| the macro identity |
 **ticket** | **string**|  |
 **ticket_id** | **int**| the ticket identity | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTicketByTicketActionLock**
> \DeskPRO\API\Model\Response updateTicketByTicketActionLock(array $params = [])



Lock a ticket.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example", // string | 
"force" => true, // bool | force apply
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->updateTicketByTicketActionLock($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |
 **force** | **bool**| force apply |
 **id** | **int**| The id of the resource | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTicketByTicketActionUnlock**
> \DeskPRO\API\Model\Response updateTicketByTicketActionUnlock(array $params = [])



Unlock a ticket.

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\TicketsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new TicketsApi(
    new Configuration('YOUR_API_KEY')
);

$params = [
"ticket" => "ticket_example", // string | 
"force" => true, // bool | force apply
"id" => 56 // int | The id of the resource
];

try {
    $result = $api->updateTicketByTicketActionUnlock($params);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | **string**|  |
 **force** | **bool**| force apply |
 **id** | **int**| The id of the resource | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

