# WebMI\RocketChatApiClient\RoomsApi\TeamsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1TeamsAutocomplete()**](TeamsApi.md#getApiV1TeamsAutocomplete) | **GET** /api/v1/teams.autocomplete | Autocomplete Team |
| [**getApiV1TeamsInfo()**](TeamsApi.md#getApiV1TeamsInfo) | **GET** /api/v1/teams.info | Get Team Info |
| [**getApiV1TeamsList()**](TeamsApi.md#getApiV1TeamsList) | **GET** /api/v1/teams.list | Get List of Teams |
| [**getApiV1TeamsListAll()**](TeamsApi.md#getApiV1TeamsListAll) | **GET** /api/v1/teams.listAll | Get List of All Teams |
| [**getApiV1TeamsListChildren()**](TeamsApi.md#getApiV1TeamsListChildren) | **GET** /api/v1/teams.listChildren | List Rooms and Discussions of a Team |
| [**getApiV1TeamsListRooms()**](TeamsApi.md#getApiV1TeamsListRooms) | **GET** /api/v1/teams.listRooms | List Rooms of a Team |
| [**getApiV1TeamsListRoomsOfUser()**](TeamsApi.md#getApiV1TeamsListRoomsOfUser) | **GET** /api/v1/teams.listRoomsOfUser | List User Rooms of a Team |
| [**getApiV1TeamsMembers()**](TeamsApi.md#getApiV1TeamsMembers) | **GET** /api/v1/teams.members | List Team Members |
| [**postApiV1TeamsAddMembers()**](TeamsApi.md#postApiV1TeamsAddMembers) | **POST** /api/v1/teams.addMembers | Add Members to the Team |
| [**postApiV1TeamsAddRooms()**](TeamsApi.md#postApiV1TeamsAddRooms) | **POST** /api/v1/teams.addRooms | Add Rooms to a Team |
| [**postApiV1TeamsConvertToChannel()**](TeamsApi.md#postApiV1TeamsConvertToChannel) | **POST** /api/v1/teams.convertToChannel | Convert Team to Channel |
| [**postApiV1TeamsCreate()**](TeamsApi.md#postApiV1TeamsCreate) | **POST** /api/v1/teams.create | Create a New Team |
| [**postApiV1TeamsDelete()**](TeamsApi.md#postApiV1TeamsDelete) | **POST** /api/v1/teams.delete | Delete a Team |
| [**postApiV1TeamsLeave()**](TeamsApi.md#postApiV1TeamsLeave) | **POST** /api/v1/teams.leave | Leave a Team |
| [**postApiV1TeamsRemoveMember()**](TeamsApi.md#postApiV1TeamsRemoveMember) | **POST** /api/v1/teams.removeMember | Remove Member from Team |
| [**postApiV1TeamsRemoveRoom()**](TeamsApi.md#postApiV1TeamsRemoveRoom) | **POST** /api/v1/teams.removeRoom | Remove room from the Team |
| [**postApiV1TeamsUpdate()**](TeamsApi.md#postApiV1TeamsUpdate) | **POST** /api/v1/teams.update | Update a Team |
| [**postApiV1TeamsUpdateMembers()**](TeamsApi.md#postApiV1TeamsUpdateMembers) | **POST** /api/v1/teams.updateMember | Update Team Member Info |
| [**postApiV1TeamsUpdateRoom()**](TeamsApi.md#postApiV1TeamsUpdateRoom) | **POST** /api/v1/teams.updateRoom | Update Room in a Team |


## `getApiV1TeamsAutocomplete()`

```php
getApiV1TeamsAutocomplete($x_auth_token, $x_user_id, $name): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsAutocomplete200Response
```

Autocomplete Team

List the teams whose names match a given pattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$name = team; // string | The pattern (search filter for team names).

try {
    $result = $apiInstance->getApiV1TeamsAutocomplete($x_auth_token, $x_user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **name** | **string**| The pattern (search filter for team names). | |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsAutocomplete200Response**](../Model/GetApiV1TeamsAutocomplete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsInfo()`

```php
getApiV1TeamsInfo($x_auth_token, $x_user_id, $team_id, $team_name): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsInfo200Response
```

Get Team Info

Gets a team's information. If the team is not public, the request sender must be a member of the team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$team_id = 63f3efc4b000b6b6d86704b2; // string | The team id.  It is required if the `teamName` is not provided.
$team_name = livestream; // string | The team name.  It is required if the `teamId` is not provided.

try {
    $result = $apiInstance->getApiV1TeamsInfo($x_auth_token, $x_user_id, $team_id, $team_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional] |
| **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsInfo200Response**](../Model/GetApiV1TeamsInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsList()`

```php
getApiV1TeamsList($x_auth_token, $x_user_id, $sort, $offset, $count, $query): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListAll200Response
```

Get List of Teams

Lists the public and private teams the request sender is part of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }

try {
    $result = $apiInstance->getApiV1TeamsList($x_auth_token, $x_user_id, $sort, $offset, $count, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListAll200Response**](../Model/GetApiV1TeamsListAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsListAll()`

```php
getApiV1TeamsListAll($x_auth_token, $x_user_id, $offset, $count): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListAll200Response
```

Get List of All Teams

Lists all the teams and their information.  Permission required: `view-all-teams`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1TeamsListAll($x_auth_token, $x_user_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListAll200Response**](../Model/GetApiV1TeamsListAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsListChildren()`

```php
getApiV1TeamsListChildren($x_user_id, $x_auth_token, $team_name, $team_id, $offset, $count, $sort, $filter, $type, $room_id): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListChildren200Response
```

List Rooms and Discussions of a Team

Lists a particular team's public rooms, discussions, and the rooms (public/private) a user is part of from the team's main room. Currently, this endpoint returns the discussions from the parent team rooms only; discussions from sub-channels are not returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$team_name = livestream; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = 63f3efc4b000b6b6d86704b2; // string | The team id.  It is required if the `teamName` is not provided.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$filter = 'filter_example'; // string | Filter the results using the text you want to find.
$type = 'type_example'; // string | You can choose the type of rooms you want in the response. Enter the value as `channels` or `discussions`. If you don't enter any value, both types are returned.
$room_id = 66c82d78237405fc05fc1eef; // string | The room ID. This parameter is required if you have not provided the `teamId` or the `teamName`.

try {
    $result = $apiInstance->getApiV1TeamsListChildren($x_user_id, $x_auth_token, $team_name, $team_id, $offset, $count, $sort, $filter, $type, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional] |
| **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **filter** | **string**| Filter the results using the text you want to find. | [optional] |
| **type** | **string**| You can choose the type of rooms you want in the response. Enter the value as &#x60;channels&#x60; or &#x60;discussions&#x60;. If you don&#39;t enter any value, both types are returned. | [optional] |
| **room_id** | **string**| The room ID. This parameter is required if you have not provided the &#x60;teamId&#x60; or the &#x60;teamName&#x60;. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListChildren200Response**](../Model/GetApiV1TeamsListChildren200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsListRooms()`

```php
getApiV1TeamsListRooms($x_auth_token, $x_user_id, $team_id, $team_name, $type, $count, $offset): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListRooms200Response
```

List Rooms of a Team

List all rooms in a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$team_id = 63f3efc4b000b6b6d86704b2; // string | The team id.  It is required if the `teamName` is not provided.
$team_name = livestream; // string | The team name.  It is required if the `teamId` is not provided.
$type = autoJoin; // string | The room's type (search filter).
$count = 50; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1TeamsListRooms($x_auth_token, $x_user_id, $team_id, $team_name, $type, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional] |
| **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional] |
| **type** | **string**| The room&#39;s type (search filter). | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListRooms200Response**](../Model/GetApiV1TeamsListRooms200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsListRoomsOfUser()`

```php
getApiV1TeamsListRoomsOfUser($x_user_id, $x_auth_token, $user_id, $team_name, $team_id, $offset, $count): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListRoomsOfUser200Response
```

List User Rooms of a Team

Lists only the team's rooms the user has joined.  Permission required: `view-all-team-channels`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$user_id = rbAXrutTFbNprfn; // string | The user id.
$team_name = livestream; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = 63f3efc4b000b6b6d86704b2; // string | The team id.  It is required if the `teamName` is not provided.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1TeamsListRoomsOfUser($x_user_id, $x_auth_token, $user_id, $team_name, $team_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsListRoomsOfUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **user_id** | **string**| The user id. | |
| **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional] |
| **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsListRoomsOfUser200Response**](../Model/GetApiV1TeamsListRoomsOfUser200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1TeamsMembers()`

```php
getApiV1TeamsMembers($x_auth_token, $x_user_id, $team_name, $team_id, $name, $username, $status): \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsMembers200Response
```

List Team Members

List all members of a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$team_name = livestream; // string | The team name.  It is required if the `teamId` is not provided.
$team_id = 63f3efc4b000b6b6d86704b2; // string | The team id.  It is required if the `teamName` is not provided.
$name = test; // string | Search filter for the user's name
$username = test.user; // string | Search filter for the user's username
$status = ["online", "away", "busy"]; // string[] | Search filter for the user's status

try {
    $result = $apiInstance->getApiV1TeamsMembers($x_auth_token, $x_user_id, $team_name, $team_id, $name, $username, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getApiV1TeamsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **team_name** | **string**| The team name.  It is required if the &#x60;teamId&#x60; is not provided. | [optional] |
| **team_id** | **string**| The team id.  It is required if the &#x60;teamName&#x60; is not provided. | [optional] |
| **name** | **string**| Search filter for the user&#39;s name | [optional] |
| **username** | **string**| Search filter for the user&#39;s username | [optional] |
| **status** | [**string[]**](../Model/string.md)| Search filter for the user&#39;s status | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1TeamsMembers200Response**](../Model/GetApiV1TeamsMembers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1TeamsAddMembers()`

```php
postApiV1TeamsAddMembers($x_auth_token, $x_user_id, $post_api_v1_teams_add_members_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Add Members to the Team

Add members to a team.  Permissions required: `add-team-member` or `edit-team-member`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_add_members_request = {"teamId":"63f3efc4b000b6b6d86704b2","members":[{"userId":"rYhzFRd2QZjNwAAXX","roles":["member"]}]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddMembersRequest

try {
    $result = $apiInstance->postApiV1TeamsAddMembers($x_auth_token, $x_user_id, $post_api_v1_teams_add_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsAddMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_add_members_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddMembersRequest**](../Model/PostApiV1TeamsAddMembersRequest.md)|  | [optional] |

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

## `postApiV1TeamsAddRooms()`

```php
postApiV1TeamsAddRooms($x_auth_token, $x_user_id, $post_api_v1_teams_add_rooms_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddRooms200Response
```

Add Rooms to a Team

Adds rooms to the team.  Permission required: `add-team-channel`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_add_rooms_request = {"teamId":"607e0d9b49d493189836bfac","rooms":["8Z7eRsibvD5AANfmK"]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddRoomsRequest

try {
    $result = $apiInstance->postApiV1TeamsAddRooms($x_auth_token, $x_user_id, $post_api_v1_teams_add_rooms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsAddRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_add_rooms_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddRoomsRequest**](../Model/PostApiV1TeamsAddRoomsRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddRooms200Response**](../Model/PostApiV1TeamsAddRooms200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1TeamsConvertToChannel()`

```php
postApiV1TeamsConvertToChannel($x_auth_token, $x_user_id, $post_api_v1_teams_convert_to_channel_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Convert Team to Channel

Convert a team to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_convert_to_channel_request = {"teamId":"612b8ae982d286c3d1f5db31"}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsConvertToChannelRequest

try {
    $result = $apiInstance->postApiV1TeamsConvertToChannel($x_auth_token, $x_user_id, $post_api_v1_teams_convert_to_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsConvertToChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_convert_to_channel_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsConvertToChannelRequest**](../Model/PostApiV1TeamsConvertToChannelRequest.md)|  | [optional] |

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

## `postApiV1TeamsCreate()`

```php
postApiV1TeamsCreate($x_auth_token, $x_user_id, $post_api_v1_teams_create_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response
```

Create a New Team

Creates a new team.   Permission required: `create-team permission`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_create_request = {"name":"teamName","type":0,"members":["8dugqGhuRvCBLdZft"],"room":{"readOnly":true},"sidepanel":{"items":["discussions","channels"]}}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsCreateRequest

try {
    $result = $apiInstance->postApiV1TeamsCreate($x_auth_token, $x_user_id, $post_api_v1_teams_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_create_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsCreateRequest**](../Model/PostApiV1TeamsCreateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsConvertToTeam200Response**](../Model/PostApiV1ChannelsConvertToTeam200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1TeamsDelete()`

```php
postApiV1TeamsDelete($x_auth_token, $x_user_id, $post_api_v1_teams_delete_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Delete a Team

Removes a team.   Permission required: `delete-team`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_delete_request = {"teamId":"mLGZGywfmLGZGywf","roomsToRemove":["8dugqGhuRvCBLdZft"]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsDeleteRequest

try {
    $result = $apiInstance->postApiV1TeamsDelete($x_auth_token, $x_user_id, $post_api_v1_teams_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_delete_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsDeleteRequest**](../Model/PostApiV1TeamsDeleteRequest.md)|  | [optional] |

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

## `postApiV1TeamsLeave()`

```php
postApiV1TeamsLeave($x_auth_token, $x_user_id, $post_api_v1_teams_leave_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Leave a Team

Leave a team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_leave_request = {"teamName":"team1","rooms":["8dugqGhuRvCBLdZft"]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsLeaveRequest

try {
    $result = $apiInstance->postApiV1TeamsLeave($x_auth_token, $x_user_id, $post_api_v1_teams_leave_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_leave_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsLeaveRequest**](../Model/PostApiV1TeamsLeaveRequest.md)|  | [optional] |

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

## `postApiV1TeamsRemoveMember()`

```php
postApiV1TeamsRemoveMember($x_auth_token, $x_user_id, $post_api_v1_teams_remove_member_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Remove Member from Team

Removes a member from a team.   Permission required: `edit-team-member`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_remove_member_request = {"teamId":"63f3efc4b000b6b6d86704b2","userId":"rYhzFRd2QZjNwAAXX","rooms":["JKa7R9zu2DinBhBN9"]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveMemberRequest | 

try {
    $result = $apiInstance->postApiV1TeamsRemoveMember($x_auth_token, $x_user_id, $post_api_v1_teams_remove_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsRemoveMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_remove_member_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveMemberRequest**](../Model/PostApiV1TeamsRemoveMemberRequest.md)|  | [optional] |

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

## `postApiV1TeamsRemoveRoom()`

```php
postApiV1TeamsRemoveRoom($x_user_id, $x_auth_token, $post_api_v1_teams_remove_room_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveRoom200Response
```

Remove room from the Team

Removes a room from a team.   Permission required: `remove-team-channel`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_teams_remove_room_request = {"teamId":"63f3efc4b000b6b6d86704b2","roomId":"JKa7R9zu2DinBhBN9"}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveRoomRequest

try {
    $result = $apiInstance->postApiV1TeamsRemoveRoom($x_user_id, $x_auth_token, $post_api_v1_teams_remove_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsRemoveRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_teams_remove_room_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveRoomRequest**](../Model/PostApiV1TeamsRemoveRoomRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsRemoveRoom200Response**](../Model/PostApiV1TeamsRemoveRoom200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1TeamsUpdate()`

```php
postApiV1TeamsUpdate($x_auth_token, $x_user_id, $post_api_v1_teams_update_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Update a Team

Updates an existing team (name and type).   Permission required: `edit-team`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_update_request = {"teamId":"ByehQjC44FwMeiLbX","data":{"name":"newTeamName","type":1}}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRequest

try {
    $result = $apiInstance->postApiV1TeamsUpdate($x_auth_token, $x_user_id, $post_api_v1_teams_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_update_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRequest**](../Model/PostApiV1TeamsUpdateRequest.md)|  | [optional] |

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

## `postApiV1TeamsUpdateMembers()`

```php
postApiV1TeamsUpdateMembers($x_auth_token, $x_user_id, $post_api_v1_teams_add_members_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddLeader200Response
```

Update Team Member Info

Updates a team member's roles.   Permission required: `edit-team-member`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_add_members_request = {"teamId":"63f3efc4b000b6b6d86704b2","members":[{"userId":"rYhzFRd2QZjNwAAXX","roles":["member"]}]}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddMembersRequest

try {
    $result = $apiInstance->postApiV1TeamsUpdateMembers($x_auth_token, $x_user_id, $post_api_v1_teams_add_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdateMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_add_members_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsAddMembersRequest**](../Model/PostApiV1TeamsAddMembersRequest.md)|  | [optional] |

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

## `postApiV1TeamsUpdateRoom()`

```php
postApiV1TeamsUpdateRoom($x_auth_token, $x_user_id, $post_api_v1_teams_update_room_request): \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRoom200Response
```

Update Room in a Team

Updates a room from a team.   Permission required: `edit-team-channel`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\RoomsApi\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_teams_update_room_request = {"roomId":"JKa7R9zu2DinBhBN9","isDefault":true}; // \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRoomRequest

try {
    $result = $apiInstance->postApiV1TeamsUpdateRoom($x_auth_token, $x_user_id, $post_api_v1_teams_update_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postApiV1TeamsUpdateRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_teams_update_room_request** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRoomRequest**](../Model/PostApiV1TeamsUpdateRoomRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsUpdateRoom200Response**](../Model/PostApiV1TeamsUpdateRoom200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
