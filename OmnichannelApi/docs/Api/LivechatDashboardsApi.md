# WebMIRocketChatApiClientOmnichannelApi\LivechatDashboardsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers) | **GET** /api/v1/livechat/analytics/dashboards/agents-productivity-totalizers | Get Agent Service Time Metrics |
| [**getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus) | **GET** /api/v1/livechat/analytics/dashboards/charts/agents-status | Get Status of Agents |
| [**getApiV1LivechatAnalyticsDashboardsChartsChats()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChartsChats) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats | Get Chats Status |
| [**getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats-per-agent | Get Chat Status of Agents |
| [**getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment) | **GET** /api/v1/livechat/analytics/dashboards/charts/chats-per-department | Get Chats Status for Departments |
| [**getApiV1LivechatAnalyticsDashboardsChartsTimings()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChartsTimings) | **GET** /api/v1/livechat/analytics/dashboards/charts/timings | Get Chat Times |
| [**getApiV1LivechatAnalyticsDashboardsChatsTotalizers()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsChatsTotalizers) | **GET** /api/v1/livechat/analytics/dashboards/chats-totalizers | Get Chat Metrics |
| [**getApiV1LivechatAnalyticsDashboardsConversationTotalizers()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsConversationTotalizers) | **GET** /api/v1/livechat/analytics/dashboards/conversation-totalizers | Get Conversation Metrics |
| [**getApiV1LivechatAnalyticsDashboardsProductivityTotalizers()**](LivechatDashboardsApi.md#getApiV1LivechatAnalyticsDashboardsProductivityTotalizers) | **GET** /api/v1/livechat/analytics/dashboards/productivity-totalizers | Get Chat Metrics by Time |


## `getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers()`

```php
getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response
```

Get Agent Service Time Metrics

Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus()`

```php
getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus($x_auth_token, $x_user_id, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsAgentsStatus200Response
```

Get Status of Agents

Retrieves the number of agents for each status. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus($x_auth_token, $x_user_id, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsAgentsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsAgentsStatus200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsChartsAgentsStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChartsChats()`

```php
getApiV1LivechatAnalyticsDashboardsChartsChats($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChats200Response
```

Get Chats Status

Retrieves the status of chats for a specific time duration.  Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChats($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChats200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsChartsChats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent()`

```php
getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent200Response
```

Get Chat Status of Agents

Retrieves the status of chats per agent for a specific time duration. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsChartsChatsPerAgent200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment()`

```php
getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment200Response
```

Get Chats Status for Departments

Retrieves the status of chats for each department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsChartsChatsPerDepartment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChartsTimings()`

```php
getApiV1LivechatAnalyticsDashboardsChartsTimings($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsTimings200Response
```

Get Chat Times

Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChartsTimings($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChartsTimings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsChartsTimings200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsChartsTimings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsChatsTotalizers()`

```php
getApiV1LivechatAnalyticsDashboardsChatsTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id): object
```

Get Chat Metrics

Retrieves information about the chats. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsChatsTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsChatsTotalizers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

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

## `getApiV1LivechatAnalyticsDashboardsConversationTotalizers()`

```php
getApiV1LivechatAnalyticsDashboardsConversationTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsConversationTotalizers200Response
```

Get Conversation Metrics

Retrieves metrics about all conversations. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsConversationTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsConversationTotalizers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsConversationTotalizers200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsConversationTotalizers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDashboardsProductivityTotalizers()`

```php
getApiV1LivechatAnalyticsDashboardsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response
```

Get Chat Metrics by Time

Retrieves the average time for Livechat conversations. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatDashboardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$department_id = 'department_id_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDashboardsProductivityTotalizers($x_auth_token, $x_user_id, $start, $end, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDashboardsApi->getApiV1LivechatAnalyticsDashboardsProductivityTotalizers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **department_id** | **string**| The department ID. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response**](../Model/GetApiV1LivechatAnalyticsDashboardsAgentsProductivityTotalizers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
