# WebMI\RocketChatApiClient\StatisticsApi\MessagesEngagementApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1EngagementDashboardMessagesMessagesSent()**](MessagesEngagementApi.md#getApiV1EngagementDashboardMessagesMessagesSent) | **GET** /api/v1/engagement-dashboard/messages/messages-sent | Get Number of Sent Messages |
| [**getApiV1EngagementDashboardMessagesOrigin()**](MessagesEngagementApi.md#getApiV1EngagementDashboardMessagesOrigin) | **GET** /api/v1/engagement-dashboard/messages/origin | Get Origin of Message Sent |
| [**getApiV1EngagementDashboardMessagesTopFivePopularChannels()**](MessagesEngagementApi.md#getApiV1EngagementDashboardMessagesTopFivePopularChannels) | **GET** /api/v1/engagement-dashboard/messages/top-five-popular-channels | Get the Most Popular Channels |


## `getApiV1EngagementDashboardMessagesMessagesSent()`

```php
getApiV1EngagementDashboardMessagesMessagesSent($x_auth_token, $x_user_id, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesMessagesSent200Response
```

Get Number of Sent Messages

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the number of messages sent daily during a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesMessagesSent($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesMessagesSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesMessagesSent200Response**](../Model/GetApiV1EngagementDashboardMessagesMessagesSent200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardMessagesOrigin()`

```php
getApiV1EngagementDashboardMessagesOrigin($x_auth_token, $x_user_id, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesOrigin200Response
```

Get Origin of Message Sent

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the origin of messages sent during a specific period. It highlights the number of messages sent in private channels, private chats, and public channels.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesOrigin($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesOrigin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesOrigin200Response**](../Model/GetApiV1EngagementDashboardMessagesOrigin200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardMessagesTopFivePopularChannels()`

```php
getApiV1EngagementDashboardMessagesTopFivePopularChannels($x_auth_token, $x_user_id, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesTopFivePopularChannels200Response
```

Get the Most Popular Channels

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves the top 5 popular channels in your workspace by the number of messages sent. It highlights the number of messages sent in private channels, private chats, and public channels.   Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\MessagesEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardMessagesTopFivePopularChannels($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesEngagementApi->getApiV1EngagementDashboardMessagesTopFivePopularChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardMessagesTopFivePopularChannels200Response**](../Model/GetApiV1EngagementDashboardMessagesTopFivePopularChannels200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
