# RocketChatRoomsApi\GroupsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1GroupsCounters()**](GroupsApi.md#getApiV1GroupsCounters) | **GET** /api/v1/groups.counters | Get Group Counters |
| [**getApiV1GroupsFiles()**](GroupsApi.md#getApiV1GroupsFiles) | **GET** /api/v1/groups.files | Get Group Files |
| [**getApiV1GroupsGetIntegrations()**](GroupsApi.md#getApiV1GroupsGetIntegrations) | **GET** /api/v1/groups.getIntegrations | Get Group Integrations |
| [**getApiV1GroupsHistory()**](GroupsApi.md#getApiV1GroupsHistory) | **GET** /api/v1/groups.history | Get Group History |
| [**getApiV1GroupsInfo()**](GroupsApi.md#getApiV1GroupsInfo) | **GET** /api/v1/groups.info | Get Group Information |
| [**getApiV1GroupsList()**](GroupsApi.md#getApiV1GroupsList) | **GET** /api/v1/groups.list | Get Groups |
| [**getApiV1GroupsListAll()**](GroupsApi.md#getApiV1GroupsListAll) | **GET** /api/v1/groups.listAll | Get List of User Groups |
| [**getApiV1GroupsMembers()**](GroupsApi.md#getApiV1GroupsMembers) | **GET** /api/v1/groups.members | List Group Members |
| [**getApiV1GroupsMessages()**](GroupsApi.md#getApiV1GroupsMessages) | **GET** /api/v1/groups.messages | Get Group Messages |
| [**getApiV1GroupsModerators()**](GroupsApi.md#getApiV1GroupsModerators) | **GET** /api/v1/groups.moderators | Get Group Moderators |
| [**getApiV1GroupsOnline()**](GroupsApi.md#getApiV1GroupsOnline) | **GET** /api/v1/groups.online | Get Group Online Users |
| [**getApiV1GroupsRoles()**](GroupsApi.md#getApiV1GroupsRoles) | **GET** /api/v1/groups.roles | List Group Roles |
| [**getGroupsMembersByHighestRole()**](GroupsApi.md#getGroupsMembersByHighestRole) | **GET** /groups.membersByHighestRole | Group Members By Highest Role |
| [**postApiV1GroupsAddAll()**](GroupsApi.md#postApiV1GroupsAddAll) | **POST** /api/v1/groups.addAll | Add All Users to Group |
| [**postApiV1GroupsAddLeader()**](GroupsApi.md#postApiV1GroupsAddLeader) | **POST** /api/v1/groups.addLeader | Add Group Leader |
| [**postApiV1GroupsAddModerator()**](GroupsApi.md#postApiV1GroupsAddModerator) | **POST** /api/v1/groups.addModerator | Add Group Moderator |
| [**postApiV1GroupsAddOwner()**](GroupsApi.md#postApiV1GroupsAddOwner) | **POST** /api/v1/groups.addOwner | Add Group Owner |
| [**postApiV1GroupsArchive()**](GroupsApi.md#postApiV1GroupsArchive) | **POST** /api/v1/groups.archive | Archive a Group |
| [**postApiV1GroupsClose()**](GroupsApi.md#postApiV1GroupsClose) | **POST** /api/v1/groups.close | Close Group |
| [**postApiV1GroupsConvertToTeam()**](GroupsApi.md#postApiV1GroupsConvertToTeam) | **POST** /api/v1/groups.convertToTeam | Convert a Group to Team |
| [**postApiV1GroupsCreate()**](GroupsApi.md#postApiV1GroupsCreate) | **POST** /api/v1/groups.create | Create Group |
| [**postApiV1GroupsDelete()**](GroupsApi.md#postApiV1GroupsDelete) | **POST** /api/v1/groups.delete | Delete Group |
| [**postApiV1GroupsInvite()**](GroupsApi.md#postApiV1GroupsInvite) | **POST** /api/v1/groups.invite | Invite Users to Group |
| [**postApiV1GroupsKick()**](GroupsApi.md#postApiV1GroupsKick) | **POST** /api/v1/groups.kick | Remove User from Group |
| [**postApiV1GroupsOpen()**](GroupsApi.md#postApiV1GroupsOpen) | **POST** /api/v1/groups.open | Add Group to List |
| [**postApiV1GroupsRemoveLeader()**](GroupsApi.md#postApiV1GroupsRemoveLeader) | **POST** /api/v1/groups.removeLeader | Remove Group Leader |
| [**postApiV1GroupsRemoveModerator()**](GroupsApi.md#postApiV1GroupsRemoveModerator) | **POST** /api/v1/groups.removeModerator | Remove Group Moderator |
| [**postApiV1GroupsRemoveOwner()**](GroupsApi.md#postApiV1GroupsRemoveOwner) | **POST** /api/v1/groups.removeOwner | Remove Group Owner |
| [**postApiV1GroupsRename()**](GroupsApi.md#postApiV1GroupsRename) | **POST** /api/v1/groups.rename | Rename Group |
| [**postApiV1GroupsSetAnnouncement()**](GroupsApi.md#postApiV1GroupsSetAnnouncement) | **POST** /api/v1/groups.setAnnouncement | Set Group Announcement |
| [**postApiV1GroupsSetCustomFields()**](GroupsApi.md#postApiV1GroupsSetCustomFields) | **POST** /api/v1/groups.setCustomFields | Sets Group Custom Fields |
| [**postApiV1GroupsSetDescription()**](GroupsApi.md#postApiV1GroupsSetDescription) | **POST** /api/v1/groups.setDescription | Set Group Description |
| [**postApiV1GroupsSetEncrypted()**](GroupsApi.md#postApiV1GroupsSetEncrypted) | **POST** /api/v1/groups.setEncrypted | Set Group as Encrypted |
| [**postApiV1GroupsSetPurpose()**](GroupsApi.md#postApiV1GroupsSetPurpose) | **POST** /api/v1/groups.setPurpose | Set Group Purpose |
| [**postApiV1GroupsSetReadOnly()**](GroupsApi.md#postApiV1GroupsSetReadOnly) | **POST** /api/v1/groups.setReadOnly | Set Group as Read Only |
| [**postApiV1GroupsSetTopic()**](GroupsApi.md#postApiV1GroupsSetTopic) | **POST** /api/v1/groups.setTopic | Set Group Topic |
| [**postApiV1GroupsSetType()**](GroupsApi.md#postApiV1GroupsSetType) | **POST** /api/v1/groups.setType | Set Group Type |
| [**postApiV1GroupsUnarchive()**](GroupsApi.md#postApiV1GroupsUnarchive) | **POST** /api/v1/groups.unarchive | Unarchive Group |
| [**postGroupsLeave()**](GroupsApi.md#postGroupsLeave) | **POST** /api/v1/groups.leave | Leave Group |


## `getApiV1GroupsCounters()`

```php
getApiV1GroupsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id): \RocketChatRoomsApi\Model\GetApiV1ChannelsCounters200Response
```

Get Group Counters

Get group counters for the authenticated user.   Permission required: `view-room-administration`  ### Changelog | Version | Description | | ------- | ----------- | | 0.65.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$user_id = 'user_id_example'; // string | Counters for provided user ID (need to have a view-room-administration right for calling user).

try {
    $result = $apiInstance->getApiV1GroupsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsCounters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **user_id** | **string**| Counters for provided user ID (need to have a view-room-administration right for calling user). | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1ChannelsCounters200Response**](../Model/GetApiV1ChannelsCounters200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsFiles()`

```php
getApiV1GroupsFiles($x_auth_token, $x_user_id, $room_name, $room_id, $offset, $count, $sort, $query, $fields): \RocketChatRoomsApi\Model\GetApiV1GroupsFiles200Response
```

Get Group Files

Get all files in a group.    ### Changelog | Version | Description | | ------- | ----------- | | 0.64.0  | Change userId to user object in response       | | 0.59.0  | Added                                          |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1GroupsFiles($x_auth_token, $x_user_id, $room_name, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsFiles200Response**](../Model/GetApiV1GroupsFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsGetIntegrations()`

```php
getApiV1GroupsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields): \RocketChatRoomsApi\Model\GetApiV1GroupsGetIntegrations200Response
```

Get Group Integrations

Retrieves the integrations that the group/channel has. At least one of the following integration permissions is required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`  It will return the integrations based on the user's permission.  ### Changelog | Version | Description | | ------- | ----------- | | 1.1.0  | Separate permissions in incoming and outgoing. | | 0.49.0 | Added                                          |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = jdiue8TGkodp; // string | The room id.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1GroupsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsGetIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsGetIntegrations200Response**](../Model/GetApiV1GroupsGetIntegrations200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsHistory()`

```php
getApiV1GroupsHistory($x_auth_token, $x_user_id, $room_id, $latest, $oldest, $inclusive, $unreads, $offset, $count): \RocketChatRoomsApi\Model\GetApiV1GroupsHistory200Response
```

Get Group History

Retrieves the messages from a group/channel you belong to.  ### Changelog | Version | Description             | | ------- | ----------------------- | | 0.75.0  | Added `offset` property | | 0.48.0  | Added                   |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = jdiue8TGkodp; // string | The room id.
$latest = 2016-09-30T13:42:25.304Z; // string | The end of time range of messages to retrieve. The default value is the current date and time.
$oldest = 2016-05-30T13:42:25.304Z; // string | The start of the time range of messages to retrieve
$inclusive = true; // bool | Whether messages which land on latest and oldest should be included. The default value is false.
$unreads = false; // bool | Whether the amount of unreads should be included. The default value is false.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1GroupsHistory($x_auth_token, $x_user_id, $room_id, $latest, $oldest, $inclusive, $unreads, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. | |
| **latest** | **string**| The end of time range of messages to retrieve. The default value is the current date and time. | [optional] |
| **oldest** | **string**| The start of the time range of messages to retrieve | [optional] |
| **inclusive** | **bool**| Whether messages which land on latest and oldest should be included. The default value is false. | [optional] |
| **unreads** | **bool**| Whether the amount of unreads should be included. The default value is false. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsHistory200Response**](../Model/GetApiV1GroupsHistory200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsInfo()`

```php
getApiV1GroupsInfo($x_user_id, $x_auth_token, $room_id, $room_name): \RocketChatRoomsApi\Model\GetApiV1GroupsInfo200Response
```

Get Group Information

Retrieves the information about a private group you belong to.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1GroupsInfo($x_user_id, $x_auth_token, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsInfo200Response**](../Model/GetApiV1GroupsInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsList()`

```php
getApiV1GroupsList($x_auth_token, $x_user_id, $offset, $count, $sort): \RocketChatRoomsApi\Model\GetApiV1GroupsList200Response
```

Get Groups

Lists all of the groups/channels the user has joined.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.67.0  | Removed `query` parameter support.           | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.33.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1GroupsList($x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsList200Response**](../Model/GetApiV1GroupsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsListAll()`

```php
getApiV1GroupsListAll($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields): \RocketChatRoomsApi\Model\GetApiV1GroupsListAll200Response
```

Get List of User Groups

Lists all of the groups/channels of any users.  Permission required: `view-room-administration`  ### Changelog | Version | Description                    | | ------- | ------------------------------ | | 0.62.0  | Add 'query' parameter support. | | 0.59.0  | Added                          |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1GroupsListAll($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsListAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsListAll200Response**](../Model/GetApiV1GroupsListAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsMembers()`

```php
getApiV1GroupsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $status, $filter): \RocketChatRoomsApi\Model\GetApiV1GroupsMembers200Response
```

List Group Members

Lists the members of a private group.   Permission required if the room is broadcast.: `view-broadcast-member-list`  ### Changelog | Version | Description | | ------- | ----------- | | 0.59.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$status = ["online", "away"]; // string[] | The user's status (search filter).
$filter = 'filter_example'; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields` setting.

try {
    $result = $apiInstance->getApiV1GroupsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $status, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **status** | [**string[]**](../Model/string.md)| The user&#39;s status (search filter). | [optional] |
| **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60; setting. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsMembers200Response**](../Model/GetApiV1GroupsMembers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsMessages()`

```php
getApiV1GroupsMessages($x_auth_token, $x_user_id, $room_id, $room_name, $fields, $query, $sort, $offset, $count): \RocketChatRoomsApi\Model\GetApiV1GroupsMessages200Response
```

Get Group Messages

Lists all of the specific groups/channels messages on the workspace.   ### Changelog | Version | Description | | ------- | ----------- | | 0.59.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1GroupsMessages($x_auth_token, $x_user_id, $room_id, $room_name, $fields, $query, $sort, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsMessages200Response**](../Model/GetApiV1GroupsMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsModerators()`

```php
getApiV1GroupsModerators($x_auth_token, $x_user_id, $room_id, $room_name): \RocketChatRoomsApi\Model\GetApiV1GroupsModerators200Response
```

Get Group Moderators

Lists all group moderators.  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1GroupsModerators($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsModerators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsModerators200Response**](../Model/GetApiV1GroupsModerators200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsOnline()`

```php
getApiV1GroupsOnline($x_auth_token, $x_user_id, $query): \RocketChatRoomsApi\Model\GetApiV1ChannelsOnline200Response
```

Get Group Online Users

Lists all online users of a group if the group's id is provided, otherwise it gets all online users of all groups. ### Changelog | Version | Description | | ------- | ----------- | | 0.52.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }

try {
    $result = $apiInstance->getApiV1GroupsOnline($x_auth_token, $x_user_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsOnline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1ChannelsOnline200Response**](../Model/GetApiV1ChannelsOnline200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GroupsRoles()`

```php
getApiV1GroupsRoles($x_auth_token, $x_user_id): \RocketChatRoomsApi\Model\GetApiV1GroupsRoles200Response
```

List Group Roles

List all the roles of users in the group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.65.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1GroupsRoles($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getApiV1GroupsRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1GroupsRoles200Response**](../Model/GetApiV1GroupsRoles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupsMembersByHighestRole()`

```php
getGroupsMembersByHighestRole($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $room_name, $status, $filter): \RocketChatRoomsApi\Model\GetChannelsMembersByHighestRole200Response
```

Group Members By Highest Role

Lists the participants of a group/channel sorted by their room-scoped roles.  Room members are sorted by their most important role in the room. The following hierarchy is used: **Owner > Moderator > Other roles**. The information related to each user's highest role is returned in the `highestRole` object within each of them.  The `highestRole` object contains a numeric `level` field, which ranges from 0 to 2 * Level 0 stands for room owners. * Level 1 is assigned to moderators (who are not room owners). * Level 2 is assigned to all other team members regardless of their room-scoped roles.  The `highestRole` object also contains a `role` field, which has three possible values: `owner`, `moderator` or `member`, which are assigned to levels 0, 1, and 2, respectively.  Requires `view-broadcast-member-list` if the room is a broadcast.  ### Changelog | Version | Description | | ------- | ----------- | | 6.5.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$status = ["online", "away"]; // string[] | The user's status (search filter).
$filter = 'filter_example'; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields` setting.

try {
    $result = $apiInstance->getGroupsMembersByHighestRole($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $room_name, $status, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupsMembersByHighestRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **status** | [**string[]**](../Model/string.md)| The user&#39;s status (search filter). | [optional] |
| **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60; setting. | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetChannelsMembersByHighestRole200Response**](../Model/GetChannelsMembersByHighestRole200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsAddAll()`

```php
postApiV1GroupsAddAll($x_auth_token, $x_user_id, $post_api_v1_groups_add_all_request): \RocketChatRoomsApi\Model\PostApiV1GroupsAddAll200Response
```

Add All Users to Group

Adds all of the users of the Rocket.Chat workspace to the group/channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.55.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_add_all_request = {"roomId":"ByehQjC44FwMeiLbX","activeUsersOnly":"true"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsAddAllRequest

try {
    $result = $apiInstance->postApiV1GroupsAddAll($x_auth_token, $x_user_id, $post_api_v1_groups_add_all_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_add_all_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsAddAllRequest**](../Model/PostApiV1GroupsAddAllRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsAddAll200Response**](../Model/PostApiV1GroupsAddAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsAddLeader()`

```php
postApiV1GroupsAddLeader($x_auth_token, $x_user_id, $post_api_v1_groups_add_leader_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Group Leader

Assign the `leader` role to a user in a group.   Permission required:  `set-leader`   ### Changelog | Version | Description | | ------- | ----------- | | 0.58.0  | Added.      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_add_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsAddLeaderRequest

try {
    $result = $apiInstance->postApiV1GroupsAddLeader($x_auth_token, $x_user_id, $post_api_v1_groups_add_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddLeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_add_leader_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsAddLeaderRequest**](../Model/PostApiV1GroupsAddLeaderRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsAddModerator()`

```php
postApiV1GroupsAddModerator($x_auth_token, $x_user_id, $post_api_v1_groups_add_leader_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Group Moderator

Assign the `moderator` role to a user in a group.  Permission required: `set-moderator`  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.4  | Added.      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_add_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"nSYqWzZ4GsKTX4dyK"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsAddLeaderRequest

try {
    $result = $apiInstance->postApiV1GroupsAddModerator($x_auth_token, $x_user_id, $post_api_v1_groups_add_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_add_leader_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsAddLeaderRequest**](../Model/PostApiV1GroupsAddLeaderRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsAddOwner()`

```php
postApiV1GroupsAddOwner($x_auth_token, $x_user_id, $post_api_v1_groups_add_owner_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Group Owner

Assign `owner` role for a user in the current group. ### Changelog | Version | Description | | ------- | ----------- | | 0.49.4  | Added.      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_add_owner_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"nSYqWzZ4GsKTX4dyK"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsAddOwnerRequest

try {
    $result = $apiInstance->postApiV1GroupsAddOwner($x_auth_token, $x_user_id, $post_api_v1_groups_add_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsAddOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_add_owner_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsAddOwnerRequest**](../Model/PostApiV1GroupsAddOwnerRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsArchive()`

```php
postApiV1GroupsArchive($x_auth_token, $x_user_id, $post_api_v1_groups_archive_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Archive a Group

Archive a group you belong to.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_archive_request = new \RocketChatRoomsApi\Model\PostApiV1GroupsArchiveRequest(); // \RocketChatRoomsApi\Model\PostApiV1GroupsArchiveRequest | 

try {
    $result = $apiInstance->postApiV1GroupsArchive($x_auth_token, $x_user_id, $post_api_v1_groups_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_archive_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsArchiveRequest**](../Model/PostApiV1GroupsArchiveRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsClose()`

```php
postApiV1GroupsClose($x_auth_token, $x_user_id, $post_api_v1_groups_close_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Close Group

Removes the group/channel from the user's list of groups, only if you're part of the group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_close_request = new \RocketChatRoomsApi\Model\PostApiV1GroupsCloseRequest(); // \RocketChatRoomsApi\Model\PostApiV1GroupsCloseRequest | 

try {
    $result = $apiInstance->postApiV1GroupsClose($x_auth_token, $x_user_id, $post_api_v1_groups_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_close_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsCloseRequest**](../Model/PostApiV1GroupsCloseRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsConvertToTeam()`

```php
postApiV1GroupsConvertToTeam($x_auth_token, $x_user_id, $post_api_v1_teams_delete_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response
```

Convert a Group to Team

Convert a group to a team.  ### Changelog | Version | Description | | ------- | ----------- | | 3.13.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_delete_request = new \RocketChatRoomsApi\Model\PostApiV1TeamsDeleteRequest(); // \RocketChatRoomsApi\Model\PostApiV1TeamsDeleteRequest

try {
    $result = $apiInstance->postApiV1GroupsConvertToTeam($x_auth_token, $x_user_id, $post_api_v1_teams_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsConvertToTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_delete_request** | [**\RocketChatRoomsApi\Model\PostApiV1TeamsDeleteRequest**](../Model/PostApiV1TeamsDeleteRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response**](../Model/PostApiV1ChannelsConvertToTeam200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsCreate()`

```php
postApiV1GroupsCreate($x_auth_token, $x_user_id, $post_api_v1_groups_create_request): \RocketChatRoomsApi\Model\PostApiV1GroupsCreate200Response
```

Create Group

Creates a new group/channel, optionally including specified users. The group creator is always included.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 6.4.1   | Added `excludeSelf` param | | 0.35.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_create_request = {"name":"groupname","members":["rocket.cat"],"readOnly":true,"excludeSelf":true,"customFields":{"type":"default"},"extraData":{"broadcast":true,"encrypted":false,"teamId":"658441562dd9f928ad9951aa"}}; // \RocketChatRoomsApi\Model\PostApiV1GroupsCreateRequest

try {
    $result = $apiInstance->postApiV1GroupsCreate($x_auth_token, $x_user_id, $post_api_v1_groups_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_create_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsCreateRequest**](../Model/PostApiV1GroupsCreateRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsCreate200Response**](../Model/PostApiV1GroupsCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsDelete()`

```php
postApiV1GroupsDelete($x_auth_token, $x_user_id, $post_api_v1_channels_delete_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Delete Group

Delete a private group.  ### Changelog | Version | Description              | | ------- | ------------------------ | | 0.71.0  | Removed `group` property | | 0.49.0  | Added                    |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_delete_request = new \RocketChatRoomsApi\Model\PostApiV1ChannelsDeleteRequest(); // \RocketChatRoomsApi\Model\PostApiV1ChannelsDeleteRequest | 

try {
    $result = $apiInstance->postApiV1GroupsDelete($x_auth_token, $x_user_id, $post_api_v1_channels_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_delete_request** | [**\RocketChatRoomsApi\Model\PostApiV1ChannelsDeleteRequest**](../Model/PostApiV1ChannelsDeleteRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsInvite()`

```php
postApiV1GroupsInvite($x_auth_token, $x_user_id, $post_api_v1_groups_invite_request): \RocketChatRoomsApi\Model\PostApiV1GroupsInvite200Response
```

Invite Users to Group

Invite one user or bulk users to the group/channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_invite_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"nSYqWzZ4GsKTX4dyK"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsInviteRequest

try {
    $result = $apiInstance->postApiV1GroupsInvite($x_auth_token, $x_user_id, $post_api_v1_groups_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_invite_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsInviteRequest**](../Model/PostApiV1GroupsInviteRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsInvite200Response**](../Model/PostApiV1GroupsInvite200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsKick()`

```php
postApiV1GroupsKick($x_auth_token, $x_user_id, $post_api_v1_groups_add_owner_request): \RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response
```

Remove User from Group

Remove a user from the group/channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_add_owner_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"nSYqWzZ4GsKTX4dyK"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsAddOwnerRequest

try {
    $result = $apiInstance->postApiV1GroupsKick($x_auth_token, $x_user_id, $post_api_v1_groups_add_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsKick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_add_owner_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsAddOwnerRequest**](../Model/PostApiV1GroupsAddOwnerRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response**](../Model/PostApiV1GroupsKick200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsOpen()`

```php
postApiV1GroupsOpen($x_auth_token, $x_user_id, $post_api_v1_groups_open_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Group to List

Adds the group/channel back to the user's list of groups.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_open_request = new \RocketChatRoomsApi\Model\PostApiV1GroupsOpenRequest(); // \RocketChatRoomsApi\Model\PostApiV1GroupsOpenRequest

try {
    $result = $apiInstance->postApiV1GroupsOpen($x_auth_token, $x_user_id, $post_api_v1_groups_open_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_open_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsOpenRequest**](../Model/PostApiV1GroupsOpenRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsRemoveLeader()`

```php
postApiV1GroupsRemoveLeader($x_auth_token, $x_user_id, $post_api_v1_groups_remove_leader_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Group Leader

Remove the `leader` role from a user in a group.   Permission required: `set-leader`   ### Changelog  | Version | Description | | ------- | ----------- | | 0.58.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_remove_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsRemoveLeaderRequest

try {
    $result = $apiInstance->postApiV1GroupsRemoveLeader($x_auth_token, $x_user_id, $post_api_v1_groups_remove_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveLeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_remove_leader_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsRemoveLeaderRequest**](../Model/PostApiV1GroupsRemoveLeaderRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsRemoveModerator()`

```php
postApiV1GroupsRemoveModerator($x_auth_token, $x_user_id, $post_api_v1_groups_remove_moderator_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Group Moderator

Remove the `moderator` role from a user in a group.   Permission required: `set-moderator`  ### Changelog  | Version | Description | | ------- | ----------- | | 0.49.4  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_remove_moderator_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsRemoveModeratorRequest

try {
    $result = $apiInstance->postApiV1GroupsRemoveModerator($x_auth_token, $x_user_id, $post_api_v1_groups_remove_moderator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_remove_moderator_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsRemoveModeratorRequest**](../Model/PostApiV1GroupsRemoveModeratorRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsRemoveOwner()`

```php
postApiV1GroupsRemoveOwner($x_auth_token, $x_user_id, $post_api_v1_groups_remove_owner_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Group Owner

Remove the `owner` role from a user in a group.   Permission required: `set-owner`   ### Changelog  | Version | Description | | ------- | ----------- | | 0.49.4  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_remove_owner_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsRemoveOwnerRequest

try {
    $result = $apiInstance->postApiV1GroupsRemoveOwner($x_auth_token, $x_user_id, $post_api_v1_groups_remove_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRemoveOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_remove_owner_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsRemoveOwnerRequest**](../Model/PostApiV1GroupsRemoveOwnerRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsRename()`

```php
postApiV1GroupsRename($x_auth_token, $x_user_id, $post_api_v1_groups_rename_request): \RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response
```

Rename Group

Update the name of the private group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_rename_request = {"roomId":"ByehQjC44FwMeiLbX","name":"new-name"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsRenameRequest

try {
    $result = $apiInstance->postApiV1GroupsRename($x_auth_token, $x_user_id, $post_api_v1_groups_rename_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_rename_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsRenameRequest**](../Model/PostApiV1GroupsRenameRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response**](../Model/PostApiV1GroupsKick200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetAnnouncement()`

```php
postApiV1GroupsSetAnnouncement($x_auth_token, $x_user_id, $post_api_v1_groups_set_announcement_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsSetAnnouncement200Response
```

Set Group Announcement

Set the group announcement.  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_announcement_request = {"roomId":"ByehQjC44FwMeiLbX","announcement":"Test out everything"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetAnnouncementRequest

try {
    $result = $apiInstance->postApiV1GroupsSetAnnouncement($x_auth_token, $x_user_id, $post_api_v1_groups_set_announcement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetAnnouncement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_announcement_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetAnnouncementRequest**](../Model/PostApiV1GroupsSetAnnouncementRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsSetAnnouncement200Response**](../Model/PostApiV1ChannelsSetAnnouncement200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetCustomFields()`

```php
postApiV1GroupsSetCustomFields($x_auth_token, $x_user_id, $post_api_v1_groups_set_custom_fields_request): \RocketChatRoomsApi\Model\PostApiV1GroupsSetCustomFields200Response
```

Sets Group Custom Fields

Sets the custom fields for the private group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.62.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_custom_fields_request = {"roomId":"euzoT67Gx6nXcn66M","customFields":{"company":"sell-and-more"}}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetCustomFieldsRequest

try {
    $result = $apiInstance->postApiV1GroupsSetCustomFields($x_auth_token, $x_user_id, $post_api_v1_groups_set_custom_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_custom_fields_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetCustomFieldsRequest**](../Model/PostApiV1GroupsSetCustomFieldsRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsSetCustomFields200Response**](../Model/PostApiV1GroupsSetCustomFields200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetDescription()`

```php
postApiV1GroupsSetDescription($x_auth_token, $x_user_id, $post_api_v1_groups_set_description_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsSetDescription200Response
```

Set Group Description

Set the description for the private group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_description_request = {"roomId":"ByehQjC44FwMeiLbX","description":"Test out everything"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetDescriptionRequest

try {
    $result = $apiInstance->postApiV1GroupsSetDescription($x_auth_token, $x_user_id, $post_api_v1_groups_set_description_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetDescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_description_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetDescriptionRequest**](../Model/PostApiV1GroupsSetDescriptionRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsSetDescription200Response**](../Model/PostApiV1ChannelsSetDescription200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetEncrypted()`

```php
postApiV1GroupsSetEncrypted($x_auth_token, $x_user_id, $post_api_v1_groups_set_encrypted_request): \RocketChatRoomsApi\Model\PostApiV1GroupsSetEncrypted200Response
```

Set Group as Encrypted

Set group encryption.  ### Changelog | Version | Description | | ------- | ----------- | | 3.13.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_encrypted_request = {"encrypted":false,"roomId":"JZ8Y2dLfYhsg323Rf"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetEncryptedRequest

try {
    $result = $apiInstance->postApiV1GroupsSetEncrypted($x_auth_token, $x_user_id, $post_api_v1_groups_set_encrypted_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetEncrypted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_encrypted_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetEncryptedRequest**](../Model/PostApiV1GroupsSetEncryptedRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsSetEncrypted200Response**](../Model/PostApiV1GroupsSetEncrypted200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetPurpose()`

```php
postApiV1GroupsSetPurpose($x_auth_token, $x_user_id, $post_api_v1_groups_set_purpose_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsSetPurpose200Response
```

Set Group Purpose

Sets the description for the group/channel (the same as groups.setDescription, obsolete).  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_purpose_request = {"roomId":"ByehQjC44FwMeiLbX","purpose":"Test out everything"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetPurposeRequest

try {
    $result = $apiInstance->postApiV1GroupsSetPurpose($x_auth_token, $x_user_id, $post_api_v1_groups_set_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_purpose_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetPurposeRequest**](../Model/PostApiV1GroupsSetPurposeRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsSetPurpose200Response**](../Model/PostApiV1ChannelsSetPurpose200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetReadOnly()`

```php
postApiV1GroupsSetReadOnly($x_auth_token, $x_user_id, $post_api_v1_groups_set_read_only_request): \RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnly200Response
```

Set Group as Read Only

Set group as read-only or not.  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_read_only_request = {"roomId":"ByehQjC44FwMei5LbX","readOnly":true}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnlyRequest

try {
    $result = $apiInstance->postApiV1GroupsSetReadOnly($x_auth_token, $x_user_id, $post_api_v1_groups_set_read_only_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetReadOnly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_read_only_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnlyRequest**](../Model/PostApiV1GroupsSetReadOnlyRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnly200Response**](../Model/PostApiV1GroupsSetReadOnly200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetTopic()`

```php
postApiV1GroupsSetTopic($x_auth_token, $x_user_id, $post_api_v1_groups_set_topic_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsSetTopic200Response
```

Set Group Topic

Sets the topic for the group/channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_topic_request = {"roomId":"ByehQjC44FwMeiLbX","topic":"Discuss all of the testing"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetTopicRequest

try {
    $result = $apiInstance->postApiV1GroupsSetTopic($x_auth_token, $x_user_id, $post_api_v1_groups_set_topic_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_topic_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetTopicRequest**](../Model/PostApiV1GroupsSetTopicRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsSetTopic200Response**](../Model/PostApiV1ChannelsSetTopic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsSetType()`

```php
postApiV1GroupsSetType($x_auth_token, $x_user_id, $post_api_v1_groups_set_type_request): \RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnly200Response
```

Set Group Type

Set the group type. The group type can be either `c` (public) or `p` (private).  ### Changelog | Version | Description | | ------- | ----------- | | 0.49.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_set_type_request = {"roomId":"ByehQjC44FwMeiLbX","type":"c"}; // \RocketChatRoomsApi\Model\PostApiV1GroupsSetTypeRequest

try {
    $result = $apiInstance->postApiV1GroupsSetType($x_auth_token, $x_user_id, $post_api_v1_groups_set_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsSetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_set_type_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsSetTypeRequest**](../Model/PostApiV1GroupsSetTypeRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsSetReadOnly200Response**](../Model/PostApiV1GroupsSetReadOnly200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1GroupsUnarchive()`

```php
postApiV1GroupsUnarchive($x_auth_token, $x_user_id, $post_api_v1_groups_unarchive_request): \RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Unarchive Group

Unarchive a group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_groups_unarchive_request = new \RocketChatRoomsApi\Model\PostApiV1GroupsUnarchiveRequest(); // \RocketChatRoomsApi\Model\PostApiV1GroupsUnarchiveRequest

try {
    $result = $apiInstance->postApiV1GroupsUnarchive($x_auth_token, $x_user_id, $post_api_v1_groups_unarchive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postApiV1GroupsUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_groups_unarchive_request** | [**\RocketChatRoomsApi\Model\PostApiV1GroupsUnarchiveRequest**](../Model/PostApiV1GroupsUnarchiveRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGroupsLeave()`

```php
postGroupsLeave($x_auth_token, $x_user_id, $post_groups_leave_request): \RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response
```

Leave Group

Leave a group. The group owner must set another owner before leaving the group.  ### Changelog | Version | Description | | ------- | ----------- | | 0.48.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_groups_leave_request = new \RocketChatRoomsApi\Model\PostGroupsLeaveRequest(); // \RocketChatRoomsApi\Model\PostGroupsLeaveRequest

try {
    $result = $apiInstance->postGroupsLeave($x_auth_token, $x_user_id, $post_groups_leave_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroupsLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_groups_leave_request** | [**\RocketChatRoomsApi\Model\PostGroupsLeaveRequest**](../Model/PostGroupsLeaveRequest.md)|  | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\PostApiV1GroupsKick200Response**](../Model/PostApiV1GroupsKick200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
