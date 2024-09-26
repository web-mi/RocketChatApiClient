# WebMIRocketChatApiClientOmnichannelApi\LivechatTriggersApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatTriggersId()**](LivechatTriggersApi.md#deleteApiV1LivechatTriggersId) | **DELETE** /api/v1/livechat/triggers/{_id} | Delete a trigger |
| [**getApiV1LivechatTriggers()**](LivechatTriggersApi.md#getApiV1LivechatTriggers) | **GET** /api/v1/livechat/triggers | Get List of Livechat Triggers |
| [**getApiV1LivechatTriggersId()**](LivechatTriggersApi.md#getApiV1LivechatTriggersId) | **GET** /api/v1/livechat/triggers/{_id} | Get Livechat Trigger |
| [**postApiV1LivechatTriggers()**](LivechatTriggersApi.md#postApiV1LivechatTriggers) | **POST** /api/v1/livechat/triggers | Create or Update Livechat Triggers |


## `deleteApiV1LivechatTriggersId()`

```php
deleteApiV1LivechatTriggersId($x_auth_token, $x_user_id, $_id): \WebMIRocketChatApiClientOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Delete a trigger

Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = Lk52shJFYyb55trw8; // string | The trigger ID.

try {
    $result = $apiInstance->deleteApiV1LivechatTriggersId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTriggersApi->deleteApiV1LivechatTriggersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The trigger ID. | |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatTriggers()`

```php
getApiV1LivechatTriggers($x_auth_token, $x_user_id, $offset, $count, $sort): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatTriggers200Response
```

Get List of Livechat Triggers

Permission required: `view-livechat-manager` ### Changelog | Version      | Description | | ---------------- | ------------| |2.2.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatTriggers($x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTriggersApi->getApiV1LivechatTriggers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatTriggers200Response**](../Model/GetApiV1LivechatTriggers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatTriggersId()`

```php
getApiV1LivechatTriggersId($_id, $x_auth_token, $x_user_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatTriggersId200Response
```

Get Livechat Trigger

Get the details about a specific trigger.  Permission required: `view-livechat-manager` ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = Lk52shJFYyb55trw8; // string | The trigger ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatTriggersId($_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTriggersApi->getApiV1LivechatTriggersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The trigger ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatTriggersId200Response**](../Model/GetApiV1LivechatTriggersId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatTriggers()`

```php
postApiV1LivechatTriggers($x_auth_token, $x_user_id, $post_api_v1_livechat_triggers_request): \WebMIRocketChatApiClientOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Create or Update Livechat Triggers

Permission required: `view-livechat-manager`  See the <a href=\"https://docs.rocket.chat/docs/livechat-triggers\" target=\"_blank\">Livechat Triggers</a> guide for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_triggers_request = {"name":"api-trigger","description":"testing create trigger endpoint","enabled":false,"runOnce":true,"conditions":[{"name":"chat-opened-by-visitor","value":0}],"actions":[{"name":"send-message","params":{"sender":"queue","msg":"hello world"}}]}; // \WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatTriggersRequest

try {
    $result = $apiInstance->postApiV1LivechatTriggers($x_auth_token, $x_user_id, $post_api_v1_livechat_triggers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTriggersApi->postApiV1LivechatTriggers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_triggers_request** | [**\WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatTriggersRequest**](../Model/PostApiV1LivechatTriggersRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
