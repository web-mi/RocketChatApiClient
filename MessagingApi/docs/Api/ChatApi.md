# RocketChatMessagingApi\ChatApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ChatGetDeletedMessages()**](ChatApi.md#getApiV1ChatGetDeletedMessages) | **GET** /api/v1/chat.getDeletedMessages | Get Deleted Messages |
| [**getApiV1ChatGetDiscussions()**](ChatApi.md#getApiV1ChatGetDiscussions) | **GET** /api/v1/chat.getDiscussions | Get Discussions of A Room |
| [**getApiV1ChatGetMentionedMessages()**](ChatApi.md#getApiV1ChatGetMentionedMessages) | **GET** /api/v1/chat.getMentionedMessages | Get Mentioned Messages |
| [**getApiV1ChatGetMessage()**](ChatApi.md#getApiV1ChatGetMessage) | **GET** /api/v1/chat.getMessage | Get Message |
| [**getApiV1ChatGetMessageReadReceipts()**](ChatApi.md#getApiV1ChatGetMessageReadReceipts) | **GET** /api/v1/chat.getMessageReadReceipts | Get Message Read Receipts |
| [**getApiV1ChatGetPinnedMessages()**](ChatApi.md#getApiV1ChatGetPinnedMessages) | **GET** /api/v1/chat.getPinnedMessages | Get Pinned Messages |
| [**getApiV1ChatGetSnippetedMessageById()**](ChatApi.md#getApiV1ChatGetSnippetedMessageById) | **GET** /api/v1/chat.getSnippetedMessageById | Get Snippeted Message By Id |
| [**getApiV1ChatGetSnippetedMessages()**](ChatApi.md#getApiV1ChatGetSnippetedMessages) | **GET** /api/v1/chat.getSnippetedMessages | Get Snippeted Messages |
| [**getApiV1ChatGetStarredMessages()**](ChatApi.md#getApiV1ChatGetStarredMessages) | **GET** /api/v1/chat.getStarredMessages | Get Starred Messages |
| [**getApiV1ChatGetThreadMessages()**](ChatApi.md#getApiV1ChatGetThreadMessages) | **GET** /api/v1/chat.getThreadMessages | Get Thread Messages |
| [**getApiV1ChatIgnoreUser()**](ChatApi.md#getApiV1ChatIgnoreUser) | **GET** /api/v1/chat.ignoreUser | Ignore User |
| [**getApiV1ChatSearch()**](ChatApi.md#getApiV1ChatSearch) | **GET** /api/v1/chat.search | Search Message |
| [**getApiV1ChatSyncMessages()**](ChatApi.md#getApiV1ChatSyncMessages) | **GET** /api/v1/chat.syncMessages | Sync Messages |
| [**getApiV1ChatSyncThreadMessages()**](ChatApi.md#getApiV1ChatSyncThreadMessages) | **GET** /api/v1/chat.syncThreadMessages | Sync Thread Messages |
| [**getApiV1ChatSyncThreadsList()**](ChatApi.md#getApiV1ChatSyncThreadsList) | **GET** /api/v1/chat.syncThreadsList | Sync Thread List |
| [**getChatGetThreadsList()**](ChatApi.md#getChatGetThreadsList) | **GET** /chat.getThreadsList | List Threads |
| [**postApiV1ChatDelete()**](ChatApi.md#postApiV1ChatDelete) | **POST** /api/v1/chat.delete | Delete Chat Message |
| [**postApiV1ChatFollowMessage()**](ChatApi.md#postApiV1ChatFollowMessage) | **POST** /api/v1/chat.followMessage | Follow Message |
| [**postApiV1ChatPinMessage()**](ChatApi.md#postApiV1ChatPinMessage) | **POST** /api/v1/chat.pinMessage | Pin Message |
| [**postApiV1ChatPostMessage()**](ChatApi.md#postApiV1ChatPostMessage) | **POST** /api/v1/chat.postMessage | Post Message |
| [**postApiV1ChatReact()**](ChatApi.md#postApiV1ChatReact) | **POST** /api/v1/chat.react | React to Message |
| [**postApiV1ChatReportMessage()**](ChatApi.md#postApiV1ChatReportMessage) | **POST** /api/v1/chat.reportMessage | Report Message |
| [**postApiV1ChatSendMessage()**](ChatApi.md#postApiV1ChatSendMessage) | **POST** /api/v1/chat.sendMessage | Send Message |
| [**postApiV1ChatStarMessage()**](ChatApi.md#postApiV1ChatStarMessage) | **POST** /api/v1/chat.starMessage | Star Message |
| [**postApiV1ChatUnPinMessage()**](ChatApi.md#postApiV1ChatUnPinMessage) | **POST** /api/v1/chat.unPinMessage | Unpin a message |
| [**postApiV1ChatUnStarMessage()**](ChatApi.md#postApiV1ChatUnStarMessage) | **POST** /api/v1/chat.unStarMessage | Unstar Message |
| [**postApiV1ChatUnfollowMessage()**](ChatApi.md#postApiV1ChatUnfollowMessage) | **POST** /api/v1/chat.unfollowMessage | Unfollow Message |
| [**postApiV1ChatUpdate()**](ChatApi.md#postApiV1ChatUpdate) | **POST** /api/v1/chat.update | Update Message |


## `getApiV1ChatGetDeletedMessages()`

```php
getApiV1ChatGetDeletedMessages($x_auth_token, $x_user_id, $since, $room_id): \RocketChatMessagingApi\Model\GetApiV1ChatGetDeletedMessages200Response
```

Get Deleted Messages

Get deleted messages from a specific date.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.73.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$since = 2018-12-12T00:11:22.345Z; // string | A valid ISO date format from which you want to search the deleted messages.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.

try {
    $result = $apiInstance->getApiV1ChatGetDeletedMessages($x_auth_token, $x_user_id, $since, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetDeletedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **since** | **string**| A valid ISO date format from which you want to search the deleted messages. | |
| **room_id** | **string**| The room ID. | |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetDeletedMessages200Response**](../Model/GetApiV1ChatGetDeletedMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetDiscussions()`

```php
getApiV1ChatGetDiscussions($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatGetDiscussions200Response
```

Get Discussions of A Room

Gets the <a href='https://docs.rocket.chat/docs/discussions' target='_blank'>discussions</a> in a room.   ### Changelog | Version      | Description |  | ---------------- | ------------| | 2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetDiscussions($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetDiscussions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetDiscussions200Response**](../Model/GetApiV1ChatGetDiscussions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetMentionedMessages()`

```php
getApiV1ChatGetMentionedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatGetMentionedMessages200Response
```

Get Mentioned Messages

Get the messages in which you are mentioned (users are mentioned with the `@` symbol).   ### Changelog | Version      | Description |  | ------------ | ------------| | 2.2.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetMentionedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMentionedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetMentionedMessages200Response**](../Model/GetApiV1ChatGetMentionedMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetMessage()`

```php
getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Get Message

Get a single chat message. You must have permission to access the room where the message resides.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.47.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$msg_id = 7aDSXtjMA3KPLxLjt; // string | The message ID.

try {
    $result = $apiInstance->getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **msg_id** | **string**| The message ID. | |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetMessageReadReceipts()`

```php
getApiV1ChatGetMessageReadReceipts($x_auth_token, $x_user_id, $message_id, $offset, $count): \RocketChatMessagingApi\Model\GetApiV1ChatGetMessageReadReceipts200Response
```

Get Message Read Receipts

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the <a href='https://docs.rocket.chat/docs/message-actions#read-receipts' target='_blank'>read receipts</a> of messages.  ### Changelog | Version      | Description | | ---------------- | ------------| | 0.63.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$message_id = ByehQjC44FwMeiLbX; // string | The message id
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatGetMessageReadReceipts($x_auth_token, $x_user_id, $message_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetMessageReadReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **message_id** | **string**| The message id | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetMessageReadReceipts200Response**](../Model/GetApiV1ChatGetMessageReadReceipts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetPinnedMessages()`

```php
getApiV1ChatGetPinnedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count): \RocketChatMessagingApi\Model\GetApiV1ChatGetPinnedMessages200Response
```

Get Pinned Messages

Get the <a href='https://docs.rocket.chat/docs/message-actions#pin-messages' target='_blank'>pinned messages</a> of a room.   ### Changelog | Version      | Description |  | ---------------- | ------------| | 2.0.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatGetPinnedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetPinnedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetPinnedMessages200Response**](../Model/GetApiV1ChatGetPinnedMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetSnippetedMessageById()`

```php
getApiV1ChatGetSnippetedMessageById($x_auth_token, $x_user_id, $message_id): \RocketChatMessagingApi\Model\GetApiV1ChatGetSnippetedMessageById200Response
```

Get Snippeted Message By Id

Retrieve snippeted message by Id. ### Changelog | Version      | Description | | ---------------- | ------------| | 2.3.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$message_id = ByehQjC44FwMeiLbX; // string | The message id

try {
    $result = $apiInstance->getApiV1ChatGetSnippetedMessageById($x_auth_token, $x_user_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetSnippetedMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **message_id** | **string**| The message id | |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetSnippetedMessageById200Response**](../Model/GetApiV1ChatGetSnippetedMessageById200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetSnippetedMessages()`

```php
getApiV1ChatGetSnippetedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatGetSnippetedMessages200Response
```

Get Snippeted Messages

Retrieve snippeted messages.   ### Changelog | Version      | Description | | ---------------- | ------------| |2.3.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetSnippetedMessages($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetSnippetedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetSnippetedMessages200Response**](../Model/GetApiV1ChatGetSnippetedMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetStarredMessages()`

```php
getApiV1ChatGetStarredMessages($x_user_id, $x_auth_token, $room_id, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatGetStarredMessages200Response
```

Get Starred Messages

Get the <a href='https://docs.rocket.chat/docs/message-actions#star-messages' target='_blank'>starred messages</a> of the authenticated user in a room.   ### Changelog | Version      | Description |  | ------------ | ------------| | 2.2.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetStarredMessages($x_user_id, $x_auth_token, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetStarredMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetStarredMessages200Response**](../Model/GetApiV1ChatGetStarredMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatGetThreadMessages()`

```php
getApiV1ChatGetThreadMessages($x_auth_token, $x_user_id, $tmid, $offset, $count, $sort, $query, $fields): \RocketChatMessagingApi\Model\GetApiV1ChatGetThreadMessages200Response
```

Get Thread Messages

Get <a href='https://docs.rocket.chat/docs/threads' target='_blank'>thread</a> messages.   ### Changelog | Version      | Description |  | ------------ | ------------| | 1.2.0        | Remove `tlm` field which is not supported | | 1.1.0        | Update example results - original message in thread is not returned | | 1.0.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$tmid = 7aDSXtjMA3KPLxLjt; // string | The thread message ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatGetThreadMessages($x_auth_token, $x_user_id, $tmid, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatGetThreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **tmid** | **string**| The thread message ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60; | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatGetThreadMessages200Response**](../Model/GetApiV1ChatGetThreadMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatIgnoreUser()`

```php
getApiV1ChatIgnoreUser($x_auth_token, $x_user_id, $rid, $user_id, $ignore): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Ignore User

Ignore or unignore a user in chat.   ### Changelog | Version      | Description |  | ------------ | ------------| | 0.64.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = 'rid_example'; // string | The room ID.
$user_id = 'user_id_example'; // string | The user ID.
$ignore = True; // bool | If the user is to be ignored or not, default is true.

try {
    $result = $apiInstance->getApiV1ChatIgnoreUser($x_auth_token, $x_user_id, $rid, $user_id, $ignore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatIgnoreUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID. | |
| **user_id** | **string**| The user ID. | |
| **ignore** | **bool**| If the user is to be ignored or not, default is true. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatSearch()`

```php
getApiV1ChatSearch($x_auth_token, $x_user_id, $room_id, $search_text, $count): \RocketChatMessagingApi\Model\GetApiV1ChatSearch200Response
```

Search Message

Search for messages by room ID and text message.   ### Changelog | Version      | Description |  | -------------| ------------| | 0.67.0       | Changed limit query parameter to count| | 0.60.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 'room_id_example'; // string | The room ID.
$search_text = 'search_text_example'; // string | The text to search for in messages.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChatSearch($x_auth_token, $x_user_id, $room_id, $search_text, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **search_text** | **string**| The text to search for in messages. | |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatSearch200Response**](../Model/GetApiV1ChatSearch200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatSyncMessages()`

```php
getApiV1ChatSyncMessages($x_auth_token, $x_user_id, $room_id, $last_update, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatSyncMessages200Response
```

Sync Messages

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$last_update = 2019-04-16T18:30:46.669Z; // string | The date as an ISO string.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatSyncMessages($x_auth_token, $x_user_id, $room_id, $last_update, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **last_update** | **string**| The date as an ISO string. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatSyncMessages200Response**](../Model/GetApiV1ChatSyncMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatSyncThreadMessages()`

```php
getApiV1ChatSyncThreadMessages($x_auth_token, $x_user_id, $updated_since, $tmid, $offset, $count, $sort): \RocketChatMessagingApi\Model\GetApiV1ChatSyncThreadMessages200Response
```

Sync Thread Messages

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$updated_since = 'updated_since_example'; // string | Date as an ISO string. When you provide the `updatedSince` query parameter, the `update` and `remove` parameters in the response will contain only those updated and removed since this date and time.
$tmid = 'tmid_example'; // string | Thread's message ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ChatSyncThreadMessages($x_auth_token, $x_user_id, $updated_since, $tmid, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncThreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **updated_since** | **string**| Date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, the &#x60;update&#x60; and &#x60;remove&#x60; parameters in the response will contain only those updated and removed since this date and time. | |
| **tmid** | **string**| Thread&#39;s message ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatSyncThreadMessages200Response**](../Model/GetApiV1ChatSyncThreadMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChatSyncThreadsList()`

```php
getApiV1ChatSyncThreadsList($x_auth_token, $x_user_id, $room_id, $room_name, $offset, $count, $sort, $updated_since): \RocketChatMessagingApi\Model\GetApiV1ChatSyncThreadsList200Response
```

Sync Thread List

### Changelog | Version      | Description |  | ------------ | ------------| | 1.0.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlp; // string | The room ID. It is required if the `roomName` is not provided.
$room_name = WDuJLFkjwk6L7LdFC; // string | The room name.  It is required if the `roomId` is not provided.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$updated_since = 'updated_since_example'; // string | Date as an ISO string. When you provide the `updatedSince` query parameter, then the `update` and `remove` parameters in the response will contain only those updated and removed since this date and time.

try {
    $result = $apiInstance->getApiV1ChatSyncThreadsList($x_auth_token, $x_user_id, $room_id, $room_name, $offset, $count, $sort, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getApiV1ChatSyncThreadsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |
| **updated_since** | **string**| Date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, then the &#x60;update&#x60; and &#x60;remove&#x60; parameters in the response will contain only those updated and removed since this date and time. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetApiV1ChatSyncThreadsList200Response**](../Model/GetApiV1ChatSyncThreadsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatGetThreadsList()`

```php
getChatGetThreadsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $rid): \RocketChatMessagingApi\Model\GetChatGetThreadsList200Response
```

List Threads

Get the <a href='https://docs.rocket.chat/docs/threads' target='_blank'>thread</a> conversations in a room.  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.0.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`
$rid = 7aDSXtjMA3KPLxLjt; // string | The room ID.

try {
    $result = $apiInstance->getChatGetThreadsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatGetThreadsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{ \&quot;value\&quot;: -1, \&quot;_id\&quot;: 1 }&#x60; | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60; | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60; | [optional] |
| **rid** | **string**| The room ID. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\GetChatGetThreadsList200Response**](../Model/GetChatGetThreadsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatDelete()`

```php
postApiV1ChatDelete($x_auth_token, $x_user_id, $post_api_v1_chat_delete_request): \RocketChatMessagingApi\Model\PostApiV1ChatDelete200Response
```

Delete Chat Message

Delete a chat message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_delete_request = {"roomId":"ByehQjC44FwMeiLbX","msgId":"7aDSXtjMA3KPLxLjt","asUser":false}; // \RocketChatMessagingApi\Model\PostApiV1ChatDeleteRequest | 

try {
    $result = $apiInstance->postApiV1ChatDelete($x_auth_token, $x_user_id, $post_api_v1_chat_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_delete_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatDeleteRequest**](../Model/PostApiV1ChatDeleteRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatDelete200Response**](../Model/PostApiV1ChatDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatFollowMessage()`

```php
postApiV1ChatFollowMessage($x_auth_token, $x_user_id, $post_api_v1_chat_follow_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Follow Message

Follow a message to receive notifications.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 1.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_follow_message_request = {"mid":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatFollowMessageRequest | 

try {
    $result = $apiInstance->postApiV1ChatFollowMessage($x_auth_token, $x_user_id, $post_api_v1_chat_follow_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatFollowMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_follow_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatFollowMessageRequest**](../Model/PostApiV1ChatFollowMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatPinMessage()`

```php
postApiV1ChatPinMessage($x_auth_token, $x_user_id, $post_api_v1_chat_pin_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatPinMessage200Response
```

Pin Message

<a href='https://docs.rocket.chat/docs/message-actions#pin-messages' target='_blank'>Pin</a> a chat message to the channel.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.59.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_pin_message_request = {"messageId":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatPinMessageRequest

try {
    $result = $apiInstance->postApiV1ChatPinMessage($x_auth_token, $x_user_id, $post_api_v1_chat_pin_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatPinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_pin_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatPinMessageRequest**](../Model/PostApiV1ChatPinMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatPinMessage200Response**](../Model/PostApiV1ChatPinMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatPostMessage()`

```php
postApiV1ChatPostMessage($x_auth_token, $x_user_id, $post_api_v1_chat_post_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatPostMessage200Response
```

Post Message

Send messages to channels. **Note**: You only can send alias and avatar properties if your user has the bot role. We implement this rule to avoid users to impersonate other users.  ### Change Log | Version | Description | | ------- |---------------------------------------------------------------------------- | | 6.8.0   | Allow custom fields in messages                                              |  | 2.4.1   | Document existing method to post reply/threaded messages                     | | 2.4.0   | Added validation on user's identity                                          | | 0.49.0  | The `channel` can now be a room's id.                                        | | 0.48.0  | Information about the sent message is now returned.                          | | 0.17.0  | Messages aren't always processed as from BOT and urls are parsed by default. | | 0.14.0  | Internally using `processWebhookMessage` which enabled more features.        | | 0.13.0  | Added                                                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_post_message_request = {"alias":"Gruggy","avatar":"http://res.guggy.com/logo_128.png","channel":"#general","emoji":":smirk:","roomId":"Xnb2kLD2Pnhdwe3RH","text":"Sample message","attachments":[{"audio_url":"http://www.w3schools.com/tags/horse.mp3","author_icon":"https://avatars.githubusercontent.com/u/850391?v=3","author_link":"https://rocket.chat/","author_name":"Bradley Hilton","collapsed":false,"color":"#ff0000","fields":[{"short":true,"title":"Test","value":"Testing out something or other"},{"short":true,"title":"Another Test","value":"[Link](https://google.com/) something and this and that."}],"image_url":"http://res.guggy.com/logo_128.png","message_link":"https://google.com","text":"Yay for gruggy!","thumb_url":"http://res.guggy.com/logo_128.png","title":"Attachment Example","title_link":"https://youtube.com","title_link_download":true,"ts":"2016-12-09T16:53:06.761Z","video_url":"http://www.w3schools.com/tags/movie.mp4"}]}; // \RocketChatMessagingApi\Model\PostApiV1ChatPostMessageRequest

try {
    $result = $apiInstance->postApiV1ChatPostMessage($x_auth_token, $x_user_id, $post_api_v1_chat_post_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatPostMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_post_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatPostMessageRequest**](../Model/PostApiV1ChatPostMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatPostMessage200Response**](../Model/PostApiV1ChatPostMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatReact()`

```php
postApiV1ChatReact($x_auth_token, $x_user_id, $post_api_v1_chat_react_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

React to Message

React or unreact to a chat message.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.64.0            | Added parameter \"shouldReact\" to make endpoint work like a setter| |0.63.0            | Emoji has to exist                                               | |0.62.2            |Added                                                             |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_react_request = {"messageId":"7aDSXtjMA3KPLxLjt","emoji":"smile","shouldReact":true}; // \RocketChatMessagingApi\Model\PostApiV1ChatReactRequest | The emoji doesn't have to contain `:`. However, the emoji must exist.

try {
    $result = $apiInstance->postApiV1ChatReact($x_auth_token, $x_user_id, $post_api_v1_chat_react_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatReact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_react_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatReactRequest**](../Model/PostApiV1ChatReactRequest.md)| The emoji doesn&#39;t have to contain &#x60;:&#x60;. However, the emoji must exist. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatReportMessage()`

```php
postApiV1ChatReportMessage($x_user_id, $x_auth_token, $post_api_v1_chat_report_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Report Message

<a href='https://docs.rocket.chat/docs/message-actions#report-a-message-or-user' target='_blank'>Report</a> a specific message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.64.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_chat_report_message_request = {"messageId":"7aDSXtjMA3KPLxLjt","description":"test"}; // \RocketChatMessagingApi\Model\PostApiV1ChatReportMessageRequest

try {
    $result = $apiInstance->postApiV1ChatReportMessage($x_user_id, $x_auth_token, $post_api_v1_chat_report_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatReportMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_chat_report_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatReportMessageRequest**](../Model/PostApiV1ChatReportMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatSendMessage()`

```php
postApiV1ChatSendMessage($x_auth_token, $x_user_id, $post_api_v1_chat_send_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatSendMessage200Response
```

Send Message

The difference between `chat.postMessage` and `chat.sendMessage` is that `chat.sendMessage` allows for passing a value for `_id` and the other one doesn't. Also, `chat.sendMessage` only sends it to one channel whereas the other one allows for sending to more than one channel at a time.<br />  **Note**: You can only send alias and avatar properties if your user has the `message-impersonate permission`. We implemented this rule to avoid users impersonating other users. By default, only the bot role has this permission, but that can be changed in **Administration** -> **Permissions** -> **message-impersonate**.  ### Change Log | Version | Description                         | | ------- | ----------------------------------- | | 6.8.0   | Allow custom fields in messages     |       | 6.4.0   | Add `previewUrls` param             | | 2.4.0   | Added validation on user's identity | | 0.60.0  | Added                               |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_send_message_request = {"message":{"rid":"Xnb2kLD2Pnhdwe3RH","msg":"Sample message","alias":"Gruggy","emoji":":smirk:","avatar":"http://res.guggy.com/logo_128.png","attachments":[{"color":"#ff0000","text":"Yay for gruggy!","ts":"2016-12-09T16:53:06.761Z","thumb_url":"http://res.guggy.com/logo_128.png","message_link":"https://google.com","collapsed":false,"author_name":"Bradley Hilton","author_link":"https://rocket.chat/","author_icon":"https://avatars.githubusercontent.com/u/850391?v=3","title":"Attachment Example","title_link":"https://youtube.com","title_link_download":true,"image_url":"http://res.guggy.com/logo_128.png","audio_url":"http://www.w3schools.com/tags/horse.mp3","video_url":"http://www.w3schools.com/tags/movie.mp4","fields":[{"short":true,"title":"Test","value":"Testing out something or other"},{"short":true,"title":"Another Test","value":"[Link](https://google.com/) something and this and that."}]}]}}; // \RocketChatMessagingApi\Model\PostApiV1ChatSendMessageRequest | **Some important things to note about the `previewUrls` parameter include:** * If the `previewUrls` array is empty, no URL will be previewed. * If the `previewUrls` parameter isn't sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the `previewUrls` array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. > URLs that include the same text as the <a href='https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings' target='_blank'>**Site URL**</a> are referred to as Internal URLs.

try {
    $result = $apiInstance->postApiV1ChatSendMessage($x_auth_token, $x_user_id, $post_api_v1_chat_send_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_send_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatSendMessageRequest**](../Model/PostApiV1ChatSendMessageRequest.md)| **Some important things to note about the &#x60;previewUrls&#x60; parameter include:** * If the &#x60;previewUrls&#x60; array is empty, no URL will be previewed. * If the &#x60;previewUrls&#x60; parameter isn&#39;t sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the &#x60;previewUrls&#x60; array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. &gt; URLs that include the same text as the &lt;a href&#x3D;&#39;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings&#39; target&#x3D;&#39;_blank&#39;&gt;**Site URL**&lt;/a&gt; are referred to as Internal URLs. | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatSendMessage200Response**](../Model/PostApiV1ChatSendMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatStarMessage()`

```php
postApiV1ChatStarMessage($x_auth_token, $x_user_id, $post_api_v1_chat_star_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Star Message

<a href='https://docs.rocket.chat/docs/message-actions#star-messages' target='_blank'>Star</a> a message.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.59.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_star_message_request = {"messageId":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatStarMessageRequest

try {
    $result = $apiInstance->postApiV1ChatStarMessage($x_auth_token, $x_user_id, $post_api_v1_chat_star_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatStarMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_star_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatStarMessageRequest**](../Model/PostApiV1ChatStarMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatUnPinMessage()`

```php
postApiV1ChatUnPinMessage($x_auth_token, $x_user_id, $post_api_v1_chat_un_pin_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Unpin a message

Remove a pinned message from the channel.  ### Changelog | Version      | Description |  | -------------| ------------| | 0.59.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_un_pin_message_request = {"messageId":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatUnPinMessageRequest

try {
    $result = $apiInstance->postApiV1ChatUnPinMessage($x_auth_token, $x_user_id, $post_api_v1_chat_un_pin_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnPinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_un_pin_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatUnPinMessageRequest**](../Model/PostApiV1ChatUnPinMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatUnStarMessage()`

```php
postApiV1ChatUnStarMessage($x_auth_token, $x_user_id, $post_api_v1_chat_un_star_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Unstar Message

Unstar a message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.59.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_un_star_message_request = {"messageId":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatUnStarMessageRequest

try {
    $result = $apiInstance->postApiV1ChatUnStarMessage($x_auth_token, $x_user_id, $post_api_v1_chat_un_star_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnStarMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_un_star_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatUnStarMessageRequest**](../Model/PostApiV1ChatUnStarMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatUnfollowMessage()`

```php
postApiV1ChatUnfollowMessage($x_auth_token, $x_user_id, $post_api_v1_chat_unfollow_message_request): \RocketChatMessagingApi\Model\PostApiV1ChatReact200Response
```

Unfollow Message

Unfollow a message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 1.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_unfollow_message_request = {"mid":"7aDSXtjMA3KPLxLjt"}; // \RocketChatMessagingApi\Model\PostApiV1ChatUnfollowMessageRequest | 

try {
    $result = $apiInstance->postApiV1ChatUnfollowMessage($x_auth_token, $x_user_id, $post_api_v1_chat_unfollow_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUnfollowMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_unfollow_message_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatUnfollowMessageRequest**](../Model/PostApiV1ChatUnfollowMessageRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatUpdate()`

```php
postApiV1ChatUpdate($x_auth_token, $x_user_id, $post_api_v1_chat_update_request): \RocketChatMessagingApi\Model\PostApiV1ChatUpdate200Response
```

Update Message

Update a specific message.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 6.12.0           | Fixed `customFields` not updating if `text` was unchanged | | 6.4.0            | Add previewUrls param       |         | 0.49.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMessagingApi\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_update_request = {"roomId":"64f0f82c2c26843a68c1f7ba","msgId":"vzGBzSwy6jJQDwtZe","text":"Updated list of links! https://google.com https://hola.org/ https://www.usepayday.com/ https://www.getbumpa.com/ https://www.atlassian.com/software/jira http://localhost:3000/","previewUrls":["https://google.com","http://localhost:3000/"]}; // \RocketChatMessagingApi\Model\PostApiV1ChatUpdateRequest

try {
    $result = $apiInstance->postApiV1ChatUpdate($x_auth_token, $x_user_id, $post_api_v1_chat_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->postApiV1ChatUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_update_request** | [**\RocketChatMessagingApi\Model\PostApiV1ChatUpdateRequest**](../Model/PostApiV1ChatUpdateRequest.md)|  | [optional] |

### Return type

[**\RocketChatMessagingApi\Model\PostApiV1ChatUpdate200Response**](../Model/PostApiV1ChatUpdate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
