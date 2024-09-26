# WebMI\RocketChatApiClient\OmnichannelApi\LivechatAgentStatsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatAgentsAgentIdDepartments()**](LivechatAgentStatsApi.md#getApiV1LivechatAgentsAgentIdDepartments) | **GET** /api/v1/livechat/agents/{agentId}/departments | Get Agent Departments |
| [**getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory()**](LivechatAgentStatsApi.md#getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory) | **GET** /api/v1/livechat/analytics/agents/available-for-service-history | Get History of Agents Available for Service |
| [**getApiV1LivechatAnalyticsAgentsAverageServiceTime()**](LivechatAgentStatsApi.md#getApiV1LivechatAnalyticsAgentsAverageServiceTime) | **GET** /api/v1/livechat/analytics/agents/average-service-time | Get Agent Average Service Time |
| [**getApiV1LivechatAnalyticsAgentsTotalServiceTime()**](LivechatAgentStatsApi.md#getApiV1LivechatAnalyticsAgentsTotalServiceTime) | **GET** /api/v1/livechat/analytics/agents/total-service-time | Get Agent Total Service Time |


## `getApiV1LivechatAgentsAgentIdDepartments()`

```php
getApiV1LivechatAgentsAgentIdDepartments($x_auth_token, $x_user_id, $agent_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAgentsAgentIdDepartments200Response
```

Get Agent Departments

Returns the departments associated with an agent. Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAgentStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$agent_id = 'agent_id_example'; // string | The agent ID.

try {
    $result = $apiInstance->getApiV1LivechatAgentsAgentIdDepartments($x_auth_token, $x_user_id, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentStatsApi->getApiV1LivechatAgentsAgentIdDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **agent_id** | **string**| The agent ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAgentsAgentIdDepartments200Response**](../Model/GetApiV1LivechatAgentsAgentIdDepartments200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory()`

```php
getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory($x_auth_token, $x_user_id, $start, $end, $full_report, $offset, $count): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsAvailableForServiceHistory200Response
```

Get History of Agents Available for Service

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Return the list of agents and their available time for the provided time frame. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAgentStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$full_report = true; // bool | If set to true, it shares the service history which will contain more granular data such as the time of the day the agent was available.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory($x_auth_token, $x_user_id, $start, $end, $full_report, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentStatsApi->getApiV1LivechatAnalyticsAgentsAvailableForServiceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **full_report** | **bool**| If set to true, it shares the service history which will contain more granular data such as the time of the day the agent was available. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsAvailableForServiceHistory200Response**](../Model/GetApiV1LivechatAnalyticsAgentsAvailableForServiceHistory200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsAgentsAverageServiceTime()`

```php
getApiV1LivechatAnalyticsAgentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $count, $offset): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsAverageServiceTime200Response
```

Get Agent Average Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the average service time (in seconds) for each agent. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAgentStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$count = 25; // int | The number of items to return.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsAgentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentStatsApi->getApiV1LivechatAnalyticsAgentsAverageServiceTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **count** | **int**| The number of items to return. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsAverageServiceTime200Response**](../Model/GetApiV1LivechatAnalyticsAgentsAverageServiceTime200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsAgentsTotalServiceTime()`

```php
getApiV1LivechatAnalyticsAgentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsTotalServiceTime200Response
```

Get Agent Total Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total service time sorted by agent. Permission required: `view-livechat-manager`  **Service time** means how long time the agent is online and available. It does not mean how long time the agent was busy answering chats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAgentStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsAgentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAgentStatsApi->getApiV1LivechatAnalyticsAgentsTotalServiceTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAnalyticsAgentsTotalServiceTime200Response**](../Model/GetApiV1LivechatAnalyticsAgentsTotalServiceTime200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
