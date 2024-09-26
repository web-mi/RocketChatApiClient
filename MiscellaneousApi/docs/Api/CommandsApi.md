# RocketChatMiscellaneousApi\CommandsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1CommandsGet()**](CommandsApi.md#getApiV1CommandsGet) | **GET** /api/v1/commands.get | Get Slash Commands |
| [**getApiV1CommandsList()**](CommandsApi.md#getApiV1CommandsList) | **GET** /api/v1/commands.list | List Slash Commands |
| [**getApiV1CommandsPreview()**](CommandsApi.md#getApiV1CommandsPreview) | **GET** /api/v1/commands.preview | Get Command&#39;s Preview Data |
| [**postApiV1CommandsPreview()**](CommandsApi.md#postApiV1CommandsPreview) | **POST** /api/v1/commands.preview | Execute command&#39;s preview item |
| [**postApiV1CommandsRun()**](CommandsApi.md#postApiV1CommandsRun) | **POST** /api/v1/commands.run | Execute a Slash Command |


## `getApiV1CommandsGet()`

```php
getApiV1CommandsGet($x_auth_token, $x_user_id, $command): \RocketChatMiscellaneousApi\Model\GetApiV1CommandsGet200Response
```

Get Slash Commands

Get specification of the slash command. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.2       | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$command = me; // string | The name of the command.

try {
    $result = $apiInstance->getApiV1CommandsGet($x_auth_token, $x_user_id, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **command** | **string**| The name of the command. | |

### Return type

[**\RocketChatMiscellaneousApi\Model\GetApiV1CommandsGet200Response**](../Model/GetApiV1CommandsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1CommandsList()`

```php
getApiV1CommandsList($x_auth_token, $x_user_id): \RocketChatMiscellaneousApi\Model\GetApiV1CommandsList200Response
```

List Slash Commands

Lists all available slash commands. ### Changelog | Version      | Description | | ---------------- | ------------| |0.60.2      | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1CommandsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatMiscellaneousApi\Model\GetApiV1CommandsList200Response**](../Model/GetApiV1CommandsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1CommandsPreview()`

```php
getApiV1CommandsPreview($x_auth_token, $x_user_id, $command, $room_id, $params): object
```

Get Command's Preview Data

Fetches the command's preview data or executes the preview item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$command = unmute; // string | The name of the command to be executed.
$room_id = ByehQjC44FwMeiLbX; // string | The ID of the room.
$params = @user123; // string | Parameters of the command if required. It is `undefined` by default.

try {
    $result = $apiInstance->getApiV1CommandsPreview($x_auth_token, $x_user_id, $command, $room_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getApiV1CommandsPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **command** | **string**| The name of the command to be executed. | |
| **room_id** | **string**| The ID of the room. | |
| **params** | **string**| Parameters of the command if required. It is &#x60;undefined&#x60; by default. | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1CommandsPreview()`

```php
postApiV1CommandsPreview($x_auth_token, $x_user_id, $post_api_v1_commands_preview_request): object
```

Execute command's preview item

### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0      | Added `tmid` and `triggerId` fields       | |0.65.0      | Added|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_commands_preview_request = {"command":"unmute","roomId":"ByehQjC44FwMeiLbX","tmid":"Hsj2435g4bvrj4bjh","params":"@user123","triggerId":"awovufbukuefzuper","previewItem":{"id":"nucobdipokaikazia","type":"image","value":"https://dev.null/gif"}}; // \RocketChatMiscellaneousApi\Model\PostApiV1CommandsPreviewRequest

try {
    $result = $apiInstance->postApiV1CommandsPreview($x_auth_token, $x_user_id, $post_api_v1_commands_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->postApiV1CommandsPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_commands_preview_request** | [**\RocketChatMiscellaneousApi\Model\PostApiV1CommandsPreviewRequest**](../Model/PostApiV1CommandsPreviewRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1CommandsRun()`

```php
postApiV1CommandsRun($x_auth_token, $x_user_id, $post_api_v1_commands_run_request): \RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Execute a Slash Command

Execute a slash command in the specified room. ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0      | Added `triggerId` property       | |2.0.0      | Added `tmid` property      | |0.60.2      | Added        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_commands_run_request = {"command":"unmute","roomId":"ByehQjC44FwMeiLbX","params":"@user123","tmid":"Hsj2435g4bvrj4bjh","triggerId":"awovufbukuefzuper"}; // \RocketChatMiscellaneousApi\Model\PostApiV1CommandsRunRequest

try {
    $result = $apiInstance->postApiV1CommandsRun($x_auth_token, $x_user_id, $post_api_v1_commands_run_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->postApiV1CommandsRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_commands_run_request** | [**\RocketChatMiscellaneousApi\Model\PostApiV1CommandsRunRequest**](../Model/PostApiV1CommandsRunRequest.md)|  | [optional] |

### Return type

[**\RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
