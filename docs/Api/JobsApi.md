# DeskPRO\API\JobsApi

All URIs are relative to *http://deskpro-dev.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJobById**](JobsApi.md#getJobById) | **GET** /jobs/{id} | 
[**getJobs**](JobsApi.md#getJobs) | **GET** /jobs | 


# **getJobById**
> \DeskPRO\API\Model\Response getJobById(int $id)



Get a resource

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\JobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new JobsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);

$id = 56; // int | The id of the resource

try {
    $result = $api->getJobById($id);
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

# **getJobs**
> \DeskPRO\API\Model\Response getJobs()



Get collection of resources

### Example
```php
<?php
use DeskPRO\API\Configuration;
use DeskPRO\API\Client\JobsApi;

require_once(__DIR__ . '/vendor/autoload.php');

$api = new JobsApi(
    new Configuration('YOUR_API_KEY') // Optional api key configuration
);


try {
    $result = $api->getJobs();
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

