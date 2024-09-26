# RocketChatOmnichannelApi\LivechatDepartmentsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatDepartmentId()**](LivechatDepartmentsApi.md#deleteApiV1LivechatDepartmentId) | **DELETE** /api/v1/livechat/department/{_id} | Remove Department |
| [**getApiV1LivechatAnalyticsDepartmentsAmountOfChats()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsAmountOfChats) | **GET** /api/v1/livechat/analytics/departments/amount-of-chats | Get Number of Chats |
| [**getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime) | **GET** /api/v1/livechat/analytics/departments/average-chat-duration-time | Get Average Chat Duration |
| [**getApiV1LivechatAnalyticsDepartmentsAverageServiceTime()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsAverageServiceTime) | **GET** /api/v1/livechat/analytics/departments/average-service-time | Get Average Service Time |
| [**getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime) | **GET** /api/v1/livechat/analytics/departments/average-waiting-time | Get Average Waiting Time |
| [**getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats) | **GET** /api/v1/livechat/analytics/departments/percentage-abandoned-chats | Get Percentage of Abandoned Chats |
| [**getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats) | **GET** /api/v1/livechat/analytics/departments/total-abandoned-chats | Get Total Abandoned Chats |
| [**getApiV1LivechatAnalyticsDepartmentsTotalServiceTime()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsTotalServiceTime) | **GET** /api/v1/livechat/analytics/departments/total-service-time | Get Total Service Time |
| [**getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats()**](LivechatDepartmentsApi.md#getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats) | **GET** /api/v1/livechat/analytics/departments/total-transferred-chats | Get Total Transferred Chats |
| [**getApiV1LivechatDepartment()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartment) | **GET** /api/v1/livechat/department | Get List of Departments |
| [**getApiV1LivechatDepartmentAutocomplete()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentAutocomplete) | **GET** /api/v1/livechat/department.autocomplete | Autocomplete Department |
| [**getApiV1LivechatDepartmentId()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentId) | **GET** /api/v1/livechat/department/{_id} | Get Department Information |
| [**getApiV1LivechatDepartmentIdAgents()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentIdAgents) | **GET** /api/v1/livechat/department/{_id}/agents | Get Agents of Department |
| [**getApiV1LivechatDepartmentListByIds()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentListByIds) | **GET** /api/v1/livechat/department.listByIds | Get Departments by ID |
| [**getApiV1LivechatDepartmentsAvailableByUnitUnitId()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentsAvailableByUnitUnitId) | **GET** /api/v1/livechat/departments.available-by-unit/{unitId} | Get Available Departments by Unit ID |
| [**getApiV1LivechatDepartmentsByUnitUnitId()**](LivechatDepartmentsApi.md#getApiV1LivechatDepartmentsByUnitUnitId) | **GET** /api/v1/livechat/departments.by-unit/{unitid} | Get Departments by Unit ID |
| [**postApiV1LivechatDepartment()**](LivechatDepartmentsApi.md#postApiV1LivechatDepartment) | **POST** /api/v1/livechat/department | Register New Department |
| [**postApiV1LivechatDepartmentIdAgents()**](LivechatDepartmentsApi.md#postApiV1LivechatDepartmentIdAgents) | **POST** /api/v1/livechat/department/{_id}/agents | Update Agents of Department |
| [**putApiV1LivechatDepartmentId()**](LivechatDepartmentsApi.md#putApiV1LivechatDepartmentId) | **PUT** /api/v1/livechat/department/{_id} | Update Department |


## `deleteApiV1LivechatDepartmentId()`

```php
deleteApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Remove Department

At least one of the following permissions is required: * `manage-livechat-departments` * `remove-livechat-department`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | The department ID.

try {
    $result = $apiInstance->deleteApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->deleteApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The department ID. | |

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

## `getApiV1LivechatAnalyticsDepartmentsAmountOfChats()`

```php
getApiV1LivechatAnalyticsDepartmentsAmountOfChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $answered, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAmountOfChats200Response
```

Get Number of Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the number of chat rooms by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$answered = True; // bool | Whether the chats are answered or not.
$department_id = 64181a0728384134ed600dcc; // string | Enter the department ID for which you want the number of chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAmountOfChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $answered, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAmountOfChats: ', $e->getMessage(), PHP_EOL;
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
| **answered** | **bool**| Whether the chats are answered or not. | [optional] |
| **department_id** | **string**| Enter the department ID for which you want the number of chats. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAmountOfChats200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsAmountOfChats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime()`

```php
getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime200Response
```

Get Average Chat Duration

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Returns the average chat duration of each department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = 64cf6c6feb07a913d946f34d; // string | Enter the department ID for which you want the average chat duration.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the average chat duration. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsAverageChatDurationTime200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsAverageServiceTime()`

```php
getApiV1LivechatAnalyticsDepartmentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageServiceTime200Response
```

Get Average Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Returns average service time (in seconds) for chats by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = CAJioQNAvLnYWTy8i; // string | Enter the department ID for which you want the average service time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageServiceTime: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the average service time. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageServiceTime200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsAverageServiceTime200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime()`

```php
getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageWaitingTime200Response
```

Get Average Waiting Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the average visitor waiting time (in seconds) by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = 64181a0728384134ed600dcc; // string | Enter the department ID for which you want the average waiting time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsAverageWaitingTime: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the average waiting time. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsAverageWaitingTime200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsAverageWaitingTime200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats()`

```php
getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats200Response
```

Get Percentage of Abandoned Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the percentage of abandoned chats per department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = 64cf6c6feb07a913d946f34d; // string | Enter the department ID for which you want the percentage of abandoned chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the percentage of abandoned chats. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsPercentageAbandonedChats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats()`

```php
getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats200Response
```

Get Total Abandoned Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total number of abandoned chats (rooms) by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = 4LCeYmCHHnQ3EDBgf; // string | Enter the department ID for which you want the total abandoned chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the total abandoned chats. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats200Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsTotalAbandonedChats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsTotalServiceTime()`

```php
getApiV1LivechatAnalyticsDepartmentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalServiceTime206Response
```

Get Total Service Time

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total service time (in seconds) by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = 64cf6c6feb07a913d946f34d; // string | Enter the department ID for which you want the total service time.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalServiceTime($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalServiceTime: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the total service time. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalServiceTime206Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsTotalServiceTime206Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats()`

```php
getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalTransferredChats206Response
```

Get Total Transferred Chats

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Gives the total number of transferred chats by department. Permission required: `view-livechat-manager`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
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
$department_id = GgYvrkAF63aeQmsh4; // string | Enter the department ID for which you want the total transferred chats.

try {
    $result = $apiInstance->getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats($x_auth_token, $x_user_id, $start, $end, $offset, $count, $department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatAnalyticsDepartmentsTotalTransferredChats: ', $e->getMessage(), PHP_EOL;
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
| **department_id** | **string**| Enter the department ID for which you want the total transferred chats. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatAnalyticsDepartmentsTotalTransferredChats206Response**](../Model/GetApiV1LivechatAnalyticsDepartmentsTotalTransferredChats206Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartment()`

```php
getApiV1LivechatDepartment($x_auth_token, $x_user_id, $text, $enabled, $show_archived, $only_my_departments, $exclude_department_id, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartment200Response
```

Get List of Departments

Get a list of the departments. At least one of the following permissions is required: * `view-livechat-departments` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added support to pagination    | |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$text = fin; // string | Filter the result with any text.
$enabled = true; // bool | Filter the result to only show enabled departments. The value can be boolean true or false.
$show_archived = true; // bool | You can include the archived departments in the result. The value can be boolean true or false.
$only_my_departments = true; // bool | This parameter is for users with managers or admin roles. It only displays the departments that you are an agent of.
$exclude_department_id = 64181a0728384134ed600dcc; // string | The department ID that you want to exclude from the result.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatDepartment($x_auth_token, $x_user_id, $text, $enabled, $show_archived, $only_my_departments, $exclude_department_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **text** | **string**| Filter the result with any text. | [optional] |
| **enabled** | **bool**| Filter the result to only show enabled departments. The value can be boolean true or false. | [optional] |
| **show_archived** | **bool**| You can include the archived departments in the result. The value can be boolean true or false. | [optional] |
| **only_my_departments** | **bool**| This parameter is for users with managers or admin roles. It only displays the departments that you are an agent of. | [optional] |
| **exclude_department_id** | **string**| The department ID that you want to exclude from the result. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartment200Response**](../Model/GetApiV1LivechatDepartment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartmentAutocomplete()`

```php
getApiV1LivechatDepartmentAutocomplete($x_auth_token, $x_user_id, $selector, $only_my_departments, $show_archived): object
```

Autocomplete Department

Autocomplete the department name.  At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$selector = {"exceptions" : ["${dep1._id}"], "conditions": {"enabled": true}, "term":"test"}; // string | Enter the exceptions or the conditions that you want to search for.
$only_my_departments = True; // bool | Only displays the departments that you are assigned to. The value can be boolean `true` or `false`
$show_archived = True; // bool | The result includes archived departments. The value can be Boolean `true` or `false`.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentAutocomplete($x_auth_token, $x_user_id, $selector, $only_my_departments, $show_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentAutocomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **selector** | **string**| Enter the exceptions or the conditions that you want to search for. | |
| **only_my_departments** | **bool**| Only displays the departments that you are assigned to. The value can be boolean &#x60;true&#x60; or &#x60;false&#x60; | [optional] |
| **show_archived** | **bool**| The result includes archived departments. The value can be Boolean &#x60;true&#x60; or &#x60;false&#x60;. | [optional] |

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

## `getApiV1LivechatDepartmentId()`

```php
getApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $include_agents): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentId200Response
```

Get Department Information

Get information about a specific department using the department ID. At least one of the following permissions is required: * `view-livechat-departments` * `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added `includeAgents` query parameter| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | The department ID.
$include_agents = true; // bool | If agents should be included in the result. By default, the value is true and the list of agents is returned. The agents field will only be returned if the user has the `view-livechat-departments` permission.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $include_agents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The department ID. | |
| **include_agents** | **bool**| If agents should be included in the result. By default, the value is true and the list of agents is returned. The agents field will only be returned if the user has the &#x60;view-livechat-departments&#x60; permission. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentId200Response**](../Model/GetApiV1LivechatDepartmentId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartmentIdAgents()`

```php
getApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentIdAgents200Response
```

Get Agents of Department

Get the agents of a specific department. At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | The department ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentIdAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The department ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentIdAgents200Response**](../Model/GetApiV1LivechatDepartmentIdAgents200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartmentListByIds()`

```php
getApiV1LivechatDepartmentListByIds($x_auth_token, $x_user_id, $ids): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentListByIds200Response
```

Get Departments by ID

Get a list of departments by department IDs. At least one of the following permissions is required:   * `view-livechat-departments`   * `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$ids = 'ids_example'; // string | The department ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentListByIds($x_auth_token, $x_user_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentListByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **ids** | **string**| The department ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentListByIds200Response**](../Model/GetApiV1LivechatDepartmentListByIds200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartmentsAvailableByUnitUnitId()`

```php
getApiV1LivechatDepartmentsAvailableByUnitUnitId($x_auth_token, $x_user_id, $unit_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentsAvailableByUnitUnitId200Response
```

Get Available Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Gives departments that have not been associated to another unit yet. This endpoint has been renamed to <a href=\"https://developer.rocket.chat/apidocs/get-departments-by-unit-id-1\" target=\"_blank\">Get Available Departments by Unit Id</a> from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$unit_id = sriw2wmP2Zz2pPrre; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentsAvailableByUnitUnitId($x_auth_token, $x_user_id, $unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentsAvailableByUnitUnitId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **unit_id** | **string**| The unit ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentsAvailableByUnitUnitId200Response**](../Model/GetApiV1LivechatDepartmentsAvailableByUnitUnitId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatDepartmentsByUnitUnitId()`

```php
getApiV1LivechatDepartmentsByUnitUnitId($x_auth_token, $x_user_id, $start, $end, $unitid): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentsByUnitUnitId200Response
```

Get Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  <p>Gives departments included in a specific unit ID. This endpoint has been renamed to <a href=\"https://developer.rocket.chat/apidocs/get-departments-by-unit-id-1\" target=\"_blank\">Get Departments by Unit ID</a> as from Rocket.Chat 5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$start = 2020-09-10T23:59:22.345Z; // string | The start date.
$end = 2020-09-09T00:11:22.345Z; // string | The end date.
$unitid = sriw2wmP2Zz2pPrre; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatDepartmentsByUnitUnitId($x_auth_token, $x_user_id, $start, $end, $unitid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->getApiV1LivechatDepartmentsByUnitUnitId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |
| **unitid** | **string**| The unit ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentsByUnitUnitId200Response**](../Model/GetApiV1LivechatDepartmentsByUnitUnitId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatDepartment()`

```php
postApiV1LivechatDepartment($x_auth_token, $x_user_id, $post_api_v1_livechat_department_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartment200Response
```

Register New Department

Permission required: `manage-livechat-departments`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.0.0           | New fields for department updated       |0.42.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_department_request = {"department":{"enabled":false,"showOnRegistration":true,"name":"new from api","email":"john@doe.com","showOnOfflineForm":true},"agents":[{"agentId":"SQafHvoFPuB57NmBD"}]}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartmentRequest

try {
    $result = $apiInstance->postApiV1LivechatDepartment($x_auth_token, $x_user_id, $post_api_v1_livechat_department_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->postApiV1LivechatDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_department_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartmentRequest**](../Model/PostApiV1LivechatDepartmentRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartment200Response**](../Model/PostApiV1LivechatDepartment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatDepartmentIdAgents()`

```php
postApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $post_api_v1_livechat_department_id_agents_request): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Update Agents of Department

Update the agents of a specific department. At least one of the following permissions is required:   * `add-livechat-department-agents`   * `manage-livechat-departments`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | The department ID.
$post_api_v1_livechat_department_id_agents_request = {"upsert":[{"agentId":"6529401b024dde05d3f1cd85","username":"kim"}],"remove":[]}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartmentIdAgentsRequest

try {
    $result = $apiInstance->postApiV1LivechatDepartmentIdAgents($x_auth_token, $x_user_id, $_id, $post_api_v1_livechat_department_id_agents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->postApiV1LivechatDepartmentIdAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The department ID. | |
| **post_api_v1_livechat_department_id_agents_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatDepartmentIdAgentsRequest**](../Model/PostApiV1LivechatDepartmentIdAgentsRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatDepartmentId()`

```php
putApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $put_api_v1_livechat_department_id_request): \RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentId200Response
```

Update Department

Update the details of a specific department. Permissions required: * `manage-livechat-departments` * To add agents: `add-livechat-department-agents`  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatDepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | The department ID.
$put_api_v1_livechat_department_id_request = {"department":{"enabled":true,"name":"new from api - live","showOnRegistration":true,"email":"test@test.com","showOnOfflineForm":false},"agents":[{"agentId":"SQafHvoFPuB57NmBD","username":"john.doe"}]}; // \RocketChatOmnichannelApi\Model\PutApiV1LivechatDepartmentIdRequest

try {
    $result = $apiInstance->putApiV1LivechatDepartmentId($x_auth_token, $x_user_id, $_id, $put_api_v1_livechat_department_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatDepartmentsApi->putApiV1LivechatDepartmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The department ID. | |
| **put_api_v1_livechat_department_id_request** | [**\RocketChatOmnichannelApi\Model\PutApiV1LivechatDepartmentIdRequest**](../Model/PutApiV1LivechatDepartmentIdRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatDepartmentId200Response**](../Model/GetApiV1LivechatDepartmentId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
