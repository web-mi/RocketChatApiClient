# RocketChatOmnichannelApi\LivechatMessagesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatMessageId()**](LivechatMessagesApi.md#deleteApiV1LivechatMessageId) | **DELETE** /api/v1/livechat/message/{_id} | Delete Livechat Message |
| [**getApiV1LivechatMessageId()**](LivechatMessagesApi.md#getApiV1LivechatMessageId) | **GET** /api/v1/livechat/message/{_id} | Get a Livechat Message |
| [**getApiV1LivechatMessagesHistoryRid()**](LivechatMessagesApi.md#getApiV1LivechatMessagesHistoryRid) | **GET** /api/v1/livechat/messages.history/{rid} | Get Livechat Message History |
| [**postApiV1LivechatMessage()**](LivechatMessagesApi.md#postApiV1LivechatMessage) | **POST** /api/v1/livechat/message | Send New Livechat Message |
| [**postApiV1LivechatMessages()**](LivechatMessagesApi.md#postApiV1LivechatMessages) | **POST** /api/v1/livechat/messages | Send Array of Messages |
| [**postApiV1LivechatOfflineMessage()**](LivechatMessagesApi.md#postApiV1LivechatOfflineMessage) | **POST** /api/v1/livechat/offline.message | Send Offline Livechat Message |
| [**putApiV1LivechatMessageId()**](LivechatMessagesApi.md#putApiV1LivechatMessageId) | **PUT** /api/v1/livechat/message/{_id} | Update Livechat Message |


## `deleteApiV1LivechatMessageId()`

```php
deleteApiV1LivechatMessageId($_id, $delete_api_v1_livechat_message_id_request): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatMessageId200Response
```

Delete Livechat Message

Remove a specific livechat message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = ZKWP8LfGnRHQ3ozWa; // string | The message ID that you want to update.
$delete_api_v1_livechat_message_id_request = {"token":"54fc5544030bcecda053311cb6b989","rid":"hGFwSKA28nRKut3pD"}; // \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatMessageIdRequest

try {
    $result = $apiInstance->deleteApiV1LivechatMessageId($_id, $delete_api_v1_livechat_message_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->deleteApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The message ID that you want to update. | |
| **delete_api_v1_livechat_message_id_request** | [**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatMessageIdRequest**](../Model/DeleteApiV1LivechatMessageIdRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatMessageId200Response**](../Model/DeleteApiV1LivechatMessageId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatMessageId()`

```php
getApiV1LivechatMessageId($_id, $token, $rid): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMessageId200Response
```

Get a Livechat Message

Retrieve specific livechat message information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = ZKWP8LfGnRHQ3ozWa; // string | The message ID that you want to update.
$token = 8s7e9ony6ctl27e1qf8kue; // string | The visitor token.
$rid = mmqCzYgiL8fzRYfuY; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatMessageId($_id, $token, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->getApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The message ID that you want to update. | |
| **token** | **string**| The visitor token. | |
| **rid** | **string**| The room ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMessageId200Response**](../Model/GetApiV1LivechatMessageId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatMessagesHistoryRid()`

```php
getApiV1LivechatMessagesHistoryRid($rid, $token, $ls, $end, $limit): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMessagesHistoryRid200Response
```

Get Livechat Message History

Get the entire message history of a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = 'rid_example'; // string | The room ID.
$token = iNKE8a6k6cjbqWhWd; // string | The visitor token.
$ls = 2018-09-14T13:31:33.201Z; // mixed | The timestamp to start loading the messages.
$end = 2018-09-14T14:31:33.201Z; // mixed
$limit = 25; // float | The number of messages to load.

try {
    $result = $apiInstance->getApiV1LivechatMessagesHistoryRid($rid, $token, $ls, $end, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->getApiV1LivechatMessagesHistoryRid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rid** | **string**| The room ID. | |
| **token** | **string**| The visitor token. | |
| **ls** | [**mixed**](../Model/.md)| The timestamp to start loading the messages. | [optional] |
| **end** | [**mixed**](../Model/.md)|  | [optional] |
| **limit** | **float**| The number of messages to load. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMessagesHistoryRid200Response**](../Model/GetApiV1LivechatMessagesHistoryRid200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatMessage()`

```php
postApiV1LivechatMessage($post_api_v1_livechat_message_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatMessage200Response
```

Send New Livechat Message

Send a new message in a Livechat room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_message_request = {"token":"54fc5544030bcecda053311cb6b","rid":"hGFwSKA28nRKut3pD","msg":"Hello World!","agent":{"agentId":"CkCPNcvsvCDfmWLqC","username":"kim.jane"}}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatMessageRequest

try {
    $result = $apiInstance->postApiV1LivechatMessage($post_api_v1_livechat_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_message_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatMessageRequest**](../Model/PostApiV1LivechatMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatMessage200Response**](../Model/PostApiV1LivechatMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatMessages()`

```php
postApiV1LivechatMessages($x_auth_token, $x_user_id, $post_api_v1_livechat_messages_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatMessages200Response
```

Send Array of Messages

Send an array of messsages in a Livechat room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_messages_request = {"visitor":{"token":"54fc5544030bcecda053311cb6b98920b"},"messages":[{"msg":"test"},{"msg":"hello"}]}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatMessagesRequest

try {
    $result = $apiInstance->postApiV1LivechatMessages($x_auth_token, $x_user_id, $post_api_v1_livechat_messages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_messages_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatMessagesRequest**](../Model/PostApiV1LivechatMessagesRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatMessages200Response**](../Model/PostApiV1LivechatMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatOfflineMessage()`

```php
postApiV1LivechatOfflineMessage($post_api_v1_livechat_offline_message_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatTranscript200Response
```

Send Offline Livechat Message

Send the offline message when no agent is available to attend the omnichannel conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_offline_message_request = {"name":"Livechat Visitor","email":"visitor@rocket.chat","message":"I need help","department":"Support","host":"null"}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatOfflineMessageRequest

try {
    $result = $apiInstance->postApiV1LivechatOfflineMessage($post_api_v1_livechat_offline_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->postApiV1LivechatOfflineMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_offline_message_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatOfflineMessageRequest**](../Model/PostApiV1LivechatOfflineMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatTranscript200Response**](../Model/PostApiV1LivechatTranscript200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatMessageId()`

```php
putApiV1LivechatMessageId($_id, $put_api_v1_livechat_message_id_request): \RocketChatOmnichannelApi\Model\PutApiV1LivechatMessageId200Response
```

Update Livechat Message

Update a specific livechat message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = ZKWP8LfGnRHQ3ozWa; // string | The message ID that you want to update.
$put_api_v1_livechat_message_id_request = {"token":"54fc5544030bcecda053311cb6b9892","rid":"hGFwSKA28nRKut3pD","msg":"editing livechat message.."}; // \RocketChatOmnichannelApi\Model\PutApiV1LivechatMessageIdRequest

try {
    $result = $apiInstance->putApiV1LivechatMessageId($_id, $put_api_v1_livechat_message_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMessagesApi->putApiV1LivechatMessageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The message ID that you want to update. | |
| **put_api_v1_livechat_message_id_request** | [**\RocketChatOmnichannelApi\Model\PutApiV1LivechatMessageIdRequest**](../Model/PutApiV1LivechatMessageIdRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PutApiV1LivechatMessageId200Response**](../Model/PutApiV1LivechatMessageId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
