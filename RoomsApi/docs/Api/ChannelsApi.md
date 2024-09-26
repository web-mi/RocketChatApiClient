# WebMIRocketChatApiClientRoomsApi\ChannelsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ChannelsAnonymousread()**](ChannelsApi.md#getApiV1ChannelsAnonymousread) | **GET** /api/v1/channels.anonymousread | Read Channel Messages Anonymously |
| [**getApiV1ChannelsCounters()**](ChannelsApi.md#getApiV1ChannelsCounters) | **GET** /api/v1/channels.counters | Get Channel Counters |
| [**getApiV1ChannelsFiles()**](ChannelsApi.md#getApiV1ChannelsFiles) | **GET** /api/v1/channels.files | Get Channel Files |
| [**getApiV1ChannelsGetAllUserMentionsByChannel()**](ChannelsApi.md#getApiV1ChannelsGetAllUserMentionsByChannel) | **GET** /api/v1/channels.getAllUserMentionsByChannel | Get all user mentions in a channel |
| [**getApiV1ChannelsGetIntegrations()**](ChannelsApi.md#getApiV1ChannelsGetIntegrations) | **GET** /api/v1/channels.getIntegrations | Get Channel Integrations |
| [**getApiV1ChannelsHistory()**](ChannelsApi.md#getApiV1ChannelsHistory) | **GET** /api/v1/channels.history | Get Channel History |
| [**getApiV1ChannelsInfo()**](ChannelsApi.md#getApiV1ChannelsInfo) | **GET** /api/v1/channels.info | Get Channel Information |
| [**getApiV1ChannelsList()**](ChannelsApi.md#getApiV1ChannelsList) | **GET** /api/v1/channels.list | Get Channel List |
| [**getApiV1ChannelsListJoined()**](ChannelsApi.md#getApiV1ChannelsListJoined) | **GET** /api/v1/channels.list.joined | Get List of Joined Channels |
| [**getApiV1ChannelsMembers()**](ChannelsApi.md#getApiV1ChannelsMembers) | **GET** /api/v1/channels.members | Get Members of a Channel |
| [**getApiV1ChannelsMessages()**](ChannelsApi.md#getApiV1ChannelsMessages) | **GET** /api/v1/channels.messages | Get Channel Messages |
| [**getApiV1ChannelsModerators()**](ChannelsApi.md#getApiV1ChannelsModerators) | **GET** /api/v1/channels.moderators | Get Channel Moderators |
| [**getApiV1ChannelsOnline()**](ChannelsApi.md#getApiV1ChannelsOnline) | **GET** /api/v1/channels.online | List Online Users in a Channel |
| [**getApiV1ChannelsRoles()**](ChannelsApi.md#getApiV1ChannelsRoles) | **GET** /api/v1/channels.roles | Get Channel Roles |
| [**getChannelsMembersByHighestRole()**](ChannelsApi.md#getChannelsMembersByHighestRole) | **GET** /api/v1/channels.membersByHighestRole | List Channel Members By Highest Role |
| [**posApiV1ChannelsRename()**](ChannelsApi.md#posApiV1ChannelsRename) | **POST** /api/v1/channels.rename | Rename a Channel |
| [**postApiV1ChannelsAddAll()**](ChannelsApi.md#postApiV1ChannelsAddAll) | **POST** /api/v1/channels.addAll | Add all Users to a Channel |
| [**postApiV1ChannelsAddLeader()**](ChannelsApi.md#postApiV1ChannelsAddLeader) | **POST** /api/v1/channels.addLeader | Add Channel Leader |
| [**postApiV1ChannelsAddModerator()**](ChannelsApi.md#postApiV1ChannelsAddModerator) | **POST** /api/v1/channels.addModerator | Add Channel Moderator |
| [**postApiV1ChannelsAddOwner()**](ChannelsApi.md#postApiV1ChannelsAddOwner) | **POST** /api/v1/channels.addOwner | Add Channel Owner |
| [**postApiV1ChannelsArchive()**](ChannelsApi.md#postApiV1ChannelsArchive) | **POST** /api/v1/channels.archive | Archive Channel |
| [**postApiV1ChannelsClose()**](ChannelsApi.md#postApiV1ChannelsClose) | **POST** /api/v1/channels.close | Close Channel |
| [**postApiV1ChannelsConvertToTeam()**](ChannelsApi.md#postApiV1ChannelsConvertToTeam) | **POST** /api/v1/channels.convertToTeam | Convert channel to team |
| [**postApiV1ChannelsCreate()**](ChannelsApi.md#postApiV1ChannelsCreate) | **POST** /api/v1/channels.create | Create Channel |
| [**postApiV1ChannelsDelete()**](ChannelsApi.md#postApiV1ChannelsDelete) | **POST** /api/v1/channels.delete | Delete Channel |
| [**postApiV1ChannelsInvite()**](ChannelsApi.md#postApiV1ChannelsInvite) | **POST** /api/v1/channels.invite | Add Users to Channel |
| [**postApiV1ChannelsJoin()**](ChannelsApi.md#postApiV1ChannelsJoin) | **POST** /api/v1/channels.join | Join a Channel |
| [**postApiV1ChannelsKick()**](ChannelsApi.md#postApiV1ChannelsKick) | **POST** /api/v1/channels.kick | Remove User from Channel |
| [**postApiV1ChannelsLeave()**](ChannelsApi.md#postApiV1ChannelsLeave) | **POST** /api/v1/channels.leave | Leave  Channel |
| [**postApiV1ChannelsOpen()**](ChannelsApi.md#postApiV1ChannelsOpen) | **POST** /api/v1/channels.open | Add Channel to User List |
| [**postApiV1ChannelsRemoveLeader()**](ChannelsApi.md#postApiV1ChannelsRemoveLeader) | **POST** /api/v1/channels.removeLeader | Remove Channel  Leader |
| [**postApiV1ChannelsRemoveModerator()**](ChannelsApi.md#postApiV1ChannelsRemoveModerator) | **POST** /api/v1/channels.removeModerator | Remove Channel Moderator |
| [**postApiV1ChannelsRemoveOwner()**](ChannelsApi.md#postApiV1ChannelsRemoveOwner) | **POST** /api/v1/channels.removeOwner | Remove Channel Owner |
| [**postApiV1ChannelsSetAnnouncement()**](ChannelsApi.md#postApiV1ChannelsSetAnnouncement) | **POST** /api/v1/channels.setAnnouncement | Set Channel Announcement |
| [**postApiV1ChannelsSetCustomFields()**](ChannelsApi.md#postApiV1ChannelsSetCustomFields) | **POST** /api/v1/channels.setCustomFields | Set Channel Custom Fields |
| [**postApiV1ChannelsSetDefault()**](ChannelsApi.md#postApiV1ChannelsSetDefault) | **POST** /api/v1/channels.setDefault | Set Default Channel |
| [**postApiV1ChannelsSetDescription()**](ChannelsApi.md#postApiV1ChannelsSetDescription) | **POST** /api/v1/channels.setDescription | Set Channel Description |
| [**postApiV1ChannelsSetJoinCode()**](ChannelsApi.md#postApiV1ChannelsSetJoinCode) | **POST** /api/v1/channels.setJoinCode | Set Channel Join Code |
| [**postApiV1ChannelsSetPurpose()**](ChannelsApi.md#postApiV1ChannelsSetPurpose) | **POST** /api/v1/channels.setPurpose | Set Channel Purpose |
| [**postApiV1ChannelsSetReadOnly()**](ChannelsApi.md#postApiV1ChannelsSetReadOnly) | **POST** /api/v1/channels.setReadOnly | Set Channel ReadOnly |
| [**postApiV1ChannelsSetTopic()**](ChannelsApi.md#postApiV1ChannelsSetTopic) | **POST** /api/v1/channels.setTopic | Set Channel Topic |
| [**postApiV1ChannelsSetType()**](ChannelsApi.md#postApiV1ChannelsSetType) | **POST** /api/v1/channels.setType | Set Channel Type |
| [**postApiV1ChannelsUnarchive()**](ChannelsApi.md#postApiV1ChannelsUnarchive) | **POST** /api/v1/channels.unarchive | Unarchive a Channel |


## `getApiV1ChannelsAnonymousread()`

```php
getApiV1ChannelsAnonymousread($room_id, $room_name, $offset, $count, $sort, $query, $fields): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsAnonymousread200Response
```

Read Channel Messages Anonymously

Fetch the messages in a public channel to an anonymous user. You must enable `Accounts_AllowAnonymousRead` <a href=\"https://docs.rocket.chat/docs/accounts\" target=\"_blank\">setting</a> in the workspace.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 1.2.0   | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1ChannelsAnonymousread($room_id, $room_name, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsAnonymousread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsAnonymousread200Response**](../Model/GetApiV1ChannelsAnonymousread200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsCounters()`

```php
getApiV1ChannelsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsCounters200Response
```

Get Channel Counters

Gets channel counter for the authenticated user.  Permission required: `view-room-administration` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.65.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$user_id = RtycPC29hqLJfT9xj; // string | The user ID.

try {
    $result = $apiInstance->getApiV1ChannelsCounters($x_auth_token, $x_user_id, $room_id, $room_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsCounters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **user_id** | **string**| The user ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsCounters200Response**](../Model/GetApiV1ChannelsCounters200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsFiles()`

```php
getApiV1ChannelsFiles($x_user_id, $x_auth_token, $room_id, $room_name, $fields, $query, $sort, $count, $offset): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsFiles200Response
```

Get Channel Files

Retrieves all the files from a channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.64.0 | Change userId to user object in response                    | | 0.59.0  | Added                  |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1ChannelsFiles($x_user_id, $x_auth_token, $room_id, $room_name, $fields, $query, $sort, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsFiles: ', $e->getMessage(), PHP_EOL;
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
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsFiles200Response**](../Model/GetApiV1ChannelsFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsGetAllUserMentionsByChannel()`

```php
getApiV1ChannelsGetAllUserMentionsByChannel($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsGetAllUserMentionsByChannel200Response
```

Get all user mentions in a channel

Get all the mentions of the authenticated user in a channel. ### Changelog | Version | Description| | ------- | -----------| |0.63.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
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

try {
    $result = $apiInstance->getApiV1ChannelsGetAllUserMentionsByChannel($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsGetAllUserMentionsByChannel: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsGetAllUserMentionsByChannel200Response**](../Model/GetApiV1ChannelsGetAllUserMentionsByChannel200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsGetIntegrations()`

```php
getApiV1ChannelsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $sort, $fields, $query, $count): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsGetIntegrations200Response
```

Get Channel Integrations

Retrieves the integrations that the channel has. The endpoint requires at least one of the following integration permissions:  - `manage-incoming-integrations` - `manage-own-incoming-integrations` - `manage-outgoing-integrations` - `manage-own-outgoing-integrations`.   It will return the integrations based on the user's permission.   ### Changelog | Version | Description                                     | | ------- | -------------------------------------------------- | | 1.1.0   | Separate permissions in `incoming` and `outgoing`. | | 0.49.0  | Added                                              |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = jdiue8TGkodp; // string | The room id.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1ChannelsGetIntegrations($x_auth_token, $x_user_id, $room_id, $offset, $sort, $fields, $query, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsGetIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsGetIntegrations200Response**](../Model/GetApiV1ChannelsGetIntegrations200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsHistory()`

```php
getApiV1ChannelsHistory($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $latest, $oldest, $inclusive, $show_thread_messages, $unreads): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsFiles200Response
```

Get Channel History

Retrieves the history of a channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.75.0 | Added offset property      | | 0.47.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
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
$latest = 2016-09-30T13:42:25.304Z; // string | The end of time range of messages to retrieve. The default value is the current date and time.
$oldest = 2016-05-30T13:42:25.304Z; // string | The start of the time range of messages to retrieve
$inclusive = true; // bool | Whether messages which land on the latest and oldest dates should be included. The default value is false.
$show_thread_messages = true; // bool | Whether thread messages should be included in the response
$unreads = false; // bool | Whether the number of unread messages should be included. The default value is false.

try {
    $result = $apiInstance->getApiV1ChannelsHistory($x_auth_token, $x_user_id, $room_id, $room_name, $sort, $count, $offset, $latest, $oldest, $inclusive, $show_thread_messages, $unreads);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsHistory: ', $e->getMessage(), PHP_EOL;
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
| **latest** | **string**| The end of time range of messages to retrieve. The default value is the current date and time. | [optional] |
| **oldest** | **string**| The start of the time range of messages to retrieve | [optional] |
| **inclusive** | **bool**| Whether messages which land on the latest and oldest dates should be included. The default value is false. | [optional] |
| **show_thread_messages** | **bool**| Whether thread messages should be included in the response | [optional] |
| **unreads** | **bool**| Whether the number of unread messages should be included. The default value is false. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsFiles200Response**](../Model/GetApiV1ChannelsFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsInfo()`

```php
getApiV1ChannelsInfo($x_auth_token, $x_user_id, $room_id, $room_name): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response
```

Get Channel Information

Retrieves the information about the channel. This does not include archived channels. ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsInfo($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsInfo: ', $e->getMessage(), PHP_EOL;
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

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response**](../Model/PostApiV1ChannelsAddAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsList()`

```php
getApiV1ChannelsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsList200Response
```

Get Channel List

Lists all of the channels on the workspace.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
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
    $result = $apiInstance->getApiV1ChannelsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsList: ', $e->getMessage(), PHP_EOL;
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

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsList200Response**](../Model/GetApiV1ChannelsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsListJoined()`

```php
getApiV1ChannelsListJoined($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsListJoined200Response
```

Get List of Joined Channels

Lists all the channels the authenticated user has joined.  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
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
    $result = $apiInstance->getApiV1ChannelsListJoined($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsListJoined: ', $e->getMessage(), PHP_EOL;
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

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsListJoined200Response**](../Model/GetApiV1ChannelsListJoined200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsMembers()`

```php
getApiV1ChannelsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $status, $filter, $sort, $count, $offset): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsMembers200Response
```

Get Members of a Channel

Lists all channel users. The list of elements a user can use to sort the list is limited. The current sortable element is:`username`  ### Changelog | Version | Description                                  | | ------- | -------------------------------------------- | | 0.59.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$status = ['online', 'away']; // string[] | The user's status (search filter).
$filter = my-nickname; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields`setting.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1ChannelsMembers($x_auth_token, $x_user_id, $room_id, $room_name, $status, $filter, $sort, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **status** | [**string[]**](../Model/string.md)| The user&#39;s status (search filter). | [optional] |
| **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60;setting. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsMembers200Response**](../Model/GetApiV1ChannelsMembers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsMessages()`

```php
getApiV1ChannelsMessages($x_auth_token, $x_user_id, $room_id, $count, $sort, $query, $offset): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsMessages200Response
```

Get Channel Messages

Lists all of the specific channel messages.  ### Changelog  | Version | Description                                  | | ------- | -------------------------------------------- | | 0.59.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = jdiue8TGkodp; // string | The room id.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1ChannelsMessages($x_auth_token, $x_user_id, $room_id, $count, $sort, $query, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room id. | |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsMessages200Response**](../Model/GetApiV1ChannelsMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsModerators()`

```php
getApiV1ChannelsModerators($x_auth_token, $x_user_id, $room_id, $room_name): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsModerators200Response
```

Get Channel Moderators

List all the moderators in a channel.  ### Changelog | Version | Description | | ------- | ----------- | | 0.70.0 | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsModerators($x_auth_token, $x_user_id, $room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsModerators: ', $e->getMessage(), PHP_EOL;
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

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsModerators200Response**](../Model/GetApiV1ChannelsModerators200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsOnline()`

```php
getApiV1ChannelsOnline($x_auth_token, $x_user_id, $query): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsOnline200Response
```

List Online Users in a Channel

List all online users in a channel. If the channel's id is not provided, it lists all the online users of all the channels.  ### Changelog | Version | Description | | ------- | ----------- | |0.52.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$query = new \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsOnlineQueryParameter(); // GetApiV1ChannelsOnlineQueryParameter | An object of the channel's id.

try {
    $result = $apiInstance->getApiV1ChannelsOnline($x_auth_token, $x_user_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsOnline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **query** | [**GetApiV1ChannelsOnlineQueryParameter**](../Model/.md)| An object of the channel&#39;s id. | |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsOnline200Response**](../Model/GetApiV1ChannelsOnline200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ChannelsRoles()`

```php
getApiV1ChannelsRoles($room_id, $room_name): \WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsRoles200Response
```

Get Channel Roles

Lists all user's roles in the channel.  ### Changelog  | Version | Description | | ------- | ----------- | |0.65.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ChannelsRoles($room_id, $room_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getApiV1ChannelsRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetApiV1ChannelsRoles200Response**](../Model/GetApiV1ChannelsRoles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelsMembersByHighestRole()`

```php
getChannelsMembersByHighestRole($x_auth_token, $x_user_id, $status, $room_id, $room_name, $filter, $count, $sort, $offset): \WebMIRocketChatApiClientRoomsApi\Model\GetChannelsMembersByHighestRole200Response
```

List Channel Members By Highest Role

Lists all channel users sorted by their room scoped roles.   Room members are sorted by their most important role in the room. The following hierarchy is used: **Owner > Moderator > Other roles**. The information related to each user's highest role is returned in the `highestRole` object within each of them.  The `highestRole` object contains a numeric `level` field which ranges from 0 to 2. Level 0 stands for room owners, while level 1 is assigned to moderators (that are not room owners) and level 2 is assigned to all other team members regardless of their room scoped roles.  The `highestRole` object also contains a `role` field, which has three possile values: `owner`, `moderator` or `member`, which are assigned to levels 0, 1 and 2, respectively. The list of elements a user can use to sort the list is limited. The current sortable element is:`username`  ### Changelog | Version | Description | | ------- | ----------- | |6.5.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$status = ['online', 'away']; // string[] | The user's status (search filter).
$room_id = dlpfuijw7ej; // string | The room id. It is required if the `roomName` is not provided.
$room_name = general; // string | The room name.  It is required if the `roomId` is not provided.
$filter = 'filter_example'; // string | Extra search filters to be applied to the fields defined in the `Accounts_SearchFields` setting.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getChannelsMembersByHighestRole($x_auth_token, $x_user_id, $status, $room_id, $room_name, $filter, $count, $sort, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelsMembersByHighestRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **status** | [**string[]**](../Model/string.md)| The user&#39;s status (search filter). | [optional] |
| **room_id** | **string**| The room id. It is required if the &#x60;roomName&#x60; is not provided. | [optional] |
| **room_name** | **string**| The room name.  It is required if the &#x60;roomId&#x60; is not provided. | [optional] |
| **filter** | **string**| Extra search filters to be applied to the fields defined in the &#x60;Accounts_SearchFields&#x60; setting. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\GetChannelsMembersByHighestRole200Response**](../Model/GetChannelsMembersByHighestRole200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `posApiV1ChannelsRename()`

```php
posApiV1ChannelsRename($x_auth_token, $x_user_id, $pos_api_v1_channels_rename_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeave200Response
```

Rename a Channel

Change the name of a channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$pos_api_v1_channels_rename_request = {"roomId":"WDuJLFkjwk6L7LdFC","name":"newName"}; // \WebMIRocketChatApiClientRoomsApi\Model\PosApiV1ChannelsRenameRequest

try {
    $result = $apiInstance->posApiV1ChannelsRename($x_auth_token, $x_user_id, $pos_api_v1_channels_rename_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->posApiV1ChannelsRename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **pos_api_v1_channels_rename_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PosApiV1ChannelsRenameRequest**](../Model/PosApiV1ChannelsRenameRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeave200Response**](../Model/PostApiV1ChannelsLeave200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsAddAll()`

```php
postApiV1ChannelsAddAll($x_auth_token, $x_user_id, $post_api_v1_channels_add_all_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response
```

Add all Users to a Channel

Adds all users in the workspace to a channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | |0.55.0   | Added `activeUsersOnly` param | |0.48.0   | Renamed to `channels.addAll` from `channel.addAll`|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_add_all_request = {"roomId":"WDuJLFkjwk6L7LdFC","activeUsersOnly":true}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAllRequest

try {
    $result = $apiInstance->postApiV1ChannelsAddAll($x_auth_token, $x_user_id, $post_api_v1_channels_add_all_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_add_all_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAllRequest**](../Model/PostApiV1ChannelsAddAllRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response**](../Model/PostApiV1ChannelsAddAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsAddLeader()`

```php
postApiV1ChannelsAddLeader($x_auth_token, $x_user_id, $post_api_v1_channels_add_leader_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Channel Leader

Assign the role of `leader` to a user in the current channel.   Permission required: `set-leader` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.75.0   | Added                    |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_add_leader_request = {"roomId":"WDuJLFkjwk6L7LdFC","userId":"b66oZ8i9pkeSko33v"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeaderRequest

try {
    $result = $apiInstance->postApiV1ChannelsAddLeader($x_auth_token, $x_user_id, $post_api_v1_channels_add_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddLeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_add_leader_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeaderRequest**](../Model/PostApiV1ChannelsAddLeaderRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsAddModerator()`

```php
postApiV1ChannelsAddModerator($x_auth_token, $x_user_id, $post_api_v1_channels_add_moderator_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Channel Moderator

Assign the `moderator` role to a user in a channel.   Permission required: `set-moderator`  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.4  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_add_moderator_request = {"roomId":"WDuJLFkjwk6L7LdFC","userId":"b66oZ8i9pkeSko33v"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddModeratorRequest

try {
    $result = $apiInstance->postApiV1ChannelsAddModerator($x_auth_token, $x_user_id, $post_api_v1_channels_add_moderator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_add_moderator_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddModeratorRequest**](../Model/PostApiV1ChannelsAddModeratorRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsAddOwner()`

```php
postApiV1ChannelsAddOwner($x_auth_token, $x_user_id, $post_api_v1_channels_add_owner_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Channel Owner

Assign the `owner` role to a user in a channel.   Permission required:  `set-owner` ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.4   | Added                    |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_add_owner_request = {"roomId":"WDuJLFkjwk6L7LdFC","userId":"b66oZ8i9pkeSko33v"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddOwnerRequest

try {
    $result = $apiInstance->postApiV1ChannelsAddOwner($x_auth_token, $x_user_id, $post_api_v1_channels_add_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsAddOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_add_owner_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddOwnerRequest**](../Model/PostApiV1ChannelsAddOwnerRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsArchive()`

```php
postApiV1ChannelsArchive($x_auth_token, $x_user_id, $post_api_v1_channels_archive_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Archive Channel

Archive a channel. ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                    |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_archive_request = {"roomId":"ByehQjC44FwMeiLbX"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsArchiveRequest

try {
    $result = $apiInstance->postApiV1ChannelsArchive($x_auth_token, $x_user_id, $post_api_v1_channels_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_archive_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsArchiveRequest**](../Model/PostApiV1ChannelsArchiveRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsClose()`

```php
postApiV1ChannelsClose($x_auth_token, $x_user_id, $post_api_v1_channels_close_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Close Channel

Remove a channel from the authenticated user's list of channels. ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_close_request = {"roomId":"ByehQjC44FwMeiLbX"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCloseRequest

try {
    $result = $apiInstance->postApiV1ChannelsClose($x_auth_token, $x_user_id, $post_api_v1_channels_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_close_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCloseRequest**](../Model/PostApiV1ChannelsCloseRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsConvertToTeam()`

```php
postApiV1ChannelsConvertToTeam($x_auth_token, $x_user_id, $post_api_v1_channels_convert_to_team_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response
```

Convert channel to team

Convert a channel to a team. Permission required: `create-team`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_convert_to_team_request = {"channelId":"6513afeda2f73c7460e18c86"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsConvertToTeamRequest

try {
    $result = $apiInstance->postApiV1ChannelsConvertToTeam($x_auth_token, $x_user_id, $post_api_v1_channels_convert_to_team_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsConvertToTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_convert_to_team_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsConvertToTeamRequest**](../Model/PostApiV1ChannelsConvertToTeamRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response**](../Model/PostApiV1ChannelsConvertToTeam200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsCreate()`

```php
postApiV1ChannelsCreate($x_auth_token, $x_user_id, $post_api_v1_channels_create_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCreate200Response
```

Create Channel

Create a public channel. Optionally, include specified users. The channel creator is included as a member by default. Channel naming has restraints following the regex filter `[0-9a-zA-Z-_.]+` by default. See <a href=\"https://docs.rocket.chat/docs/general#utf8\" target=\"_blank\">UTF8 Settings</a> to modify regex filter for channel names. Channel names must not allow for any whitespaces.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 6.4.1   | Added `excludeSelf` param | | 0.13.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_create_request = {"name":"channelname","members":["rocket.cat"],"readOnly":true,"excludeSelf":true,"customFields":{"type":"default"},"extraData":{"broadcast":true,"encrypted":false,"teamId":"658441562dd9f928ad9951aa"}}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCreateRequest

try {
    $result = $apiInstance->postApiV1ChannelsCreate($x_auth_token, $x_user_id, $post_api_v1_channels_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_create_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCreateRequest**](../Model/PostApiV1ChannelsCreateRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsCreate200Response**](../Model/PostApiV1ChannelsCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsDelete()`

```php
postApiV1ChannelsDelete($x_auth_token, $x_user_id, $post_api_v1_channels_delete_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Delete Channel

Delete a channel.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 0.71.0  | Removed `channel` property| | 0.49.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_delete_request = new \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsDeleteRequest(); // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsDeleteRequest

try {
    $result = $apiInstance->postApiV1ChannelsDelete($x_auth_token, $x_user_id, $post_api_v1_channels_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_delete_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsDeleteRequest**](../Model/PostApiV1ChannelsDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsInvite()`

```php
postApiV1ChannelsInvite($x_auth_token, $x_user_id, $post_api_v1_channels_invite_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsInvite200Response
```

Add Users to Channel

Add a user or bulk users to a channel.  For a user to invite other users, they must match at least one of the following premises: - The user is part of a room of any type and has the `add-user-to-joined-room` permission. - The user is part of a public room `(t: 'c')` and has the `add-user-to-any-c-room` permission. - The user is part of a private room `(t: 'p')` and has the `add-user-to-any-p-room` permission.  ### Changelog  | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_invite_request = new \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsInviteRequest(); // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsInviteRequest

try {
    $result = $apiInstance->postApiV1ChannelsInvite($x_auth_token, $x_user_id, $post_api_v1_channels_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_invite_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsInviteRequest**](../Model/PostApiV1ChannelsInviteRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsInvite200Response**](../Model/PostApiV1ChannelsInvite200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsJoin()`

```php
postApiV1ChannelsJoin($x_auth_token, $x_user_id, $post_api_v1_channels_join_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response
```

Join a Channel

Join a channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.49.0  | Added                  |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_join_request = {"roomId":"ByehQjC44FwMeiLbX","joinCode":"1234"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsJoinRequest

try {
    $result = $apiInstance->postApiV1ChannelsJoin($x_auth_token, $x_user_id, $post_api_v1_channels_join_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_join_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsJoinRequest**](../Model/PostApiV1ChannelsJoinRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response**](../Model/PostApiV1ChannelsAddAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsKick()`

```php
postApiV1ChannelsKick($post_api_v1_channels_kick_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response
```

Remove User from Channel

Remove a user from the channel.  ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_channels_kick_request = {"roomId":"WDuJLFkjwk6L7LdFC","userId":"rYhzFRd2QZjNwAAXX"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsKickRequest

try {
    $result = $apiInstance->postApiV1ChannelsKick($post_api_v1_channels_kick_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsKick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_channels_kick_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsKickRequest**](../Model/PostApiV1ChannelsKickRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200Response**](../Model/PostApiV1ChannelsAddAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsLeave()`

```php
postApiV1ChannelsLeave($x_auth_token, $x_user_id, $post_api_v1_channels_leave_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeave200Response
```

Leave  Channel

Leave a channel. ### Changelog | Version | Description               | | ------- | ------------------------- | | 0.48.0  | Added                  |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_leave_request = new \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeaveRequest(); // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeaveRequest

try {
    $result = $apiInstance->postApiV1ChannelsLeave($x_auth_token, $x_user_id, $post_api_v1_channels_leave_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_leave_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeaveRequest**](../Model/PostApiV1ChannelsLeaveRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsLeave200Response**](../Model/PostApiV1ChannelsLeave200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsOpen()`

```php
postApiV1ChannelsOpen($x_auth_token, $x_user_id, $post_api_v1_channels_open_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Channel to User List

Add a channel to the authenticated user's list of channels. ### Changelog  | Version | Description | | ------- | ----------- | |0.48.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_open_request = {"roomId":"ByehQjC44FwMeiLbX"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsOpenRequest

try {
    $result = $apiInstance->postApiV1ChannelsOpen($x_auth_token, $x_user_id, $post_api_v1_channels_open_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_open_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsOpenRequest**](../Model/PostApiV1ChannelsOpenRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsRemoveLeader()`

```php
postApiV1ChannelsRemoveLeader($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Channel  Leader

Remove the `leader` role from a user in a channel.   Permission required: `set-leader` .  ### Changelog  | Version | Description | | ------- | ----------- | |0.75.0  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_remove_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest

try {
    $result = $apiInstance->postApiV1ChannelsRemoveLeader($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveLeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_remove_leader_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest**](../Model/PostApiV1ChannelsRemoveLeaderRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsRemoveModerator()`

```php
postApiV1ChannelsRemoveModerator($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Channel Moderator

Remove the `moderator` role from a user in a channel.  Permission required: `set-moderator`.  ### Changelog  | Version | Description | | ------- | ----------- | |0.49.4  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_remove_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest

try {
    $result = $apiInstance->postApiV1ChannelsRemoveModerator($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_remove_leader_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest**](../Model/PostApiV1ChannelsRemoveLeaderRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsRemoveOwner()`

```php
postApiV1ChannelsRemoveOwner($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Channel Owner

Remove the `owner` role from a user in a channel.   Permission required:`set-owner`.  ### Changelog  | Version | Description | | ------- | ----------- | |0.49.4  | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_remove_leader_request = {"roomId":"ByehQjC44FwMeiLbX","userId":"oCHkav5Zf6vmpu2W2"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest

try {
    $result = $apiInstance->postApiV1ChannelsRemoveOwner($x_auth_token, $x_user_id, $post_api_v1_channels_remove_leader_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsRemoveOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_remove_leader_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsRemoveLeaderRequest**](../Model/PostApiV1ChannelsRemoveLeaderRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetAnnouncement()`

```php
postApiV1ChannelsSetAnnouncement($x_user_id, $x_auth_token, $post_api_v1_channels_set_announcement_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetAnnouncement200Response
```

Set Channel Announcement

Set an announcement for the channel. ### Changelog  | Version | Description | | ------- | ----------- | |0.63.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_channels_set_announcement_request = {"roomId":"WDuJLFkjwk6L7LdFC","announcement":"Test out everything"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetAnnouncementRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetAnnouncement($x_user_id, $x_auth_token, $post_api_v1_channels_set_announcement_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetAnnouncement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_announcement_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetAnnouncementRequest**](../Model/PostApiV1ChannelsSetAnnouncementRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetAnnouncement200Response**](../Model/PostApiV1ChannelsSetAnnouncement200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetCustomFields()`

```php
postApiV1ChannelsSetCustomFields($x_user_id, $x_auth_token, $post_api_v1_channels_set_custom_fields_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetCustomFields200Response
```

Set Channel Custom Fields

Sets the custom fields for a channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.62.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_channels_set_custom_fields_request = {"roomId":"GENERAL","customFields":{"organization":"tra-la-la"}}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetCustomFieldsRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetCustomFields($x_user_id, $x_auth_token, $post_api_v1_channels_set_custom_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_custom_fields_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetCustomFieldsRequest**](../Model/PostApiV1ChannelsSetCustomFieldsRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetCustomFields200Response**](../Model/PostApiV1ChannelsSetCustomFields200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetDefault()`

```php
postApiV1ChannelsSetDefault($x_auth_token, $x_user_id, $post_api_v1_channels_set_default_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDefault200Response
```

Set Default Channel

Set whether the channel is a default channel or not. ### Changelog | Version | Description | | ------- | ----------- | |0.66.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_default_request = {"roomId":"ByehQjC44FwMeiLbX","default":true}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDefaultRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetDefault($x_auth_token, $x_user_id, $post_api_v1_channels_set_default_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_default_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDefaultRequest**](../Model/PostApiV1ChannelsSetDefaultRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDefault200Response**](../Model/PostApiV1ChannelsSetDefault200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetDescription()`

```php
postApiV1ChannelsSetDescription($x_auth_token, $x_user_id, $post_api_v1_channels_set_description_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDescription200Response
```

Set Channel Description

Set the description for a channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.48.4  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_description_request = {"roomId":"ByehQjC44FwMeiLbX","description":"Test out everything"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDescriptionRequest | 

try {
    $result = $apiInstance->postApiV1ChannelsSetDescription($x_auth_token, $x_user_id, $post_api_v1_channels_set_description_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetDescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_description_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDescriptionRequest**](../Model/PostApiV1ChannelsSetDescriptionRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetDescription200Response**](../Model/PostApiV1ChannelsSetDescription200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetJoinCode()`

```php
postApiV1ChannelsSetJoinCode($x_auth_token, $x_user_id, $post_api_v1_channels_set_join_code_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetJoinCode200Response
```

Set Channel Join Code

Set the code required to join the channel. If it is set, users must use the join code to successfully join the channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_join_code_request = {"roomId":"ByehQjC44FwMeiLbX","joinCode":"87hsyi9"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetJoinCodeRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetJoinCode($x_auth_token, $x_user_id, $post_api_v1_channels_set_join_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetJoinCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_join_code_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetJoinCodeRequest**](../Model/PostApiV1ChannelsSetJoinCodeRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetJoinCode200Response**](../Model/PostApiV1ChannelsSetJoinCode200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetPurpose()`

```php
postApiV1ChannelsSetPurpose($x_auth_token, $x_user_id, $post_api_v1_channels_set_purpose_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetPurpose200Response
```

Set Channel Purpose

Set the purpose or description of the channel.  It is the same as Set Channel Description.  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_purpose_request = {"roomId":"WDuJLFkjwk6L7LdFC","purpose":"greetings"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetPurposeRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetPurpose($x_auth_token, $x_user_id, $post_api_v1_channels_set_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_purpose_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetPurposeRequest**](../Model/PostApiV1ChannelsSetPurposeRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetPurpose200Response**](../Model/PostApiV1ChannelsSetPurpose200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetReadOnly()`

```php
postApiV1ChannelsSetReadOnly($x_auth_token, $x_user_id, $post_api_v1_channels_set_read_only_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnly200Response
```

Set Channel ReadOnly

Set a channel to be read-only or not.  ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_read_only_request = {"roomId":"ByehQjC44FwMeiLbX","readOnly":true}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnlyRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetReadOnly($x_auth_token, $x_user_id, $post_api_v1_channels_set_read_only_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetReadOnly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_read_only_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnlyRequest**](../Model/PostApiV1ChannelsSetReadOnlyRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnly200Response**](../Model/PostApiV1ChannelsSetReadOnly200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetTopic()`

```php
postApiV1ChannelsSetTopic($x_auth_token, $x_user_id, $post_api_v1_channels_set_topic_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTopic200Response
```

Set Channel Topic

Set the topic for a channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.13.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_topic_request = {"roomId":"WDuJLFkjwk6L7LdFC","topic":"Discuss all of the testing"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTopicRequest

try {
    $result = $apiInstance->postApiV1ChannelsSetTopic($x_auth_token, $x_user_id, $post_api_v1_channels_set_topic_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_topic_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTopicRequest**](../Model/PostApiV1ChannelsSetTopicRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTopic200Response**](../Model/PostApiV1ChannelsSetTopic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsSetType()`

```php
postApiV1ChannelsSetType($x_auth_token, $x_user_id, $post_api_v1_channels_set_type_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnly200Response
```

Set Channel Type

Set the channel type. The channel type can be either `c` (public) or `p` (private). ### Changelog | Version | Description | | ------- | ----------- | |0.49.0  | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_set_type_request = {"roomId":"WDuJLFkjwk6L7LdFC","type":"p"}; // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTypeRequest | 

try {
    $result = $apiInstance->postApiV1ChannelsSetType($x_auth_token, $x_user_id, $post_api_v1_channels_set_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsSetType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_set_type_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetTypeRequest**](../Model/PostApiV1ChannelsSetTypeRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsSetReadOnly200Response**](../Model/PostApiV1ChannelsSetReadOnly200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChannelsUnarchive()`

```php
postApiV1ChannelsUnarchive($x_auth_token, $x_user_id, $post_api_v1_channels_unarchive_request): \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Unarchive a Channel

Unarchive a Channel.  ### Changelog | Version | Description | | ------- | ----------- | |0.48.0   | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientRoomsApi\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_channels_unarchive_request = new \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsUnarchiveRequest(); // \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsUnarchiveRequest

try {
    $result = $apiInstance->postApiV1ChannelsUnarchive($x_auth_token, $x_user_id, $post_api_v1_channels_unarchive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->postApiV1ChannelsUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_channels_unarchive_request** | [**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsUnarchiveRequest**](../Model/PostApiV1ChannelsUnarchiveRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddLeader200Response**](../Model/PostApiV1ChannelsAddLeader200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
