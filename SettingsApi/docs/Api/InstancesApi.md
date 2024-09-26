# RocketChatSettingsApi\InstancesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1InstancesGet()**](InstancesApi.md#getApiV1InstancesGet) | **GET** /api/v1/instances.get | Get Instances |


## `getApiV1InstancesGet()`

```php
getApiV1InstancesGet($x_user_id, $x_auth_token): \RocketChatSettingsApi\Model\GetApiV1InstancesGet200Response
```

Get Instances

Get the instances running for the workspace. Permission required: `view-statistics`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1InstancesGet($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->getApiV1InstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1InstancesGet200Response**](../Model/GetApiV1InstancesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
