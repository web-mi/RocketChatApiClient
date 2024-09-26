# RocketChatOmnichannelApi\LivechatUsersApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatUsersTypeId()**](LivechatUsersApi.md#deleteApiV1LivechatUsersTypeId) | **DELETE** /api/v1/livechat/users/{type}/{_id} | Remove Agent or Manager |
| [**getApiV1LivechatUsersType()**](LivechatUsersApi.md#getApiV1LivechatUsersType) | **GET** /api/v1/livechat/users/{type} | Get List of Agents or Managers |
| [**getApiV1LivechatUsersTypeId()**](LivechatUsersApi.md#getApiV1LivechatUsersTypeId) | **GET** /api/v1/livechat/users/{type}/{_id} | Get Agent or Manager Information |
| [**postApiV1LivechatUsersType()**](LivechatUsersApi.md#postApiV1LivechatUsersType) | **POST** /api/v1/livechat/users/{type} | Register New Agent or Manager |


## `deleteApiV1LivechatUsersTypeId()`

```php
deleteApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Remove Agent or Manager

Remove a user as an agent or a manager. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$type = 'type_example'; // string | The type of user. The value can either be `agent` or `manager`.
$_id = SQafHvoFPuB57NmBD; // string | The user ID.

try {
    $result = $apiInstance->deleteApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->deleteApiV1LivechatUsersTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **type** | **string**| The type of user. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. | |
| **_id** | **string**| The user ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUsersType()`

```php
getApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $offset, $count, $sort, $text): \RocketChatOmnichannelApi\Model\GetApiV1LivechatUsersType200Response
```

Get List of Agents or Managers

* If the `type` is `manager`, permission required: `view-livechat-manager`. * If the `type` is `agent`, permission required: at least one of `transfer-livechat-guest` or `edit-omnichannel-contact`.  ### Changelog | Version      | Description | | ---------------- | ------------| |2.2.0             | Added support to pagination       | |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$type = agent; // string | The type of user that you want to register. The value can either be `agent` or `manager`.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = 'text_example'; // string | Enter the text you want to filter the search result with.

try {
    $result = $apiInstance->getApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->getApiV1LivechatUsersType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **type** | **string**| The type of user that you want to register. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |
| **text** | **string**| Enter the text you want to filter the search result with. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatUsersType200Response**](../Model/GetApiV1LivechatUsersType200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUsersTypeId()`

```php
getApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatUsersTypeId200Response
```

Get Agent or Manager Information

Get information about a particular agent or a manager. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$type = 'type_example'; // string | The type of user. The value can either be `agent` or `manager`.
$_id = SQafHvoFPuB57NmBD; // string | The user ID.

try {
    $result = $apiInstance->getApiV1LivechatUsersTypeId($x_auth_token, $x_user_id, $type, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->getApiV1LivechatUsersTypeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **type** | **string**| The type of user. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. | |
| **_id** | **string**| The user ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatUsersTypeId200Response**](../Model/GetApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatUsersType()`

```php
postApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $post_api_v1_livechat_users_type_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatUsersType200Response
```

Register New Agent or Manager

Register a new <a href='https://docs.rocket.chat/use-rocket.chat/omnichannel/agents' target='_blank'>agent</a> or <a href='https://docs.rocket.chat/use-rocket.chat/omnichannel/managers' target='_blank'>manager</a>. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description | | ------------ | ------------| |0.42.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$type = agent; // string | The type of user that you want to register. The value can either be `agent` or `manager`.
$post_api_v1_livechat_users_type_request = {"username":"john.doe"}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatUsersTypeRequest

try {
    $result = $apiInstance->postApiV1LivechatUsersType($x_auth_token, $x_user_id, $type, $post_api_v1_livechat_users_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUsersApi->postApiV1LivechatUsersType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **type** | **string**| The type of user that you want to register. The value can either be &#x60;agent&#x60; or &#x60;manager&#x60;. | |
| **post_api_v1_livechat_users_type_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatUsersTypeRequest**](../Model/PostApiV1LivechatUsersTypeRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatUsersType200Response**](../Model/PostApiV1LivechatUsersType200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
