# WebMI\RocketChatApiClient\OmnichannelApi\LivechatRoomsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatRoomRidPriority()**](LivechatRoomsApi.md#deleteApiV1LivechatRoomRidPriority) | **DELETE** /api/v1/livechat/room/{rid}/priority | Remove Livechat Room Priority |
| [**getApiV1LivechatRoom()**](LivechatRoomsApi.md#getApiV1LivechatRoom) | **GET** /api/v1/livechat/room | Get or Create Livechat Rooms |
| [**getApiV1LivechatRoomJoin()**](LivechatRoomsApi.md#getApiV1LivechatRoomJoin) | **GET** /api/v1/livechat/room.join | Join Livechat Room |
| [**getApiV1LivechatRooms()**](LivechatRoomsApi.md#getApiV1LivechatRooms) | **GET** /api/v1/livechat/rooms | Get List of Livechat Rooms |
| [**getApiV1LivechatTransferHistoryRid()**](LivechatRoomsApi.md#getApiV1LivechatTransferHistoryRid) | **GET** /api/v1/livechat/transfer.history/{rid} | Get Department Transfer History |
| [**postApiV1LivechatRoomClose()**](LivechatRoomsApi.md#postApiV1LivechatRoomClose) | **POST** /api/v1/livechat/room.close | Close Livechat Room |
| [**postApiV1LivechatRoomForward()**](LivechatRoomsApi.md#postApiV1LivechatRoomForward) | **POST** /api/v1/livechat/room.forward | Forward Livechat Room |
| [**postApiV1LivechatRoomOnHold()**](LivechatRoomsApi.md#postApiV1LivechatRoomOnHold) | **POST** /api/v1/livechat/room.onHold | Put Livechat Room on Hold |
| [**postApiV1LivechatRoomRidPriority()**](LivechatRoomsApi.md#postApiV1LivechatRoomRidPriority) | **POST** /api/v1/livechat/room/{rid}/priority | Set Livechat Room Priority |
| [**postApiV1LivechatRoomSaveInfo()**](LivechatRoomsApi.md#postApiV1LivechatRoomSaveInfo) | **POST** /api/v1/livechat/room.saveInfo | Update Livechat Room |
| [**postApiV1LivechatRoomSurvey()**](LivechatRoomsApi.md#postApiV1LivechatRoomSurvey) | **POST** /api/v1/livechat/room.survey | Survey Livechat Room |
| [**postApiV1LivechatRoomTransfer()**](LivechatRoomsApi.md#postApiV1LivechatRoomTransfer) | **POST** /api/v1/livechat/room.transfer | Transfer Livechat Room |
| [**postApiV1LivechatUpload()**](LivechatRoomsApi.md#postApiV1LivechatUpload) | **POST** /api/v1/livechat/upload/{rid} | Upload Files to Room |
| [**putApiV1LivechatRoomVisitor()**](LivechatRoomsApi.md#putApiV1LivechatRoomVisitor) | **PUT** /api/v1/livechat/room.visitor | Update Livechat Room Visitor |


## `deleteApiV1LivechatRoomRidPriority()`

```php
deleteApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Remove Livechat Room Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Remove the priority set to a Livechat room.<br>  Permission required: `view-l-room`  ### Changelog | Version | Description  | | ------- |--------------| | 6.0.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = 'rid_example'; // string | The room ID.

try {
    $result = $apiInstance->deleteApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->deleteApiV1LivechatRoomRidPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatRoom()`

```php
getApiV1LivechatRoom($token, $rid, $agent_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRoom200Response
```

Get or Create Livechat Rooms

Get the data of an existing room of a visitor. If a room doesn't exist for the visitor, a new room is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = iNKE8a6k6cjbqWhWd; // string | The visitor token.
$rid = kCJDd5peKiZnGJLPq; // string | The room ID.
$agent_id = XycfA5CetCPuEjqxw; // string | The agent ID.

try {
    $result = $apiInstance->getApiV1LivechatRoom($token, $rid, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | |
| **rid** | **string**| The room ID. | [optional] |
| **agent_id** | **string**| The agent ID. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRoom200Response**](../Model/GetApiV1LivechatRoom200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatRoomJoin()`

```php
getApiV1LivechatRoomJoin($x_auth_token, $x_user_id, $room_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Join Livechat Room

Call this endpoint to join a Livechat room. Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = gMMeBpWyLeowCrzBv; // string | The room ID that you want to join.

try {
    $result = $apiInstance->getApiV1LivechatRoomJoin($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRoomJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID that you want to join. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatRooms()`

```php
getApiV1LivechatRooms($x_auth_token, $x_user_id, $agents, $department_id, $open, $created_at, $closed_at, $tags, $custom_fields, $room_name, $offset, $count, $sort, $fields): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRooms200Response
```

Get List of Livechat Rooms

Retrieves a list of Livechat rooms. At least one of the following permissions is required: * `view-livechat-rooms` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0             | Added support to the parameter `roomName`| |2.0.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$agents = ['b32h3b2hhwb25d']; // string | A list of agents, can be a list of IDs or usernames
$department_id = AkzpHAvZpdnuchw2a; // string | The department ID
$open = true; // bool | If it should filter by open/closed rooms
$created_at = {"start": "2018-01-26T00:11:22.345Z", "end": "2018-01-26T00:11:22.345Z"}; // string | An object representing when the room was created (can also be filtered only with `start` or `end`)
$closed_at = {"start": "2018-01-26T00:11:22.345Z", "end": "2018-01-26T00:11:22.345Z"}; // string | An object representing when the room was closed (can also be filtered only with `start` or `end`)
$tags = ['rocket', 'chat']; // string | A list of tags
$custom_fields = {"docId": "aobEdbYhXfu5hkeqG"}; // string | An object with custom fields to be filtered (previously created and populated at custom fields endpoints)
$room_name = room name; // string | The room's name
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$fields = NULL; // mixed | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields = `{\"username\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatRooms($x_auth_token, $x_user_id, $agents, $department_id, $open, $created_at, $closed_at, $tags, $custom_fields, $room_name, $offset, $count, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **agents** | **string**| A list of agents, can be a list of IDs or usernames | [optional] |
| **department_id** | **string**| The department ID | [optional] |
| **open** | **bool**| If it should filter by open/closed rooms | [optional] |
| **created_at** | **string**| An object representing when the room was created (can also be filtered only with &#x60;start&#x60; or &#x60;end&#x60;) | [optional] |
| **closed_at** | **string**| An object representing when the room was closed (can also be filtered only with &#x60;start&#x60; or &#x60;end&#x60;) | [optional] |
| **tags** | **string**| A list of tags | [optional] |
| **custom_fields** | **string**| An object with custom fields to be filtered (previously created and populated at custom fields endpoints) | [optional] |
| **room_name** | **string**| The room&#39;s name | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |
| **fields** | [**mixed**](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields &#x3D; &#x60;{\&quot;username\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatRooms200Response**](../Model/GetApiV1LivechatRooms200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatTransferHistoryRid()`

```php
getApiV1LivechatTransferHistoryRid($rid, $x_auth_token, $x_user_id, $count, $offset, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTransferHistoryRid200Response
```

Get Department Transfer History

Retrieve the conversation transfer history from one department to another. Permission required: `view-livechat-rooms`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = 'rid_example'; // string | The room ID
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$count = 25; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatTransferHistoryRid($rid, $x_auth_token, $x_user_id, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->getApiV1LivechatTransferHistoryRid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rid** | **string**| The room ID | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTransferHistoryRid200Response**](../Model/GetApiV1LivechatTransferHistoryRid200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomClose()`

```php
postApiV1LivechatRoomClose($post_api_v1_livechat_room_close_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomClose200Response
```

Close Livechat Room



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_room_close_request = {"rid":"XFzMqgn33DcsQkpJp","token":"iNKE8a6k6cjbqWhWd"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomCloseRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomClose($post_api_v1_livechat_room_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_room_close_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomCloseRequest**](../Model/PostApiV1LivechatRoomCloseRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomClose200Response**](../Model/PostApiV1LivechatRoomClose200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomForward()`

```php
postApiV1LivechatRoomForward($x_auth_token, $x_user_id, $post_api_v1_livechat_room_forward_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Forward Livechat Room

The chatbot agent forwards the chat to a human agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_room_forward_request = {"roomId":"XFzMqgn33DcsQkpJp","userId":"iNKE8a6k6cjbqWhWd"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomForwardRequest | 

try {
    $result = $apiInstance->postApiV1LivechatRoomForward($x_auth_token, $x_user_id, $post_api_v1_livechat_room_forward_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomForward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_room_forward_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomForwardRequest**](../Model/PostApiV1LivechatRoomForwardRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomOnHold()`

```php
postApiV1LivechatRoomOnHold($x_user_id, $x_auth_token, $post_api_v1_livechat_room_on_hold_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Put Livechat Room on Hold

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Put an active Livechat conversation on hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_livechat_room_on_hold_request = {"roomId":"Z7223PfNPwH7ihQPh"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomOnHoldRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomOnHold($x_user_id, $x_auth_token, $post_api_v1_livechat_room_on_hold_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomOnHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_livechat_room_on_hold_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomOnHoldRequest**](../Model/PostApiV1LivechatRoomOnHoldRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomRidPriority()`

```php
postApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid, $post_api_v1_livechat_room_rid_priority_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Set Livechat Room Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Set the priority of a Livechat room.<br>  Permission required: `view-l-room`  ### Changelog | Version | Description  | | ------- |--------------| | 6.0.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = 'rid_example'; // string | The room ID.
$post_api_v1_livechat_room_rid_priority_request = {"priorityId":"64007cc2fa0ed7dd905092e6"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomRidPriorityRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomRidPriority($x_auth_token, $x_user_id, $rid, $post_api_v1_livechat_room_rid_priority_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomRidPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID. | |
| **post_api_v1_livechat_room_rid_priority_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomRidPriorityRequest**](../Model/PostApiV1LivechatRoomRidPriorityRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomSaveInfo()`

```php
postApiV1LivechatRoomSaveInfo($x_auth_token, $x_user_id, $post_api_v1_livechat_room_save_info_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Update Livechat Room

Edit a Livechat room. Update the topic, tags, and other details of a Livechat room.  Permission required: `view-l-room`  ### Changelog | Version      | Description | | ---------------- | ------------| |5.3.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_room_save_info_request = {"guestData":{"_id":"rbAXPnMktTFbNpwtJ"},"roomData":{"_id":"nf52k8bpJ8y7oHmwk","topic":"Hmm","tags":["testtags"]}}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSaveInfoRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomSaveInfo($x_auth_token, $x_user_id, $post_api_v1_livechat_room_save_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomSaveInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_room_save_info_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSaveInfoRequest**](../Model/PostApiV1LivechatRoomSaveInfoRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomSurvey()`

```php
postApiV1LivechatRoomSurvey($post_api_v1_livechat_room_survey_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSurvey200Response
```

Survey Livechat Room

Provide feedback on a Livechat room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_room_survey_request = {"rid":"gMMeBpWyLeowCrzBv","token":"d4a8338e5a7d98b6750b4f839431b34a3f4813b2c43f7d89597948f21f607bb4","data":[{"name":"additionalFeedback","value":"Thankszzzzz"}]}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSurveyRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomSurvey($post_api_v1_livechat_room_survey_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomSurvey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_room_survey_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSurveyRequest**](../Model/PostApiV1LivechatRoomSurveyRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomSurvey200Response**](../Model/PostApiV1LivechatRoomSurvey200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatRoomTransfer()`

```php
postApiV1LivechatRoomTransfer($post_api_v1_livechat_room_transfer_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomTransfer200Response
```

Transfer Livechat Room

Use the <a href=\"https://developer.rocket.chat/apidocs/forward-livechat-room\" target=\"_blank\">Forward Livechat Room</a> endpoint instead.  Transfer an omnichannel conversation to another department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_room_transfer_request = {"rid":"XFzMqgn33DcsQkpJp","token":"iNKE8a6k6cjbqWhWd","department":"wXpPLofkffqWAwDNF"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomTransferRequest

try {
    $result = $apiInstance->postApiV1LivechatRoomTransfer($post_api_v1_livechat_room_transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatRoomTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_room_transfer_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomTransferRequest**](../Model/PostApiV1LivechatRoomTransferRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatRoomTransfer200Response**](../Model/PostApiV1LivechatRoomTransfer200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatUpload()`

```php
postApiV1LivechatUpload($x_visitor_token, $rid, $file, $description): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUpload200Response
```

Upload Files to Room

Upload files to a Livechat room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_visitor_token = iNKE8a6k6cjyPyOyI; // string | The visitor token
$rid = 'rid_example'; // string | The room ID.
$file = 'file_example'; // string | The file to be uploaded.
$description = 'description_example'; // string | The file description.

try {
    $result = $apiInstance->postApiV1LivechatUpload($x_visitor_token, $rid, $file, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->postApiV1LivechatUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_visitor_token** | **string**| The visitor token | |
| **rid** | **string**| The room ID. | |
| **file** | **string**| The file to be uploaded. | |
| **description** | **string**| The file description. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUpload200Response**](../Model/PostApiV1LivechatUpload200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatRoomVisitor()`

```php
putApiV1LivechatRoomVisitor($x_auth_token, $x_user_id, $put_api_v1_livechat_room_visitor_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitor200Response
```

Update Livechat Room Visitor

Update room visitor's information. Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatRoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$put_api_v1_livechat_room_visitor_request = {"rid":"tcbbSmWSLR5uo5PBW","oldVisitorId":"6425bb86c29657e5b3ba26b2","newVisitorId":"6523dc0ba2f73c7460e18d4d"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitorRequest

try {
    $result = $apiInstance->putApiV1LivechatRoomVisitor($x_auth_token, $x_user_id, $put_api_v1_livechat_room_visitor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatRoomsApi->putApiV1LivechatRoomVisitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **put_api_v1_livechat_room_visitor_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitorRequest**](../Model/PutApiV1LivechatRoomVisitorRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitor200Response**](../Model/PutApiV1LivechatRoomVisitor200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
