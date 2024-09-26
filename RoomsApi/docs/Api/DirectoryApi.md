# RocketChatRoomsApi\DirectoryApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1Directory()**](DirectoryApi.md#getApiV1Directory) | **GET** /api/v1/directory | Directory |


## `getApiV1Directory()`

```php
getApiV1Directory($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields): \RocketChatRoomsApi\Model\GetApiV1Directory200Response
```

Directory

Search workspace directory for users, channels and teams.   ### Changelog | Version | Description | | ------- | ----------- | | 1.0.0   | Added workspace query param | | 0.65.0  | Added Pagination fields: count, total, offset | | 0.64.0  | Added |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatRoomsApi\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$query = {"text": "rocket", "type": "users", "workspace": "local"}; // mixed | The query to search the workspace directory. When `type` is users you can send an additional workspace field, that can be local (default) or all. Workspace=all will work only if <a href=\"https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\" target=\"_blank\">federation</a> is enabled.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1Directory($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getApiV1Directory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **query** | [**mixed**](../Model/.md)| The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\RocketChatRoomsApi\Model\GetApiV1Directory200Response**](../Model/GetApiV1Directory200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
