# RocketChatContentManagementApi\CustomSoundsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1CustomSoundsList()**](CustomSoundsApi.md#getApiV1CustomSoundsList) | **GET** /api/v1/custom-sounds.list | List Custom Sounds |


## `getApiV1CustomSoundsList()`

```php
getApiV1CustomSoundsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields): \RocketChatContentManagementApi\Model\GetApiV1CustomSoundsList200Response
```

List Custom Sounds

List all custom sounds.   ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatContentManagementApi\Api\CustomSoundsApi(
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
    $result = $apiInstance->getApiV1CustomSoundsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSoundsApi->getApiV1CustomSoundsList: ', $e->getMessage(), PHP_EOL;
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

[**\RocketChatContentManagementApi\Model\GetApiV1CustomSoundsList200Response**](../Model/GetApiV1CustomSoundsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
