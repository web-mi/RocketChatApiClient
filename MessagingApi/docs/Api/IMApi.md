# WebMIRocketChatApiClientMessagingApi\IMApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ImCounters()**](IMApi.md#getApiV1ImCounters) | **GET** /api/v1/im.counters | Get DM Counters |
| [**getApiV1ImFiles()**](IMApi.md#getApiV1ImFiles) | **GET** /api/v1/im.files | Get DM Files |
| [**getApiV1ImHistory()**](IMApi.md#getApiV1ImHistory) | **GET** /api/v1/im.history | DM History |
| [**getApiV1ImList()**](IMApi.md#getApiV1ImList) | **GET** /api/v1/im.list | List DMs |
| [**getApiV1ImListEveryone()**](IMApi.md#getApiV1ImListEveryone) | **GET** /api/v1/im.list.everyone | List All DMs |
| [**getApiV1ImMembers()**](IMApi.md#getApiV1ImMembers) | **GET** /api/v1/im.members | List DM Members |
| [**getApiV1ImMessages()**](IMApi.md#getApiV1ImMessages) | **GET** /api/v1/im.messages | List DM Messages |
| [**getApiV1ImMessagesOthers()**](IMApi.md#getApiV1ImMessagesOthers) | **GET** /api/v1/im.messages.others | Message Others |
| [**postApiV1ImClose()**](IMApi.md#postApiV1ImClose) | **POST** /api/v1/im.close | Close DM |
| [**postApiV1ImCreate()**](IMApi.md#postApiV1ImCreate) | **POST** /api/v1/im.create | Create DM |
| [**postApiV1ImDelete()**](IMApi.md#postApiV1ImDelete) | **POST** /api/v1/im.delete | Delete DM |
| [**postApiV1ImOpen()**](IMApi.md#postApiV1ImOpen) | **POST** /api/v1/im.open | Open DM |
| [**postApiV1ImSetTopic()**](IMApi.md#postApiV1ImSetTopic) | **POST** /api/v1/im.setTopic | Set DM Topic |


## `getApiV1ImCounters()`

```php
getApiV1ImCounters($x_auth_token, $x_user_id, $room_id, $user_id): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImCounters200Response
```

Get DM Counters

Gets counters and information of direct messages. Permission required: `view-room-administration`.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.65.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 'room_id_example'; // string | The DM room ID
$user_id = 'user_id_example'; // string | The user ID to provide counters for.

try {
    $result = $apiInstance->getApiV1ImCounters($x_auth_token, $x_user_id, $room_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImCounters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The DM room ID | |
| **user_id** | **string**| The user ID to provide counters for. | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImCounters200Response**](../Model/GetApiV1ImCounters200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImFiles()`

```php
getApiV1ImFiles($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImFiles200Response
```

Get DM Files

Get all files in a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.64.0            | Change `userId` to `user` object in response| |0.59.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
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
$room_id = 'room_id_example'; // string | The roomId of the DM. It is required if `username` is not provided.
$username = 'username_example'; // string | The username of the user in the DM. It is required if `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ImFiles($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImFiles: ', $e->getMessage(), PHP_EOL;
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
| **room_id** | **string**| The roomId of the DM. It is required if &#x60;username&#x60; is not provided. | [optional] |
| **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImFiles200Response**](../Model/GetApiV1ImFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImHistory()`

```php
getApiV1ImHistory($x_auth_token, $x_user_id, $room_id, $offset, $count, $latest, $oldest, $inclusive, $unreads): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImHistory200Response
```

DM History

Retrieves the message history from a direct message. ### Change Log | Version | Description             | | ------- | ----------------------- | | 0.75.0  | Added `offset` property | | 0.48.0  | Added                   |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 6GFJ3tbmHiyHbahmC; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$latest = 2016-09-30T13:42:25.304Z; // string | The end of time range of messages to retrieve.
$oldest = 2016-05-30T13:42:25.304Z; // string | The start of the time range of messages to retrieve.
$inclusive = true; // string | Whether messages which land on the `latest` and `oldest` dates should be included.
$unreads = True; // bool | Whether the number of unread messages should be included.

try {
    $result = $apiInstance->getApiV1ImHistory($x_auth_token, $x_user_id, $room_id, $offset, $count, $latest, $oldest, $inclusive, $unreads);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImHistory: ', $e->getMessage(), PHP_EOL;
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
| **latest** | **string**| The end of time range of messages to retrieve. | [optional] |
| **oldest** | **string**| The start of the time range of messages to retrieve. | [optional] |
| **inclusive** | **string**| Whether messages which land on the &#x60;latest&#x60; and &#x60;oldest&#x60; dates should be included. | [optional] |
| **unreads** | **bool**| Whether the number of unread messages should be included. | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImHistory200Response**](../Model/GetApiV1ImHistory200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImList()`

```php
getApiV1ImList($x_auth_token, $x_user_id, $offset, $count, $sort): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImList200Response
```

List DMs

List all the DMs of the authenticated user.   ### Change Log  | Version | Description                                  | | ------- | -------------------------------------------- | | 0.67.0  | Remove `query` parameter support.            | | 0.62.0  | Add `query` parameter support.               | | 0.49.0  | Count and offset query parameters supported. | | 0.48.0  | Added                                        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`

try {
    $result = $apiInstance->getApiV1ImList($x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImList200Response**](../Model/GetApiV1ImList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImListEveryone()`

```php
getApiV1ImListEveryone($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImListEveryone200Response
```

List All DMs

List all DMs in the workspace.    Permission required:`view-room-administration`.  ### Changelog | Version      | Description |  | ------------ | ------------| |0.49.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
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

try {
    $result = $apiInstance->getApiV1ImListEveryone($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImListEveryone: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImListEveryone200Response**](../Model/GetApiV1ImListEveryone200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImMembers()`

```php
getApiV1ImMembers($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $username): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImMembers200Response
```

List DM Members

List all the members of a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.59.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{ \"value\": -1, \"_id\": 1 }`
$room_id = 'room_id_example'; // string | The room ID of the DM. It is required if `username` is not provided.
$username = 'username_example'; // string | The username of the user in the DM. It is required if `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ImMembers($x_auth_token, $x_user_id, $offset, $count, $sort, $room_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMembers: ', $e->getMessage(), PHP_EOL;
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
| **room_id** | **string**| The room ID of the DM. It is required if &#x60;username&#x60; is not provided. | [optional] |
| **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImMembers200Response**](../Model/GetApiV1ImMembers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImMessages()`

```php
getApiV1ImMessages($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImMessages200Response
```

List DM Messages

List all the messages in a DM.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.59.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
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
$room_id = 'room_id_example'; // string | The room ID of the DM. It is required if `username` is not provided.
$username = 'username_example'; // string | The username of the user in the DM. It is required if `roomId` is not provided.

try {
    $result = $apiInstance->getApiV1ImMessages($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $room_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMessages: ', $e->getMessage(), PHP_EOL;
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
| **room_id** | **string**| The room ID of the DM. It is required if &#x60;username&#x60; is not provided. | [optional] |
| **username** | **string**| The username of the user in the DM. It is required if &#x60;roomId&#x60; is not provided. | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImMessages200Response**](../Model/GetApiV1ImMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ImMessagesOthers()`

```php
getApiV1ImMessagesOthers($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields): \WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImHistory200Response
```

Message Others

Retrieves the messages from any direct message in the server.  For this method to work, navigate to  **Administration > Workspace > Settings > General > REST API > Enable Direct Message History Endpoint** and enable it.   Permission required: `view-room-administration`. ### Change Log | Version | Description             | | ------- | ----------------------- | | 0.50.0  | Added                   |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
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
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" }}`
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`

try {
    $result = $apiInstance->getApiV1ImMessagesOthers($x_auth_token, $x_user_id, $room_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->getApiV1ImMessagesOthers: ', $e->getMessage(), PHP_EOL;
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
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; }}&#x60; | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60; | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\GetApiV1ImHistory200Response**](../Model/GetApiV1ImHistory200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ImClose()`

```php
postApiV1ImClose($x_auth_token, $x_user_id, $post_api_v1_im_close_request): \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response
```

Close DM

Removes the direct message from the user's list of direct messages.  ### Changelog | Version      | Description |  | ------------ | ------------| | 0.48.0       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_im_close_request = {"roomId":"ByehQjC44FwMeiLbX"}; // \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCloseRequest

try {
    $result = $apiInstance->postApiV1ImClose($x_auth_token, $x_user_id, $post_api_v1_im_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_im_close_request** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCloseRequest**](../Model/PostApiV1ImCloseRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ImCreate()`

```php
postApiV1ImCreate($x_auth_token, $x_user_id, $post_api_v1_im_create_request): \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCreate200Response
```

Create DM

Create a direct message session with another user or more than one user.  #### Change Log | Version | Description              | | ------- | ------------------------ | | 0.59.0  | Added                    | | 3.1.0   | Added usernames fields   | | 3.18.0  | Added excludeSelf option |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_im_create_request = {"username":"kim.dok","excludeSelf":true}; // \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCreateRequest

try {
    $result = $apiInstance->postApiV1ImCreate($x_auth_token, $x_user_id, $post_api_v1_im_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_im_create_request** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCreateRequest**](../Model/PostApiV1ImCreateRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCreate200Response**](../Model/PostApiV1ImCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ImDelete()`

```php
postApiV1ImDelete($x_auth_token, $x_user_id, $post_api_v1_im_delete_request): \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response
```

Delete DM

Delete a DM. Permission required: `view-room-administration`.  ### Changelog | Version      | Description |  | ------------ | ------------| |3.18.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_im_delete_request = {"roomId":"hdy9972092873h8s7s0"}; // \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImDeleteRequest

try {
    $result = $apiInstance->postApiV1ImDelete($x_auth_token, $x_user_id, $post_api_v1_im_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_im_delete_request** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImDeleteRequest**](../Model/PostApiV1ImDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ImOpen()`

```php
postApiV1ImOpen($x_auth_token, $x_user_id, $post_api_v1_im_close_request): \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response
```

Open DM

Adds a DM back to the user's list of direct messages.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_im_close_request = {"roomId":"5fRTXMt7DMJbpPJfhrbAXPnMktTFbNpwtJ"}; // \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCloseRequest

try {
    $result = $apiInstance->postApiV1ImOpen($x_auth_token, $x_user_id, $post_api_v1_im_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImOpen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_im_close_request** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImCloseRequest**](../Model/PostApiV1ImCloseRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatReact200Response**](../Model/PostApiV1ChatReact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ImSetTopic()`

```php
postApiV1ImSetTopic($x_auth_token, $x_user_id, $post_api_v1_im_set_topic_request): \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImSetTopic200Response
```

Set DM Topic

Set the topic of a DM.  ### Changelog | Version      | Description |  | ---------------- | ------------| | 0.48.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMessagingApi\Api\IMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_im_set_topic_request = {"roomId":"ByehQjC44FwMeiLbX","topic":"Discuss all of the testing"}; // \WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImSetTopicRequest

try {
    $result = $apiInstance->postApiV1ImSetTopic($x_auth_token, $x_user_id, $post_api_v1_im_set_topic_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IMApi->postApiV1ImSetTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_im_set_topic_request** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImSetTopicRequest**](../Model/PostApiV1ImSetTopicRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ImSetTopic200Response**](../Model/PostApiV1ImSetTopic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
