# RocketChatOmnichannelApi\LivechatAgentsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatAgent()**](LivechatAgentsApi.md#getApiV1LivechatAgent) | **GET** /api/v1/livechat/agent.info/{rid}/{token} | Get Agent Information |
| [**getApiV1LivechatAgentNext()**](LivechatAgentsApi.md#getApiV1LivechatAgentNext) | **GET** /api/v1/livechat/agent.next/{token} | Get Next Agent Information |
| [**getApiV1OmnichannelAgentsAvailable()**](LivechatAgentsApi.md#getApiV1OmnichannelAgentsAvailable) | **GET** /api/v1/omnichannel/agents/available | Get Available Agent Information |


## `getApiV1LivechatAgent()`

```php
getApiV1LivechatAgent($rid, $token): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAgent200Response
```

Get Agent Information

Get the Livechat agent data according to the path variables. To get the `rid` and `token` values, call the <a href=\"https://developer.rocket.chat/apidocs/get-rooms\" target=\"_blank\">Get Rooms</a> endpoint to retrieve the details of all rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rid = zRAeTszXor8CCPceB; // string | The room ID.
$token = iNKE8a6k6cjbqWhWd; // string | The visitor token.

try {
    $result = $apiInstance->getApiV1LivechatAgent($rid, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentsApi->getApiV1LivechatAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rid** | **string**| The room ID. | |
| **token** | **string**| The visitor token. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAgent200Response**](../Model/GetApiV1LivechatAgent200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAgentNext()`

```php
getApiV1LivechatAgentNext($token): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAgentNext200Response
```

Get Next Agent Information

Get information about the next available agent for an incoming conversation. This endpoint returns the available agents who have not been assigned to any chat yet. To get the `token` value, call the <a href=\"https://developer.rocket.chat/apidocs/get-rooms\" target=\"_blank\">Get Rooms</a> endpoint to retrieve the details of all rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The visitor token.

try {
    $result = $apiInstance->getApiV1LivechatAgentNext($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentsApi->getApiV1LivechatAgentNext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAgentNext200Response**](../Model/GetApiV1LivechatAgentNext200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1OmnichannelAgentsAvailable()`

```php
getApiV1OmnichannelAgentsAvailable($x_auth_token, $x_user_id, $query, $text, $include_extension, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelAgentsAvailable200Response
```

Get Available Agent Information

Get information about the currently available agent. Permission required: `manage-agent-extension-association`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$query = 'query_example'; // string | Use the query operator to search for specific data.  For more information, see <a href=\"https://developer.rocket.chat/apidocs/query-parameters\" target=\"_blank\">Query Parameters</a>.
$text = 'text_example'; // string | The response is the data that contains this text.
$include_extension = 'include_extension_example'; // string | The voice channel extension associated with the agent. If you don't enter any extension number, the endpoint returns a list of all agents who have not been assigned any extensions. For information about extensions, see <a href=\"https://docs.rocket.chat/docs/associate-agents-with-extensions-in-rocketchat\" target=\"_blank\">Associate agents with extensions in Rocket.Chat</a>.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1OmnichannelAgentsAvailable($x_auth_token, $x_user_id, $query, $text, $include_extension, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentsApi->getApiV1OmnichannelAgentsAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **query** | **string**| Use the query operator to search for specific data.  For more information, see &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/query-parameters\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Query Parameters&lt;/a&gt;. | [optional] |
| **text** | **string**| The response is the data that contains this text. | [optional] |
| **include_extension** | **string**| The voice channel extension associated with the agent. If you don&#39;t enter any extension number, the endpoint returns a list of all agents who have not been assigned any extensions. For information about extensions, see &lt;a href&#x3D;\&quot;https://docs.rocket.chat/docs/associate-agents-with-extensions-in-rocketchat\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Associate agents with extensions in Rocket.Chat&lt;/a&gt;. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1OmnichannelAgentsAvailable200Response**](../Model/GetApiV1OmnichannelAgentsAvailable200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
