# DeskPRO\API\BlobsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBlobByAuthId**](BlobsApi.md#deleteBlobByAuthId) | **DELETE** /blobs/{authId} | 
[**getBlobByAuthId**](BlobsApi.md#getBlobByAuthId) | **GET** /blobs/{authId} | 
[**getBlobByAuthIdArchive**](BlobsApi.md#getBlobByAuthIdArchive) | **GET** /blobs/{authId}/archive | 
[**getBlobByAuthIdDownloadByPath**](BlobsApi.md#getBlobByAuthIdDownloadByPath) | **GET** /blobs/{authId}/download/{path} | 
[**getBlobByAuthIdFile**](BlobsApi.md#getBlobByAuthIdFile) | **GET** /blobs/{authId}/files | 
[**getBlobs**](BlobsApi.md#getBlobs) | **GET** /blobs | 


# **deleteBlobByAuthId**
> \DeskPRO\API\Model\Response deleteBlobByAuthId(int $auth_id)



Delete a blob

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$auth_id = 56; // int | The id of the resource

try {
    $result = $api->deleteBlobByAuthId($auth_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **int**| The id of the resource |

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

# **getBlobByAuthId**
> \DeskPRO\API\Model\Response getBlobByAuthId(int $auth_id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$auth_id = 56; // int | The id of the resource

try {
    $result = $api->getBlobByAuthId($auth_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **int**| The id of the resource |

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

# **getBlobByAuthIdArchive**
> \DeskPRO\API\Model\Response getBlobByAuthIdArchive(int $auth_id)



See archive info

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$auth_id = 56; // int | The id of the resource

try {
    $result = $api->getBlobByAuthIdArchive($auth_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **int**| The id of the resource |

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

# **getBlobByAuthIdDownloadByPath**
> \DeskPRO\API\Model\Response getBlobByAuthIdDownloadByPath(int $auth_id, string $path)



Serve archived content

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$auth_id = 56; // int | The id of the resource
$path = "path_example"; // string | The path of the file

try {
    $result = $api->getBlobByAuthIdDownloadByPath($auth_id, $path);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **int**| The id of the resource |
 **path** | **string**| The path of the file |

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

# **getBlobByAuthIdFile**
> \DeskPRO\API\Model\Response getBlobByAuthIdFile(int $auth_id)



See archive content

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$auth_id = 56; // int | The id of the resource

try {
    $result = $api->getBlobByAuthIdFile($auth_id);
    print_r($result->getData());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_id** | **int**| The id of the resource |

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

# **getBlobs**
> \DeskPRO\API\Model\Response getBlobs(array $filters = [])



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\BlobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new BlobsApi(
    new Configuration('YOUR_API_KEY')
);

$filters = [
"page" => 56, // int | Which page to display
"count" => 56, // int | Resource per page count
"limit" => 56, // int | Max number of resources to return
"auth_ids" => "auth_ids_example" // string | Comma separated list of AuthIDs
];

try {
    $result = $api->getBlobs($filters);
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
 **auth_ids** | **string**| Comma separated list of AuthIDs | [optional]

### Return type

[**\DeskPRO\API\Model\Response**](../Model/Response.md)

### Authorization

[KeyAuthentication](../../README.md#KeyAuthentication)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

