# WebMI\RocketChatApiClient\RoomsApi\RoomsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1AuditRoomsMembers()**](RoomsApi.md#getApiV1AuditRoomsMembers) | **GET** /api/v1/audit/rooms.members | Audit Rooms |
| [**getApiV1RoomsAdminRooms()**](RoomsApi.md#getApiV1RoomsAdminRooms) | **GET** /api/v1/rooms.adminRooms | Get All Room Admins |
| [**getApiV1RoomsAdminRoomsGetRoom()**](RoomsApi.md#getApiV1RoomsAdminRoomsGetRoom) | **GET** /api/v1/rooms.adminRooms.getRoom | Get Admin of Room |
| [**getApiV1RoomsAutocompleteAdminRooms()**](RoomsApi.md#getApiV1RoomsAutocompleteAdminRooms) | **GET** /api/v1/rooms.autocomplete.adminRooms | Admin Autocomplete Room Name for Private and Public Rooms |
| [**getApiV1RoomsAutocompleteAvailableForTeams()**](RoomsApi.md#getApiV1RoomsAutocompleteAvailableForTeams) | **GET** /api/v1/rooms.autocomplete.availableForTeams | Autocomplete Room Name for Team |
| [**getApiV1RoomsAutocompleteChannelAndPrivate()**](RoomsApi.md#getApiV1RoomsAutocompleteChannelAndPrivate) | **GET** /api/v1/rooms.autocomplete.channelAndPrivate | Autocomplete Room Name for Private and Public Rooms |
| [**getApiV1RoomsCleanHistory()**](RoomsApi.md#getApiV1RoomsCleanHistory) | **POST** /api/v1/rooms.cleanHistory | Clear Room History |
| [**getApiV1RoomsDelete()**](RoomsApi.md#getApiV1RoomsDelete) | **POST** /api/v1/rooms.delete | Delete Room |
| [**getApiV1RoomsGet()**](RoomsApi.md#getApiV1RoomsGet) | **GET** /api/v1/rooms.get | Get Rooms |
| [**getApiV1RoomsGetDiscussions()**](RoomsApi.md#getApiV1RoomsGetDiscussions) | **GET** /api/v1/rooms.getDiscussions | Get Room Discussions |
| [**getApiV1RoomsImages()**](RoomsApi.md#getApiV1RoomsImages) | **GET** /api/v1/rooms.images | Get Room Images |
| [**getApiV1RoomsInfo()**](RoomsApi.md#getApiV1RoomsInfo) | **GET** /api/v1/rooms.info | Get Room Information |
| [**getApiV1RoomsNameExists()**](RoomsApi.md#getApiV1RoomsNameExists) | **GET** /api/v1/rooms.nameExists | Check if Room Name Exists |
| [**getApiV1RoomsUploadRid()**](RoomsApi.md#getApiV1RoomsUploadRid) | **POST** /api/v1/rooms.upload/{rid} | Upload File to a Room |
| [**postApiV1RoomsAutocompleteChannelAndPrivate()**](RoomsApi.md#postApiV1RoomsAutocompleteChannelAndPrivate) | **POST** /api/v1/rooms.changeArchivationState | Change Room Archive State |
| [**postApiV1RoomsCreateDiscussion()**](RoomsApi.md#postApiV1RoomsCreateDiscussion) | **POST** /api/v1/rooms.createDiscussion | Create Discussion |
| [**postApiV1RoomsExport()**](RoomsApi.md#postApiV1RoomsExport) | **POST** /api/v1/rooms.export | Export Room |
| [**postApiV1RoomsFavorite()**](RoomsApi.md#postApiV1RoomsFavorite) | **POST** /api/v1/rooms.favorite | Favorite/Unfavourite a Room |
| [**postApiV1RoomsLeave()**](RoomsApi.md#postApiV1RoomsLeave) | **POST** /api/v1/rooms.leave | Leave Room |
| [**postApiV1RoomsMuteUser()**](RoomsApi.md#postApiV1RoomsMuteUser) | **POST** /api/v1/rooms.muteUser | Mute User in Room |
| [**postApiV1RoomsSaveNotification()**](RoomsApi.md#postApiV1RoomsSaveNotification) | **POST** /api/v1/rooms.saveNotification | Set Room Notifications |
| [**postApiV1RoomsSaveRoomSettings()**](RoomsApi.md#postApiV1RoomsSaveRoomSettings) | **POST** /api/v1/rooms.saveRoomSettings | Save Room Settings |
| [**postApiV1RoomsUnmuteUser()**](RoomsApi.md#postApiV1RoomsUnmuteUser) | **POST** /api/v1/rooms.unmuteUser | Unmute User in Room |


## `getApiV1AuditRoomsMembers()`

```php
getApiV1AuditRoomsMembers($x_auth_token, $x_user_id, $room_id, $filter, $count, $offset, $sort): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1AuditRoomsMembers200Response
```

Audit Rooms

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Enterprise\" style=\"display: block; margin: auto\"></div>  Audit any public or private room and view the room members. You don't need to be a member of the room.  Permission required: `view-members-list-all-rooms`  ### Changelog | Version | Description | | ------- | ----------- | | 6.12.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 66cd971f6fcbb8e8b3cf8e69; // string | Enter the room ID that you want to audit.
$filter = 'filter_example'; // string | Filter the results using the text that you want to view.
$count = 50; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1AuditRoomsMembers($x_auth_token, $x_user_id, $room_id, $filter, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1AuditRoomsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| Enter the room ID that you want to audit. | |
| **filter** | **string**| Filter the results using the text that you want to view. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1AuditRoomsMembers200Response**](../Model/GetApiV1AuditRoomsMembers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsAdminRooms()`

```php
getApiV1RoomsAdminRooms($x_auth_token, $x_user_id, $types, $filter, $count, $sort, $offset): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAdminRooms200Response
```

Get All Room Admins

Retrieves all rooms and admin information.  Permission required: `view-room-administration`  ### Changelog | Version | Description  | | ------- |--------------| | 2.4.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$types = array('types_example'); // string[] | The room types. The possible room types are:  - `d`: Direct messages  - `c`: Public channel  - `p`: Private channel  - `discussions`: Team or channel discussions  - `teams`: Workspace teams  - `l`: Livechat  - `v`: Omnichannel VoIP rooms
$filter = 'filter_example'; // string | The rooms name
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1RoomsAdminRooms($x_auth_token, $x_user_id, $types, $filter, $count, $sort, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAdminRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **types** | [**string[]**](../Model/string.md)| The room types. The possible room types are:  - &#x60;d&#x60;: Direct messages  - &#x60;c&#x60;: Public channel  - &#x60;p&#x60;: Private channel  - &#x60;discussions&#x60;: Team or channel discussions  - &#x60;teams&#x60;: Workspace teams  - &#x60;l&#x60;: Livechat  - &#x60;v&#x60;: Omnichannel VoIP rooms | [optional] |
| **filter** | **string**| The rooms name | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAdminRooms200Response**](../Model/GetApiV1RoomsAdminRooms200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsAdminRoomsGetRoom()`

```php
getApiV1RoomsAdminRoomsGetRoom($x_auth_token, $x_user_id, $rid): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAdminRoomsGetRoom200Response
```

Get Admin of Room

Retrieves the admin of a room.  Permission required: `view-room-administration`  ### Changelog | Version | Description     | | ------- | --------------- | | 2.4.0   | Added           |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = 654c9d1ca2f73c7460e1918b; // string | The room ID.

try {
    $result = $apiInstance->getApiV1RoomsAdminRoomsGetRoom($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAdminRoomsGetRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID. | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAdminRoomsGetRoom200Response**](../Model/GetApiV1RoomsAdminRoomsGetRoom200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsAutocompleteAdminRooms()`

```php
getApiV1RoomsAutocompleteAdminRooms($x_auth_token, $x_user_id, $selector): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response
```

Admin Autocomplete Room Name for Private and Public Rooms

List public and private rooms whose names match a given string, excluding <a href=\"https://docs.rocket.chat/docs/direct-messages\" target=\"_blank\">DMs</a>, and <a href=\"https://docs.rocket.chat/docs/omnichannel\" target=\"_blank\">omnichannel rooms</a>. This endpoint is valuable when performing search operations. Only workspace administrators can use it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$selector = {"name":"ran"}; // string | The term to be completed. It applies to room name and display name.

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteAdminRooms($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteAdminRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **selector** | **string**| The term to be completed. It applies to room name and display name. | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response**](../Model/GetApiV1RoomsAutocompleteAvailableForTeams200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsAutocompleteAvailableForTeams()`

```php
getApiV1RoomsAutocompleteAvailableForTeams($x_auth_token, $x_user_id, $name): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response
```

Autocomplete Room Name for Team

Autocompletes room name available for conversion to team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$name = data-loss-prevention; // string | The name of the room

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteAvailableForTeams($x_auth_token, $x_user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteAvailableForTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **name** | **string**| The name of the room | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response**](../Model/GetApiV1RoomsAutocompleteAvailableForTeams200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsAutocompleteChannelAndPrivate()`

```php
getApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $selector): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response
```

Autocomplete Room Name for Private and Public Rooms

List the public and private rooms whose names match a given string, excluding <a href=\"https://docs.rocket.chat/docs/discussions\" target=\"_blank\">discussions</a>, <a href=\"https://docs.rocket.chat/docs/direct-messages\" target=\"_blank\">DMs</a>, and <a href=\"https://docs.rocket.chat/docs/omnichannel\" target=\"_blank\">omnichannel rooms</a>. The endpoint is valuable when performing search operations. It returns only rooms that the user belongs to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$selector = {"name":"ran"}; // string | The term to be completed. It only applies to room name.

try {
    $result = $apiInstance->getApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsAutocompleteChannelAndPrivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **selector** | **string**| The term to be completed. It only applies to room name. | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsAutocompleteAvailableForTeams200Response**](../Model/GetApiV1RoomsAutocompleteAvailableForTeams200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsCleanHistory()`

```php
getApiV1RoomsCleanHistory($x_auth_token, $x_user_id, $get_api_v1_rooms_clean_history_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Clear Room History

Cleans up a room, removing messages from the provided time range.  ### Changelog | Version | Description            | | ------- | ---------------------- | | 0.64.0  | Added                  | | 0.67.0  | Added fields `limit`, `excludePinned`, `filesOnly` and `users` |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$get_api_v1_rooms_clean_history_request = {"roomId":"roomId","latest":"2016-12-09T13:42:25.304Z","oldest":"2016-08-30T13:42:25.304Z"}; // \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsCleanHistoryRequest

try {
    $result = $apiInstance->getApiV1RoomsCleanHistory($x_auth_token, $x_user_id, $get_api_v1_rooms_clean_history_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsCleanHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **get_api_v1_rooms_clean_history_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsCleanHistoryRequest**](../Model/GetApiV1RoomsCleanHistoryRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsDelete()`

```php
getApiV1RoomsDelete($x_auth_token, $x_user_id, $get_api_v1_rooms_delete_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Delete Room

Delete a room from the workspace.  ### Changelog | Version | Description   | | ------- | --------------| | 5.4.0   | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$get_api_v1_rooms_delete_request = new \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsDeleteRequest(); // \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsDeleteRequest

try {
    $result = $apiInstance->getApiV1RoomsDelete($x_auth_token, $x_user_id, $get_api_v1_rooms_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **get_api_v1_rooms_delete_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsDeleteRequest**](../Model/GetApiV1RoomsDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsGet()`

```php
getApiV1RoomsGet($x_auth_token, $x_user_id, $updated_since): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsGet200Response
```

Get Rooms

Get all opened rooms (all joined public & private channels and all DMs) of the authenticated user.  ### Changelog | Version | Description   | | ------- | --------------| | 0.72.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$updated_since = 2017-11-25T15:08:17.248Z; // string | A date as an ISO string. When you provide the `updatedSince` query parameter, then the update and remove in the response will contain only those updated and removed since the specified date and time.

try {
    $result = $apiInstance->getApiV1RoomsGet($x_auth_token, $x_user_id, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **updated_since** | **string**| A date as an ISO string. When you provide the &#x60;updatedSince&#x60; query parameter, then the update and remove in the response will contain only those updated and removed since the specified date and time. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsGet200Response**](../Model/GetApiV1RoomsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsGetDiscussions()`

```php
getApiV1RoomsGetDiscussions($x_auth_token, $x_user_id, $room_name, $room_id, $query, $count, $fields, $offset, $sort): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsGetDiscussions200Response
```

Get Room Discussions

Get all discussions of a room.   ### Changelog | Version | Description   | | ------- | --------------| | 1.0.0   | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$count = 50; // int | The number of items to return.
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1RoomsGetDiscussions($x_auth_token, $x_user_id, $room_name, $room_id, $query, $count, $fields, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsGetDiscussions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsGetDiscussions200Response**](../Model/GetApiV1RoomsGetDiscussions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsImages()`

```php
getApiV1RoomsImages($x_auth_token, $x_user_id, $room_id, $starting_from_id, $offset, $count): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsImages200Response
```

Get Room Images

Retrieves the images of a room that you are a member of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 654c9d1ca2f73c7460e1918b; // string | The room ID.
$starting_from_id = 666fdecb4ac1a8e6404ededd; // string | Filter images using the file ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1RoomsImages($x_auth_token, $x_user_id, $room_id, $starting_from_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |
| **starting_from_id** | **string**| Filter images using the file ID. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsImages200Response**](../Model/GetApiV1RoomsImages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsInfo()`

```php
getApiV1RoomsInfo($x_user_id, $x_auth_token, $room_id, $room_name, $fields): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsInfo200Response
```

Get Room Information

Retrieves the information about the room.  ### Changelog | Version | Description | | ------- | ----------- | |0.72.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1RoomsInfo($x_user_id, $x_auth_token, $room_id, $room_name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsInfo200Response**](../Model/GetApiV1RoomsInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsNameExists()`

```php
getApiV1RoomsNameExists($x_auth_token, $x_user_id, $room_name): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsNameExists200Response
```

Check if Room Name Exists

Check if the room name exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_name = test-room; // string | Enter the room name that you want to check.

try {
    $result = $apiInstance->getApiV1RoomsNameExists($x_auth_token, $x_user_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsNameExists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_name** | **string**| Enter the room name that you want to check. | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsNameExists200Response**](../Model/GetApiV1RoomsNameExists200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RoomsUploadRid()`

```php
getApiV1RoomsUploadRid($x_auth_token, $x_user_id, $rid, $file, $msg, $description, $tmid, $custom_fields): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsUploadRid200Response
```

Upload File to a Room

Post a message with the attached file to a dedicated room. ### Changelog | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Allow custom fields in messages      |  | 1.0.0   | Return Message object on file upload | | 0.62.0  | Added                                |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = ByehQjC44FwMeiLbX; // string | The room ID to which you want to upload the file.
$file = "/path/to/file.txt"; // \SplFileObject | The file to upload
$msg = 'msg_example'; // string | A message text to be sent with the file.
$description = 'description_example'; // string | A description of the file.
$tmid = 'tmid_example'; // string | The thread message ID (if you want to upload a file to a thread).
$custom_fields = array('key' => new \stdClass); // object | You can add custom fields for messages. For example, set priorities for messages.  You must enable this option and define the validation in the workspace settings. See the <a href=\\\"https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/message\\\" target=\\\"_blank\\\">Message</a> for further information.

try {
    $result = $apiInstance->getApiV1RoomsUploadRid($x_auth_token, $x_user_id, $rid, $file, $msg, $description, $tmid, $custom_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getApiV1RoomsUploadRid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID to which you want to upload the file. | |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload | |
| **msg** | **string**| A message text to be sent with the file. | [optional] |
| **description** | **string**| A description of the file. | [optional] |
| **tmid** | **string**| The thread message ID (if you want to upload a file to a thread). | [optional] |
| **custom_fields** | [**object**](../Model/object.md)| You can add custom fields for messages. For example, set priorities for messages.  You must enable this option and define the validation in the workspace settings. See the &lt;a href&#x3D;\\\&quot;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/message\\\&quot; target&#x3D;\\\&quot;_blank\\\&quot;&gt;Message&lt;/a&gt; for further information. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1RoomsUploadRid200Response**](../Model/GetApiV1RoomsUploadRid200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsAutocompleteChannelAndPrivate()`

```php
postApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $post_api_v1_rooms_autocomplete_channel_and_private_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Change Room Archive State

Change archive state of a room.  ### Changelog | Version | Description      | | ------- | ---------------- | | 3.3.0  | Added             |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_autocomplete_channel_and_private_request = {"rid":"iu7jtPAhvEeAS5tNq","action":"archive"}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsAutocompleteChannelAndPrivateRequest

try {
    $result = $apiInstance->postApiV1RoomsAutocompleteChannelAndPrivate($x_auth_token, $x_user_id, $post_api_v1_rooms_autocomplete_channel_and_private_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsAutocompleteChannelAndPrivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_autocomplete_channel_and_private_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsAutocompleteChannelAndPrivateRequest**](../Model/PostApiV1RoomsAutocompleteChannelAndPrivateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsCreateDiscussion()`

```php
postApiV1RoomsCreateDiscussion($x_auth_token, $x_user_id, $post_api_v1_rooms_create_discussion_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsCreateDiscussion200Response
```

Create Discussion

Creates a new discussion for the room. It requires at least one of the following permissions: `start-discussion` OR `start-discussion-other-user`, AND must be with the following setting enabled: `Discussion_enabled`.  ### Changelog | Version | Description | | ------- | ----------- | | 1.0.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_create_discussion_request = {"prid":"GENERAL","t_name":"Discussion Name"}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsCreateDiscussionRequest

try {
    $result = $apiInstance->postApiV1RoomsCreateDiscussion($x_auth_token, $x_user_id, $post_api_v1_rooms_create_discussion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsCreateDiscussion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_create_discussion_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsCreateDiscussionRequest**](../Model/PostApiV1RoomsCreateDiscussionRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsCreateDiscussion200Response**](../Model/PostApiV1RoomsCreateDiscussion200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsExport()`

```php
postApiV1RoomsExport($x_auth_token, $x_user_id, $post_api_v1_rooms_export_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Export Room

Export room to a file or email.   Permission required: `mail-messages`  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 3.8.0   | Added                                |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_export_request = {"rid":"iu7jtPAhvEeAS5tNq","type":"file","dateFrom":"2000-01-01","dateTo":"2021-11-25","format":"html","toUsers":["test.user"],"toEmails":["test@test.com"],"messages":["yd6NBgNoiWATgDoFt","BoCjicj9DdYoMHHeo","tajMB3aX3sawFWe8W"],"subject":"Test Subject "}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsExportRequest

try {
    $result = $apiInstance->postApiV1RoomsExport($x_auth_token, $x_user_id, $post_api_v1_rooms_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_export_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsExportRequest**](../Model/PostApiV1RoomsExportRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsFavorite()`

```php
postApiV1RoomsFavorite($x_auth_token, $x_user_id, $post_api_v1_rooms_favorite_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Favorite/Unfavourite a Room

Mark/Unmark a Room as favourite  ### Changelog | Version | Description   | | ------- | --------------| | 0.64.0   | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_favorite_request = {"roomId":"GENERAL","favorite":true}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsFavoriteRequest

try {
    $result = $apiInstance->postApiV1RoomsFavorite($x_auth_token, $x_user_id, $post_api_v1_rooms_favorite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsFavorite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_favorite_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsFavoriteRequest**](../Model/PostApiV1RoomsFavoriteRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsLeave()`

```php
postApiV1RoomsLeave($x_auth_token, $x_user_id, $post_api_v1_rooms_leave_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Leave Room

Leave a room.  ### Changelog | Version | Description   | | ------- | --------------| | 0.72.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_leave_request = new \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsLeaveRequest(); // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsLeaveRequest

try {
    $result = $apiInstance->postApiV1RoomsLeave($x_auth_token, $x_user_id, $post_api_v1_rooms_leave_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_leave_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsLeaveRequest**](../Model/PostApiV1RoomsLeaveRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsMuteUser()`

```php
postApiV1RoomsMuteUser($x_auth_token, $x_user_id, $post_api_v1_rooms_mute_user_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Mute User in Room

Mute a particular user in a room.  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Added                                |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_mute_user_request = new \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsMuteUserRequest(); // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsMuteUserRequest

try {
    $result = $apiInstance->postApiV1RoomsMuteUser($x_auth_token, $x_user_id, $post_api_v1_rooms_mute_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsMuteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_mute_user_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsMuteUserRequest**](../Model/PostApiV1RoomsMuteUserRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsSaveNotification()`

```php
postApiV1RoomsSaveNotification($x_auth_token, $x_user_id, $post_api_v1_rooms_save_notification_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Set Room Notifications

Set the notifications settings of a specific room.  ### Changelog | Version | Description | | ------- | ----------- | |0.63.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_save_notification_request = {"roomId":"5of4weEXaH7yncxz9","notifications":{"desktopNotifications":"all","disableNotifications":0,"emailNotifications":"nothing","audioNotificationValue":"beep","desktopNotificationDuration":"2","audioNotifications":"all","unreadAlert":"nothing","hideUnreadStatus":0,"mobilePushNotifications":"mentions"}}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveNotificationRequest

try {
    $result = $apiInstance->postApiV1RoomsSaveNotification($x_auth_token, $x_user_id, $post_api_v1_rooms_save_notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsSaveNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_save_notification_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveNotificationRequest**](../Model/PostApiV1RoomsSaveNotificationRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsSaveRoomSettings()`

```php
postApiV1RoomsSaveRoomSettings($x_auth_token, $x_user_id, $post_api_v1_rooms_save_room_settings_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveRoomSettings200Response
```

Save Room Settings

### Changelog | Version | Description | | ------- | ------------| | 3.13.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_save_room_settings_request = {"rid":"JZ8Y2dLfYhsg323Rf","roomName":"Test-Save-Room","roomDescription":"This is a test room."}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveRoomSettingsRequest

try {
    $result = $apiInstance->postApiV1RoomsSaveRoomSettings($x_auth_token, $x_user_id, $post_api_v1_rooms_save_room_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsSaveRoomSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_save_room_settings_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveRoomSettingsRequest**](../Model/PostApiV1RoomsSaveRoomSettingsRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveRoomSettings200Response**](../Model/PostApiV1RoomsSaveRoomSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RoomsUnmuteUser()`

```php
postApiV1RoomsUnmuteUser($x_auth_token, $x_user_id, $post_api_v1_rooms_unmute_user_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Unmute User in Room

Unmute a particular user in a room.  ### Changelog  | Version | Description                          | | ------- | ------------------------------------ | | 6.8.0   | Added                                |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_rooms_unmute_user_request = new \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsUnmuteUserRequest(); // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsUnmuteUserRequest

try {
    $result = $apiInstance->postApiV1RoomsUnmuteUser($x_auth_token, $x_user_id, $post_api_v1_rooms_unmute_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->postApiV1RoomsUnmuteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_rooms_unmute_user_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsUnmuteUserRequest**](../Model/PostApiV1RoomsUnmuteUserRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
