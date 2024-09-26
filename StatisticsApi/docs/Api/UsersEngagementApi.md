# WebMI\RocketChatApiClient\StatisticsApi\UsersEngagementApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1EngagementDashboardUsersActiveUsers()**](UsersEngagementApi.md#getApiV1EngagementDashboardUsersActiveUsers) | **GET** /api/v1/engagement-dashboard/users/active-users | Get Active Users |
| [**getApiV1EngagementDashboardUsersChatBusierHourlyData()**](UsersEngagementApi.md#getApiV1EngagementDashboardUsersChatBusierHourlyData) | **GET** /api/v1/engagement-dashboard/users/chat-busier/hourly-data | Get Hourly Data When Chat is Busier |
| [**getApiV1EngagementDashboardUsersChatBusierWeeklyData()**](UsersEngagementApi.md#getApiV1EngagementDashboardUsersChatBusierWeeklyData) | **GET** /api/v1/engagement-dashboard/users/chat-busier/weekly-data | Get Weekly Data When Chat is Busier |
| [**getApiV1EngagementDashboardUsersNewUsers()**](UsersEngagementApi.md#getApiV1EngagementDashboardUsersNewUsers) | **GET** /api/v1/engagement-dashboard/users/new-users | Get New Users |
| [**getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek()**](UsersEngagementApi.md#getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek) | **GET** /api/v1/engagement-dashboard/users/users-by-time-of-the-day-in-a-week | Get User By Time of the Day |


## `getApiV1EngagementDashboardUsersActiveUsers()`

```php
getApiV1EngagementDashboardUsersActiveUsers($x_user_id, $x_auth_token, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersActiveUsers200Response
```

Get Active Users

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the metrics of active users in the workspace during a specific period.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersActiveUsers($x_user_id, $x_auth_token, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **start** | **string**| The start date. | |
| **end** | **string**| The end date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersActiveUsers200Response**](../Model/GetApiV1EngagementDashboardUsersActiveUsers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardUsersChatBusierHourlyData()`

```php
getApiV1EngagementDashboardUsersChatBusierHourlyData($x_auth_token, $x_user_id, $start): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersChatBusierHourlyData200Response
```

Get Hourly Data When Chat is Busier

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve hourly data when chat is busier.  Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersChatBusierHourlyData($x_auth_token, $x_user_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersChatBusierHourlyData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersChatBusierHourlyData200Response**](../Model/GetApiV1EngagementDashboardUsersChatBusierHourlyData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardUsersChatBusierWeeklyData()`

```php
getApiV1EngagementDashboardUsersChatBusierWeeklyData($x_auth_token, $x_user_id, $start): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersChatBusierWeeklyData200Response
```

Get Weekly Data When Chat is Busier

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves weekly data when chat is busier.   Permission required: `view-engagement-dashboard`   ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersChatBusierWeeklyData($x_auth_token, $x_user_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersChatBusierWeeklyData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **start** | **string**| The start date. | |

### Return type

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersChatBusierWeeklyData200Response**](../Model/GetApiV1EngagementDashboardUsersChatBusierWeeklyData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardUsersNewUsers()`

```php
getApiV1EngagementDashboardUsersNewUsers($x_auth_token, $x_user_id, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersNewUsers200Response
```

Get New Users

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve the metrics of newly registered users during a specific period.  Permission required: `view-engagement-dashboard`  ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersNewUsers($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersNewUsers: ', $e->getMessage(), PHP_EOL;
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

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersNewUsers200Response**](../Model/GetApiV1EngagementDashboardUsersNewUsers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek()`

```php
getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek($x_auth_token, $x_user_id, $start, $end): \WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek200Response
```

Get User By Time of the Day

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieve users by hours at a particular time of the day in a week.  Permission required: `view-engagement-dashboard`    ### Changelog | Version      | Description |  | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\StatisticsApi\Api\UsersEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$start = 2023-10-29T14:48:00.000Z; // string | The start date.
$end = 2023-11-05T14:48:00.000Z; // string | The end date.

try {
    $result = $apiInstance->getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek($x_auth_token, $x_user_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersEngagementApi->getApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek: ', $e->getMessage(), PHP_EOL;
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

[**\WebMI\RocketChatApiClient\StatisticsApi\Model\GetApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek200Response**](../Model/GetApiV1EngagementDashboardUsersUsersByTimeOfTheDayInAWeek200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
