# RocketChatOmnichannelApi\LivechatMonitorsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatMonitors()**](LivechatMonitorsApi.md#getApiV1LivechatMonitors) | **GET** /api/v1/livechat/monitors | Get List of Monitors |
| [**getApiV1LivechatMonitorsGetOne()**](LivechatMonitorsApi.md#getApiV1LivechatMonitorsGetOne) | **GET** /api/v1/livechat/monitors.getOne | Get One Monitor |
| [**getApiV1LivechatMonitorsList()**](LivechatMonitorsApi.md#getApiV1LivechatMonitorsList) | **GET** /api/v1/livechat/monitors.list | List of Monitors |
| [**getApiV1LivechatMonitorsUsername()**](LivechatMonitorsApi.md#getApiV1LivechatMonitorsUsername) | **GET** /api/v1/livechat/monitors/{username} | Get a Monitor |


## `getApiV1LivechatMonitors()`

```php
getApiV1LivechatMonitors($x_auth_token, $x_user_id, $offset, $count, $sort, $text): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitors200Response
```

Get List of Monitors

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves a list of <a href='https://docs.rocket.chat/docs/monitors' target='_blank'>monitors</a>. Permission required: `manage-livechat-monitors`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = 'text_example'; // string | Filter the result with the text.

try {
    $result = $apiInstance->getApiV1LivechatMonitors($x_auth_token, $x_user_id, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMonitorsApi->getApiV1LivechatMonitors: ', $e->getMessage(), PHP_EOL;
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
| **text** | **string**| Filter the result with the text. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitors200Response**](../Model/GetApiV1LivechatMonitors200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatMonitorsGetOne()`

```php
getApiV1LivechatMonitorsGetOne($x_auth_token, $x_user_id, $username): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsGetOne200Response
```

Get One Monitor

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to Get a Monitor as from Rocket.Chat 5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$username = 'username_example'; // string | The username of the person monitoring.

try {
    $result = $apiInstance->getApiV1LivechatMonitorsGetOne($x_auth_token, $x_user_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMonitorsApi->getApiV1LivechatMonitorsGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **username** | **string**| The username of the person monitoring. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsGetOne200Response**](../Model/GetApiV1LivechatMonitorsGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatMonitorsList()`

```php
getApiV1LivechatMonitorsList($x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsList200Response
```

List of Monitors

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to Get List of Monitors as from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatMonitorsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMonitorsApi->getApiV1LivechatMonitorsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsList200Response**](../Model/GetApiV1LivechatMonitorsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatMonitorsUsername()`

```php
getApiV1LivechatMonitorsUsername($x_auth_token, $x_user_id, $username): \RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsUsername200Response
```

Get a Monitor

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get details of a specific monitor. Permission required: `manage-livechat-monitors`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatMonitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$username = 1-agent; // string | The username of the person monitoring.

try {
    $result = $apiInstance->getApiV1LivechatMonitorsUsername($x_auth_token, $x_user_id, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatMonitorsApi->getApiV1LivechatMonitorsUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **username** | **string**| The username of the person monitoring. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatMonitorsUsername200Response**](../Model/GetApiV1LivechatMonitorsUsername200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
