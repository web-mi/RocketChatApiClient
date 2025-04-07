# WebMI\RocketChatApiClient\MethodCallApi\MethodCallApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1MethodCallDeleteFileMessage()**](MethodCallApi.md#postApiV1MethodCallDeleteFileMessage) | **POST** /api/v1/method.call/deleteFileMessage | Method Call |
| [**postApiV1MethodCallDeleteMessage()**](MethodCallApi.md#postApiV1MethodCallDeleteMessage) | **POST** /api/v1/method.call/deleteMessage | Method Call |
| [**postApiV1MethodCallMuteUserInRoom()**](MethodCallApi.md#postApiV1MethodCallMuteUserInRoom) | **POST** /api/v1/method.call/muteUserInRoom | Method Call |
| [**postApiV1MethodCallUnmuteUserInRoom()**](MethodCallApi.md#postApiV1MethodCallUnmuteUserInRoom) | **POST** /api/v1/method.call/unmuteUserInRoom | Method Call |
| [**postApiV1MethodCallUserPresence()**](MethodCallApi.md#postApiV1MethodCallUserPresence) | **POST** /api/v1/method.call/UserPresence | Method Call |


## `postApiV1MethodCallDeleteFileMessage()`

```php
postApiV1MethodCallDeleteFileMessage($x_auth_token, $x_user_id, $body): \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response
```

Method Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MethodCallApi\Api\MethodCallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$body = new \WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage(); // \WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage

try {
    $result = $apiInstance->postApiV1MethodCallDeleteFileMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodCallApi->postApiV1MethodCallDeleteFileMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **body** | **\WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage**|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response**](../Model/PostApiV1MethodCallDeleteMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1MethodCallDeleteMessage()`

```php
postApiV1MethodCallDeleteMessage($x_auth_token, $x_user_id, $method_call_delete_message): \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response
```

Method Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MethodCallApi\Api\MethodCallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$method_call_delete_message = new \WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage(); // \WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage

try {
    $result = $apiInstance->postApiV1MethodCallDeleteMessage($x_auth_token, $x_user_id, $method_call_delete_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodCallApi->postApiV1MethodCallDeleteMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **method_call_delete_message** | [**\WebMI\RocketChatApiClient\MethodCallApi\Model\MethodCallDeleteMessage**](../Model/MethodCallDeleteMessage.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response**](../Model/PostApiV1MethodCallDeleteMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1MethodCallMuteUserInRoom()`

```php
postApiV1MethodCallMuteUserInRoom($x_auth_token, $x_user_id, $post_api_v1_method_call_mute_user_in_room_request): \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response
```

Method Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MethodCallApi\Api\MethodCallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_method_call_mute_user_in_room_request = new \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest(); // \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest

try {
    $result = $apiInstance->postApiV1MethodCallMuteUserInRoom($x_auth_token, $x_user_id, $post_api_v1_method_call_mute_user_in_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodCallApi->postApiV1MethodCallMuteUserInRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_method_call_mute_user_in_room_request** | [**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest**](../Model/PostApiV1MethodCallMuteUserInRoomRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response**](../Model/PostApiV1MethodCallDeleteMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1MethodCallUnmuteUserInRoom()`

```php
postApiV1MethodCallUnmuteUserInRoom($x_auth_token, $x_user_id, $post_api_v1_method_call_mute_user_in_room_request): \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response
```

Method Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MethodCallApi\Api\MethodCallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_method_call_mute_user_in_room_request = new \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest(); // \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest

try {
    $result = $apiInstance->postApiV1MethodCallUnmuteUserInRoom($x_auth_token, $x_user_id, $post_api_v1_method_call_mute_user_in_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodCallApi->postApiV1MethodCallUnmuteUserInRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_method_call_mute_user_in_room_request** | [**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallMuteUserInRoomRequest**](../Model/PostApiV1MethodCallMuteUserInRoomRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response**](../Model/PostApiV1MethodCallDeleteMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1MethodCallUserPresence()`

```php
postApiV1MethodCallUserPresence($x_auth_token, $x_user_id, $post_api_v1_method_call_user_presence_request): \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response
```

Method Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MethodCallApi\Api\MethodCallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_method_call_user_presence_request = new \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallUserPresenceRequest(); // \WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallUserPresenceRequest

try {
    $result = $apiInstance->postApiV1MethodCallUserPresence($x_auth_token, $x_user_id, $post_api_v1_method_call_user_presence_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodCallApi->postApiV1MethodCallUserPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_method_call_user_presence_request** | [**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallUserPresenceRequest**](../Model/PostApiV1MethodCallUserPresenceRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MethodCallApi\Model\PostApiV1MethodCallDeleteMessage200Response**](../Model/PostApiV1MethodCallDeleteMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
