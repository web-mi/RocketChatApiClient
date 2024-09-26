# RocketChatOmnichannelApi\AgentExtensionsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1OmnichannelAgentExtensionUsername()**](AgentExtensionsApi.md#deleteApiV1OmnichannelAgentExtensionUsername) | **DELETE** /api/v1/omnichannel/agent/extension/{username} | Delete Omnichannel Agent Extension |
| [**getApiV1OmnichannelAgentExtensionUsername()**](AgentExtensionsApi.md#getApiV1OmnichannelAgentExtensionUsername) | **GET** /api/v1/omnichannel/agent/extension/{username} | Get Omnichannel Agent Extension |
| [**postApiV1OmnichannelAgentExtension()**](AgentExtensionsApi.md#postApiV1OmnichannelAgentExtension) | **POST** /api/v1/omnichannel/agent/extension | Update Omnichannel Agent Extension |


## `deleteApiV1OmnichannelAgentExtensionUsername()`

```php
deleteApiV1OmnichannelAgentExtensionUsername($username, $x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Delete Omnichannel Agent Extension

Permission required: `manage-agent-extension-association`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\AgentExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | The user name of the agent.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->deleteApiV1OmnichannelAgentExtensionUsername($username, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentExtensionsApi->deleteApiV1OmnichannelAgentExtensionUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The user name of the agent. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

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

## `getApiV1OmnichannelAgentExtensionUsername()`

```php
getApiV1OmnichannelAgentExtensionUsername($x_auth_token, $x_user_id, $username)
```

Get Omnichannel Agent Extension

Permission required: `view-agent-extension-association`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\AgentExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$username = 'username_example'; // string | The user name of the agent.

try {
    $apiInstance->getApiV1OmnichannelAgentExtensionUsername($x_auth_token, $x_user_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling AgentExtensionsApi->getApiV1OmnichannelAgentExtensionUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **username** | **string**| The user name of the agent. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1OmnichannelAgentExtension()`

```php
postApiV1OmnichannelAgentExtension($x_auth_token, $x_user_id, $user_id, $extension)
```

Update Omnichannel Agent Extension

Update the extension associated with a specific agent.  Permission required: `manage-agent-extension-association`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\AgentExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$user_id = 'user_id_example'; // string | The value of the user ID. Alternatively, you can enter the `username` parameter.
$extension = 'extension_example'; // string | The extension number that you want to update.

try {
    $apiInstance->postApiV1OmnichannelAgentExtension($x_auth_token, $x_user_id, $user_id, $extension);
} catch (Exception $e) {
    echo 'Exception when calling AgentExtensionsApi->postApiV1OmnichannelAgentExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **user_id** | **string**| The value of the user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. | |
| **extension** | **string**| The extension number that you want to update. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
