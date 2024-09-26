# WebMI\RocketChatApiClient\OmnichannelApi\VoiceChannelServerConnectionApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1VoipCallServerCheckConnection()**](VoiceChannelServerConnectionApi.md#getApiV1VoipCallServerCheckConnection) | **GET** /api/v1/voip/callServer/checkConnection | Check Call Server Connection |
| [**getApiV1VoipManagementServerCheckConnection()**](VoiceChannelServerConnectionApi.md#getApiV1VoipManagementServerCheckConnection) | **GET** /api/v1/voip/managementServer/checkConnection | Check Management Server Connection |


## `getApiV1VoipCallServerCheckConnection()`

```php
getApiV1VoipCallServerCheckConnection($x_auth_token, $x_user_id, $websocket_url, $host, $port, $path): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1VoipCallServerCheckConnection200Response
```

Check Call Server Connection

Check the SIP call server connection status. Permission required: `manage-voip-contact-center-settings`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\VoiceChannelServerConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$websocket_url = wss://omni-asterisk.dev.rocket.chat/ws; // string | The websocket URL.
$host = localhost; // string | The hostname of the call server.
$port = 3000; // string | The port number of the websocket.
$path = test/voip; // string | The path of the websocket.

try {
    $result = $apiInstance->getApiV1VoipCallServerCheckConnection($x_auth_token, $x_user_id, $websocket_url, $host, $port, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelServerConnectionApi->getApiV1VoipCallServerCheckConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **websocket_url** | **string**| The websocket URL. | |
| **host** | **string**| The hostname of the call server. | |
| **port** | **string**| The port number of the websocket. | |
| **path** | **string**| The path of the websocket. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1VoipCallServerCheckConnection200Response**](../Model/GetApiV1VoipCallServerCheckConnection200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1VoipManagementServerCheckConnection()`

```php
getApiV1VoipManagementServerCheckConnection($x_auth_token, $x_user_id, $host, $port, $username, $password): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1VoipCallServerCheckConnection200Response
```

Check Management Server Connection

Check the VoIP management server connection status. Permission required: `manage-voip-contact-center-settings`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\VoiceChannelServerConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$host = localhost; // string | The hostname of the management server.
$port = 3000; // string | The port number of the management server.
$username = user1; // string | The user name of the administrator user.
$password = idosfiejifc354; // string | The password of the administrator user.

try {
    $result = $apiInstance->getApiV1VoipManagementServerCheckConnection($x_auth_token, $x_user_id, $host, $port, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelServerConnectionApi->getApiV1VoipManagementServerCheckConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **host** | **string**| The hostname of the management server. | |
| **port** | **string**| The port number of the management server. | |
| **username** | **string**| The user name of the administrator user. | |
| **password** | **string**| The password of the administrator user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1VoipCallServerCheckConnection200Response**](../Model/GetApiV1VoipCallServerCheckConnection200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
