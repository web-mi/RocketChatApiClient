# RocketChatStatisticsApi\ChannelsEngagementApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1EngagementDashboardChannelsList()**](ChannelsEngagementApi.md#getApiV1EngagementDashboardChannelsList) | **GET** /api/v1/engagement-dashboard/channels/list | Get Channels Engagement |


## `getApiV1EngagementDashboardChannelsList()`

```php
getApiV1EngagementDashboardChannelsList($x_auth_token, $x_user_id, $start, $end, $count, $offset): \RocketChatStatisticsApi\Model\GetApiV1EngagementDashboardChannelsList200Response
```

Get Channels Engagement

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve all channels and the number of messages in each channel within a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatStatisticsApi\Api\ChannelsEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.
$count = 50; // int | The number of items to return.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return `count` items, skipping the first `offset` items.

try {
    $result = $apiInstance->getApiV1EngagementDashboardChannelsList($x_auth_token, $x_user_id, $start, $end, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsEngagementApi->getApiV1EngagementDashboardChannelsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return &#x60;count&#x60; items, skipping the first &#x60;offset&#x60; items. | [optional] |

### Return type

[**\RocketChatStatisticsApi\Model\GetApiV1EngagementDashboardChannelsList200Response**](../Model/GetApiV1EngagementDashboardChannelsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
