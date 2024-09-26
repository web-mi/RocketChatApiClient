# WebMIRocketChatApiClientOmnichannelApi\LivechatStatisticsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatAnalyticsAgentOverview()**](LivechatStatisticsApi.md#getApiV1LivechatAnalyticsAgentOverview) | **GET** /api/v1/livechat/analytics/agent-overview | Get Agent Analytics Overview |
| [**getApiV1LivechatAnalyticsOverview()**](LivechatStatisticsApi.md#getApiV1LivechatAnalyticsOverview) | **GET** /api/v1/livechat/analytics/overview | Get Analytics Overview |


## `getApiV1LivechatAnalyticsAgentOverview()`

```php
getApiV1LivechatAnalyticsAgentOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentOverview200Response
```

Get Agent Analytics Overview

Get the analytics overview for the agents in your workspace. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$name = 'name_example'; // string | The data that you want to get. The available options are:   * `Total_conversations` * `Avg_chat_duration` * `Total_messages` * `Avg_first_response_time` * `Best_first_response_time` * `Avg_response_time` * `Avg_reaction_time`
$from = 2019-05-22T12:11:45.392Z; // string | The start date
$to = 2023-05-22T12:11:45.392Z; // string | The end date
$department_id = The department ID to return results for.; // string | The department ID to return results for.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsAgentOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatStatisticsApi->getApiV1LivechatAnalyticsAgentOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **name** | **string**| The data that you want to get. The available options are:   * &#x60;Total_conversations&#x60; * &#x60;Avg_chat_duration&#x60; * &#x60;Total_messages&#x60; * &#x60;Avg_first_response_time&#x60; * &#x60;Best_first_response_time&#x60; * &#x60;Avg_response_time&#x60; * &#x60;Avg_reaction_time&#x60; | |
| **from** | **string**| The start date | |
| **to** | **string**| The end date | |
| **department_id** | **string**| The department ID to return results for. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentOverview200Response**](../Model/GetApiV1LivechatAnalyticsAgentOverview200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsOverview()`

```php
getApiV1LivechatAnalyticsOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsOverview200ResponseInner[]
```

Get Analytics Overview

Get the overview of omnichannel analytics in your workspace. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatStatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$name = Conversations; // string | The data that you want to get. The available options are: `Productivity`, `Conversations`
$from = 2019-05-22T12:11:45.392Z; // string | The start date
$to = 2023-05-22T12:11:45.392Z; // string | The end date
$department_id = jsi9w0oakusss; // string | The department ID to return results for.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsOverview($x_auth_token, $x_user_id, $name, $from, $to, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatStatisticsApi->getApiV1LivechatAnalyticsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **name** | **string**| The data that you want to get. The available options are: &#x60;Productivity&#x60;, &#x60;Conversations&#x60; | |
| **from** | **string**| The start date | |
| **to** | **string**| The end date | |
| **department_id** | **string**| The department ID to return results for. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsOverview200ResponseInner[]**](../Model/GetApiV1LivechatAnalyticsOverview200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
