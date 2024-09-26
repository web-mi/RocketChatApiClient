# WebMI\RocketChatApiClient\ContentManagementApi\CustomUserStatusApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1CustomUserStatusList()**](CustomUserStatusApi.md#getApiV1CustomUserStatusList) | **GET** /api/v1/custom-user-status.list | List Custom User Status |
| [**postApiV1CustomUserStatusCreate()**](CustomUserStatusApi.md#postApiV1CustomUserStatusCreate) | **POST** /api/v1/custom-user-status.create | Create Custom Status |
| [**postApiV1CustomUserStatusDelete()**](CustomUserStatusApi.md#postApiV1CustomUserStatusDelete) | **POST** /api/v1/custom-user-status.delete | Delete Custom User Status |
| [**postApiV1CustomUserStatusUpdate()**](CustomUserStatusApi.md#postApiV1CustomUserStatusUpdate) | **POST** /api/v1/custom-user-status.update | Update Custom Status |


## `getApiV1CustomUserStatusList()`

```php
getApiV1CustomUserStatusList($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\ContentManagementApi\Model\GetApiV1CustomUserStatusList200Response
```

List Custom User Status

Lists all available custom user's status.  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\ContentManagementApi\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1CustomUserStatusList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->getApiV1CustomUserStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\ContentManagementApi\Model\GetApiV1CustomUserStatusList200Response**](../Model/GetApiV1CustomUserStatusList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1CustomUserStatusCreate()`

```php
postApiV1CustomUserStatusCreate($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_create_request): \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreate200Response
```

Create Custom Status

Create a custom user status.   ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\ContentManagementApi\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_custom_user_status_create_request = {"name":"caught up","statusType":"busy"}; // \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreateRequest

try {
    $result = $apiInstance->postApiV1CustomUserStatusCreate($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_custom_user_status_create_request** | [**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreateRequest**](../Model/PostApiV1CustomUserStatusCreateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreate200Response**](../Model/PostApiV1CustomUserStatusCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1CustomUserStatusDelete()`

```php
postApiV1CustomUserStatusDelete($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_delete_request): \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Delete Custom User Status

Delete a custom user status.  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\ContentManagementApi\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_custom_user_status_delete_request = {"customUserStatusId":"65462e97a2f73c7460e18f84"}; // \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusDeleteRequest

try {
    $result = $apiInstance->postApiV1CustomUserStatusDelete($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_custom_user_status_delete_request** | [**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusDeleteRequest**](../Model/PostApiV1CustomUserStatusDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1CustomUserStatusUpdate()`

```php
postApiV1CustomUserStatusUpdate($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_update_request): \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreate200Response
```

Update Custom Status

Update a custom status.   ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\ContentManagementApi\Api\CustomUserStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_custom_user_status_update_request = {"_id":"65462e97a2f73c7460e18f84","name":"caught up again","statusType":"busy"}; // \WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusUpdateRequest

try {
    $result = $apiInstance->postApiV1CustomUserStatusUpdate($x_auth_token, $x_user_id, $post_api_v1_custom_user_status_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomUserStatusApi->postApiV1CustomUserStatusUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_custom_user_status_update_request** | [**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusUpdateRequest**](../Model/PostApiV1CustomUserStatusUpdateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\ContentManagementApi\Model\PostApiV1CustomUserStatusCreate200Response**](../Model/PostApiV1CustomUserStatusCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
