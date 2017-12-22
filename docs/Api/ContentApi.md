# DeskPRO\API\ContentApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteArticleById**](ContentApi.md#deleteArticleById) | **DELETE** /articles/{id} | 
[**deleteArticleCategoryById**](ContentApi.md#deleteArticleCategoryById) | **DELETE** /article_categories/{id} | 
[**deleteArticleCommentById**](ContentApi.md#deleteArticleCommentById) | **DELETE** /article_comments/{id} | 
[**deleteArticlePendingCreateById**](ContentApi.md#deleteArticlePendingCreateById) | **DELETE** /article_pending_creates/{id} | 
[**deleteDownloadById**](ContentApi.md#deleteDownloadById) | **DELETE** /downloads/{id} | 
[**deleteDownloadCategoryById**](ContentApi.md#deleteDownloadCategoryById) | **DELETE** /download_categories/{id} | 
[**deleteDownloadCommentById**](ContentApi.md#deleteDownloadCommentById) | **DELETE** /download_comments/{id} | 
[**deleteGuideById**](ContentApi.md#deleteGuideById) | **DELETE** /guides/{id} | 
[**deleteNewsById**](ContentApi.md#deleteNewsById) | **DELETE** /news/{id} | 
[**deleteNewsCategoryById**](ContentApi.md#deleteNewsCategoryById) | **DELETE** /news_categories/{id} | 
[**deleteNewsCommentById**](ContentApi.md#deleteNewsCommentById) | **DELETE** /news_comments/{id} | 
[**deleteTopicById**](ContentApi.md#deleteTopicById) | **DELETE** /topics/{id} | 
[**getArticleById**](ContentApi.md#getArticleById) | **GET** /articles/{id} | 
[**getArticleCategories**](ContentApi.md#getArticleCategories) | **GET** /article_categories | 
[**getArticleCategoryById**](ContentApi.md#getArticleCategoryById) | **GET** /article_categories/{id} | 
[**getArticleCategoryCount**](ContentApi.md#getArticleCategoryCount) | **GET** /article_categories/counts | 
[**getArticleCommentById**](ContentApi.md#getArticleCommentById) | **GET** /article_comments/{id} | 
[**getArticleCommentCount**](ContentApi.md#getArticleCommentCount) | **GET** /article_comments/counts | 
[**getArticleComments**](ContentApi.md#getArticleComments) | **GET** /article_comments | 
[**getArticleCount**](ContentApi.md#getArticleCount) | **GET** /articles/counts | 
[**getArticlePendingCreateById**](ContentApi.md#getArticlePendingCreateById) | **GET** /article_pending_creates/{id} | 
[**getArticlePendingCreateCount**](ContentApi.md#getArticlePendingCreateCount) | **GET** /article_pending_creates/counts | 
[**getArticlePendingCreates**](ContentApi.md#getArticlePendingCreates) | **GET** /article_pending_creates | 
[**getArticles**](ContentApi.md#getArticles) | **GET** /articles | 
[**getContentCategories**](ContentApi.md#getContentCategories) | **GET** /content_categories | 
[**getDownloadById**](ContentApi.md#getDownloadById) | **GET** /downloads/{id} | 
[**getDownloadCategories**](ContentApi.md#getDownloadCategories) | **GET** /download_categories | 
[**getDownloadCategoryById**](ContentApi.md#getDownloadCategoryById) | **GET** /download_categories/{id} | 
[**getDownloadCategoryCount**](ContentApi.md#getDownloadCategoryCount) | **GET** /download_categories/counts | 
[**getDownloadCommentById**](ContentApi.md#getDownloadCommentById) | **GET** /download_comments/{id} | 
[**getDownloadCommentCount**](ContentApi.md#getDownloadCommentCount) | **GET** /download_comments/counts | 
[**getDownloadComments**](ContentApi.md#getDownloadComments) | **GET** /download_comments | 
[**getDownloadCount**](ContentApi.md#getDownloadCount) | **GET** /downloads/counts | 
[**getDownloads**](ContentApi.md#getDownloads) | **GET** /downloads | 
[**getGuideByGuideIdExport**](ContentApi.md#getGuideByGuideIdExport) | **GET** /guides/{guideId}/export | 
[**getGuideByGuideIdTree**](ContentApi.md#getGuideByGuideIdTree) | **GET** /guides/{guideId}/tree | 
[**getGuideById**](ContentApi.md#getGuideById) | **GET** /guides/{id} | 
[**getGuideCount**](ContentApi.md#getGuideCount) | **GET** /guides/counts | 
[**getGuides**](ContentApi.md#getGuides) | **GET** /guides | 
[**getNews**](ContentApi.md#getNews) | **GET** /news | 
[**getNewsById**](ContentApi.md#getNewsById) | **GET** /news/{id} | 
[**getNewsCategories**](ContentApi.md#getNewsCategories) | **GET** /news_categories | 
[**getNewsCategoryById**](ContentApi.md#getNewsCategoryById) | **GET** /news_categories/{id} | 
[**getNewsCategoryCount**](ContentApi.md#getNewsCategoryCount) | **GET** /news_categories/counts | 
[**getNewsCommentById**](ContentApi.md#getNewsCommentById) | **GET** /news_comments/{id} | 
[**getNewsCommentCount**](ContentApi.md#getNewsCommentCount) | **GET** /news_comments/counts | 
[**getNewsComments**](ContentApi.md#getNewsComments) | **GET** /news_comments | 
[**getNewsCount**](ContentApi.md#getNewsCount) | **GET** /news/counts | 
[**getTopicById**](ContentApi.md#getTopicById) | **GET** /topics/{id} | 
[**getTopicCount**](ContentApi.md#getTopicCount) | **GET** /topics/counts | 
[**getTopics**](ContentApi.md#getTopics) | **GET** /topics | 
[**updateGuideByGuideIdTree**](ContentApi.md#updateGuideByGuideIdTree) | **PUT** /guides/{guideId}/tree | 


# **deleteArticleById**
> \DeskPRO\API\Model\Response deleteArticleById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteArticleById($id);
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

# **deleteArticleCategoryById**
> \DeskPRO\API\Model\Response deleteArticleCategoryById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteArticleCategoryById($id);
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

# **deleteArticleCommentById**
> \DeskPRO\API\Model\Response deleteArticleCommentById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteArticleCommentById($id);
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

# **deleteArticlePendingCreateById**
> \DeskPRO\API\Model\Response deleteArticlePendingCreateById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteArticlePendingCreateById($id);
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

# **deleteDownloadById**
> \DeskPRO\API\Model\Response deleteDownloadById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteDownloadById($id);
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

# **deleteDownloadCategoryById**
> \DeskPRO\API\Model\Response deleteDownloadCategoryById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteDownloadCategoryById($id);
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

# **deleteDownloadCommentById**
> \DeskPRO\API\Model\Response deleteDownloadCommentById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteDownloadCommentById($id);
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

# **deleteGuideById**
> \DeskPRO\API\Model\Response deleteGuideById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteGuideById($id);
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

# **deleteNewsById**
> \DeskPRO\API\Model\Response deleteNewsById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteNewsById($id);
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

# **deleteNewsCategoryById**
> \DeskPRO\API\Model\Response deleteNewsCategoryById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteNewsCategoryById($id);
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

# **deleteNewsCommentById**
> \DeskPRO\API\Model\Response deleteNewsCommentById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteNewsCommentById($id);
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

# **deleteTopicById**
> \DeskPRO\API\Model\Response deleteTopicById(int $id)



Delete a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->deleteTopicById($id);
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

# **getArticleById**
> \DeskPRO\API\Model\Response getArticleById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getArticleById($id);
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

# **getArticleCategories**
> \DeskPRO\API\Model\Response getArticleCategories(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getArticleCategories($filters);
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

# **getArticleCategoryById**
> \DeskPRO\API\Model\Response getArticleCategoryById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getArticleCategoryById($id);
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

# **getArticleCategoryCount**
> \DeskPRO\API\Model\Response getArticleCategoryCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getArticleCategoryCount();
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

# **getArticleCommentById**
> \DeskPRO\API\Model\Response getArticleCommentById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getArticleCommentById($id);
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

# **getArticleCommentCount**
> \DeskPRO\API\Model\Response getArticleCommentCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"group_by" => "group_by_example" // string | how to groups comments
];

try {
    $result = $api->getArticleCommentCount($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **group_by** | **string**| how to groups comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleComments**
> \DeskPRO\API\Model\Response getArticleComments(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"order_by" => "order_by_example" // string | how to order comments
];

try {
    $result = $api->getArticleComments($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **order_by** | **string**| how to order comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleCount**
> \DeskPRO\API\Model\Response getArticleCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group counters
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56 // int | filter by py period when content was updated
];

try {
    $result = $api->getArticleCount($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group counters | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticlePendingCreateById**
> \DeskPRO\API\Model\Response getArticlePendingCreateById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getArticlePendingCreateById($id);
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

# **getArticlePendingCreateCount**
> \DeskPRO\API\Model\Response getArticlePendingCreateCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"assigned_person" => "assigned_person_example" // string | 
];

try {
    $result = $api->getArticlePendingCreateCount($filters);
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
 **assigned_person** | **string**|  | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticlePendingCreates**
> \DeskPRO\API\Model\Response getArticlePendingCreates(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"assigned_person" => "assigned_person_example", // string | 
"order_by" => "order_by_example", // string | how to order result
"order_dir" => "order_dir_example" // string | order direction
];

try {
    $result = $api->getArticlePendingCreates($filters);
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
 **assigned_person** | **string**|  | [optional]
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

# **getArticles**
> \DeskPRO\API\Model\Response getArticles(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group downloads
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56, // int | filter by py period when content was updated
"order_by" => 56 // int | how to order
];

try {
    $result = $api->getArticles($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group downloads | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]
 **order_by** | **int**| how to order | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentCategories**
> \DeskPRO\API\Model\Response getContentCategories()



Get categories for articles, news and downloads

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getContentCategories();
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

# **getDownloadById**
> \DeskPRO\API\Model\Response getDownloadById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getDownloadById($id);
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

# **getDownloadCategories**
> \DeskPRO\API\Model\Response getDownloadCategories(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getDownloadCategories($filters);
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

# **getDownloadCategoryById**
> \DeskPRO\API\Model\Response getDownloadCategoryById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getDownloadCategoryById($id);
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

# **getDownloadCategoryCount**
> \DeskPRO\API\Model\Response getDownloadCategoryCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getDownloadCategoryCount();
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

# **getDownloadCommentById**
> \DeskPRO\API\Model\Response getDownloadCommentById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getDownloadCommentById($id);
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

# **getDownloadCommentCount**
> \DeskPRO\API\Model\Response getDownloadCommentCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"group_by" => "group_by_example" // string | how to groups comments
];

try {
    $result = $api->getDownloadCommentCount($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **group_by** | **string**| how to groups comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadComments**
> \DeskPRO\API\Model\Response getDownloadComments(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"order_by" => "order_by_example" // string | how to order comments
];

try {
    $result = $api->getDownloadComments($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **order_by** | **string**| how to order comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadCount**
> \DeskPRO\API\Model\Response getDownloadCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group counters
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56 // int | filter by py period when content was updated
];

try {
    $result = $api->getDownloadCount($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group counters | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloads**
> \DeskPRO\API\Model\Response getDownloads(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group downloads
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56, // int | filter by py period when content was updated
"order_by" => 56 // int | how to order
];

try {
    $result = $api->getDownloads($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group downloads | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]
 **order_by** | **int**| how to order | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuideByGuideIdExport**
> \DeskPRO\API\Model\Response getGuideByGuideIdExport(string $guide_id)



export a full json of the guide

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$guide_id = "guide_id_example"; // string | 

try {
    $result = $api->getGuideByGuideIdExport($guide_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guide_id** | **string**|  |

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

# **getGuideByGuideIdTree**
> \DeskPRO\API\Model\Response getGuideByGuideIdTree(string $guide_id)



give a topics tree list of a guide

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$guide_id = "guide_id_example"; // string | 

try {
    $result = $api->getGuideByGuideIdTree($guide_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guide_id** | **string**|  |

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

# **getGuideById**
> \DeskPRO\API\Model\Response getGuideById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getGuideById($id);
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

# **getGuideCount**
> \DeskPRO\API\Model\Response getGuideCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getGuideCount();
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

# **getGuides**
> \DeskPRO\API\Model\Response getGuides(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getGuides($filters);
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

# **getNews**
> \DeskPRO\API\Model\Response getNews(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group downloads
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56, // int | filter by py period when content was updated
"order_by" => 56 // int | how to order
];

try {
    $result = $api->getNews($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group downloads | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]
 **order_by** | **int**| how to order | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsById**
> \DeskPRO\API\Model\Response getNewsById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getNewsById($id);
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

# **getNewsCategories**
> \DeskPRO\API\Model\Response getNewsCategories(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example" // string | Comma separated list of IDs
];

try {
    $result = $api->getNewsCategories($filters);
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

# **getNewsCategoryById**
> \DeskPRO\API\Model\Response getNewsCategoryById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getNewsCategoryById($id);
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

# **getNewsCategoryCount**
> \DeskPRO\API\Model\Response getNewsCategoryCount()



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);


try {
    $result = $api->getNewsCategoryCount();
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

# **getNewsCommentById**
> \DeskPRO\API\Model\Response getNewsCommentById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getNewsCommentById($id);
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

# **getNewsCommentCount**
> \DeskPRO\API\Model\Response getNewsCommentCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"group_by" => "group_by_example" // string | how to groups comments
];

try {
    $result = $api->getNewsCommentCount($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **group_by** | **string**| how to groups comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsComments**
> \DeskPRO\API\Model\Response getNewsComments(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"status" => "status_example", // string | filter by status
"is_reviewed" => 56, // int | filter by reviewed status
"period_created" => "period_created_example", // string | filter by period
"article" => 56, // int | select comments for article with given id
"download" => 56, // int | select comments for download with given id
"news" => 56, // int | select comments for news with given id
"order_by" => "order_by_example" // string | how to order comments
];

try {
    $result = $api->getNewsComments($filters);
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
 **status** | **string**| filter by status | [optional]
 **is_reviewed** | **int**| filter by reviewed status | [optional]
 **period_created** | **string**| filter by period | [optional]
 **article** | **int**| select comments for article with given id | [optional]
 **download** | **int**| select comments for download with given id | [optional]
 **news** | **int**| select comments for news with given id | [optional]
 **order_by** | **string**| how to order comments | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsCount**
> \DeskPRO\API\Model\Response getNewsCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"category" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group counters
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56 // int | filter by py period when content was updated
];

try {
    $result = $api->getNewsCount($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **category** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group counters | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicById**
> \DeskPRO\API\Model\Response getTopicById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getTopicById($id);
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

# **getTopicCount**
> \DeskPRO\API\Model\Response getTopicCount(array $filters = [])



Count list

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"guide" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group counters
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56 // int | filter by py period when content was updated
];

try {
    $result = $api->getTopicCount($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **guide** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group counters | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopics**
> \DeskPRO\API\Model\Response getTopics(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"ids" => "ids_example", // string | Comma separated list of IDs
"author" => "author_example", // string | filter by author, provide an id or 'me' for current user
"guide" => 56, // int | filter category, could be an array or just digit
"group_by" => "group_by_example", // string | how to group downloads
"status" => "status_example", // string | filter by status
"hidden_status" => 56, // int | select for article with given id
"period_created" => 56, // int | filter by period when content was created
"period_last_comment" => 56, // int | filter by period when content was last commented
"period_published" => 56, // int | filter by py period when content was published
"period_updated" => 56, // int | filter by py period when content was updated
"order_by" => 56 // int | how to order
];

try {
    $result = $api->getTopics($filters);
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
 **author** | **string**| filter by author, provide an id or &#39;me&#39; for current user | [optional]
 **guide** | **int**| filter category, could be an array or just digit | [optional]
 **group_by** | **string**| how to group downloads | [optional]
 **status** | **string**| filter by status | [optional]
 **hidden_status** | **int**| select for article with given id | [optional]
 **period_created** | **int**| filter by period when content was created | [optional]
 **period_last_comment** | **int**| filter by period when content was last commented | [optional]
 **period_published** | **int**| filter by py period when content was published | [optional]
 **period_updated** | **int**| filter by py period when content was updated | [optional]
 **order_by** | **int**| how to order | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGuideByGuideIdTree**
> \DeskPRO\API\Model\Response updateGuideByGuideIdTree(string $guide_id, string[] $tree)



save the tree structure

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\ContentApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new ContentApi(
    new Configuration('YOUR_API_KEY')
);

$guide_id = "guide_id_example"; // string | 
$tree = array("tree_example"); // string[] | 

try {
    $result = $api->updateGuideByGuideIdTree($guide_id, $tree);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guide_id** | **string**|  |
 **tree** | [**string[]**](../Model/string.md)|  |

### Filters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tree** | [**string[]**](../Model/string.md)|  |

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

