# RocketChatNotificationsApi\PushTokenApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1PushToken()**](PushTokenApi.md#deleteApiV1PushToken) | **DELETE** /api/v1/push.token | Delete Push Token |
| [**getApiV1PushGet()**](PushTokenApi.md#getApiV1PushGet) | **GET** /api/v1/push.get | Get Push Notification |
| [**postApiV1PushToken()**](PushTokenApi.md#postApiV1PushToken) | **POST** /api/v1/push.token | Create Push Token |


## `deleteApiV1PushToken()`

```php
deleteApiV1PushToken($x_auth_token, $x_user_id, $delete_api_v1_push_token_request): \RocketChatNotificationsApi\Model\PostApiV1BannersDismiss200Response
```

Delete Push Token

Removes push token from the workspace. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatNotificationsApi\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$delete_api_v1_push_token_request = {"token":"abc"}; // \RocketChatNotificationsApi\Model\DeleteApiV1PushTokenRequest

try {
    $result = $apiInstance->deleteApiV1PushToken($x_auth_token, $x_user_id, $delete_api_v1_push_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->deleteApiV1PushToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **delete_api_v1_push_token_request** | [**\RocketChatNotificationsApi\Model\DeleteApiV1PushTokenRequest**](../Model/DeleteApiV1PushTokenRequest.md)|  | [optional] |

### Return type

[**\RocketChatNotificationsApi\Model\PostApiV1BannersDismiss200Response**](../Model/PostApiV1BannersDismiss200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1PushGet()`

```php
getApiV1PushGet($x_auth_token, $x_user_id, $id): \RocketChatNotificationsApi\Model\GetApiV1PushGet200Response
```

Get Push Notification

Get push notification for a message. ### Changelog | Version      | Description | | ---------------- | ------------| |3.5.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatNotificationsApi\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$id = WkbwSntxt8D3jLp8G; // string | The message ID.

try {
    $result = $apiInstance->getApiV1PushGet($x_auth_token, $x_user_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->getApiV1PushGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **id** | **string**| The message ID. | |

### Return type

[**\RocketChatNotificationsApi\Model\GetApiV1PushGet200Response**](../Model/GetApiV1PushGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1PushToken()`

```php
postApiV1PushToken($x_auth_token, $x_user_id, $post_api_v1_push_token_request): \RocketChatNotificationsApi\Model\PostApiV1PushToken200Response
```

Create Push Token

### Changelog | Version      | Description | | ---------------- | ------------| |0.60.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatNotificationsApi\Api\PushTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$post_api_v1_push_token_request = {"type":"gcm","value":"TOKEN","appName":"MyApp"}; // \RocketChatNotificationsApi\Model\PostApiV1PushTokenRequest

try {
    $result = $apiInstance->postApiV1PushToken($x_auth_token, $x_user_id, $post_api_v1_push_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushTokenApi->postApiV1PushToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **post_api_v1_push_token_request** | [**\RocketChatNotificationsApi\Model\PostApiV1PushTokenRequest**](../Model/PostApiV1PushTokenRequest.md)|  | [optional] |

### Return type

[**\RocketChatNotificationsApi\Model\PostApiV1PushToken200Response**](../Model/PostApiV1PushToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
