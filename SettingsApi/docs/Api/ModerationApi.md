# RocketChatSettingsApi\ModerationApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ModerationReportInfo()**](ModerationApi.md#getApiV1ModerationReportInfo) | **GET** /api/v1/moderation.reportInfo | Get Report Information |
| [**getApiV1ModerationReports()**](ModerationApi.md#getApiV1ModerationReports) | **GET** /api/v1/moderation.reports | Get Reports of a Message |
| [**getApiV1ModerationReportsByUsers()**](ModerationApi.md#getApiV1ModerationReportsByUsers) | **GET** /api/v1/moderation.reportsByUsers | Get Reported Messages |
| [**getApiV1ModerationUserReportedMessages()**](ModerationApi.md#getApiV1ModerationUserReportedMessages) | **GET** /api/v1/moderation.user.reportedMessages | Get User&#39;s Reported Messages |
| [**postApiV1ModerationDismissReports()**](ModerationApi.md#postApiV1ModerationDismissReports) | **POST** /api/v1/moderation.dismissReports | Dismiss Reports |
| [**postApiV1ModerationUserDeleteReportedMessages()**](ModerationApi.md#postApiV1ModerationUserDeleteReportedMessages) | **POST** /api/v1/moderation.user.deleteReportedMessages | Delete Reported Messages of a User |


## `getApiV1ModerationReportInfo()`

```php
getApiV1ModerationReportInfo($x_user_id, $x_auth_token, $report_id): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Get Report Information

Get more details of a single report.  Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$report_id = 'report_id_example'; // string | The ID of the report to fetch details for.

try {
    $result = $apiInstance->getApiV1ModerationReportInfo($x_user_id, $x_auth_token, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **report_id** | **string**| The ID of the report to fetch details for. | |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ModerationReports()`

```php
getApiV1ModerationReports($x_user_id, $x_auth_token, $msg_id, $offset, $count, $sort): \RocketChatSettingsApi\Model\GetApiV1ModerationReports200Response
```

Get Reports of a Message

Retrieve all the reports of a single message. A message can have many reports. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$msg_id = 'msg_id_example'; // string | The ID of the message to fetch reports for.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | How many items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationReports($x_user_id, $x_auth_token, $msg_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **msg_id** | **string**| The ID of the message to fetch reports for. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| How many items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1ModerationReports200Response**](../Model/GetApiV1ModerationReports200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ModerationReportsByUsers()`

```php
getApiV1ModerationReportsByUsers($x_user_id, $x_auth_token, $oldest, $latest, $offset, $count, $sort): \RocketChatSettingsApi\Model\GetApiV1ModerationReportsByUsers200Response
```

Get Reported Messages

Retrieves all the reported messages grouped by users. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$oldest = 2021-09-30T09:33:15.621Z; // string | It represents the oldest point in time for which you want to retrieve moderation reports.
$latest = 2023-08-30T09:33:15.621Z; // string | It represents the oldest point in time for which you want to retrieve moderation reports.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | How many items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationReportsByUsers($x_user_id, $x_auth_token, $oldest, $latest, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationReportsByUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **oldest** | **string**| It represents the oldest point in time for which you want to retrieve moderation reports. | [optional] |
| **latest** | **string**| It represents the oldest point in time for which you want to retrieve moderation reports. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| How many items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1ModerationReportsByUsers200Response**](../Model/GetApiV1ModerationReportsByUsers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ModerationUserReportedMessages()`

```php
getApiV1ModerationUserReportedMessages($x_user_id, $x_auth_token, $user_id, $offset, $count, $sort): \RocketChatSettingsApi\Model\GetApiV1ModerationUserReportedMessages200Response
```

Get User's Reported Messages

Retrieve all reported messages of a user. Permission required: `view-moderation-console` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$user_id = 'user_id_example'; // string | The id of the user whose reported messages should be retrieved.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | How many items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}

try {
    $result = $apiInstance->getApiV1ModerationUserReportedMessages($x_user_id, $x_auth_token, $user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiV1ModerationUserReportedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **user_id** | **string**| The id of the user whose reported messages should be retrieved. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| How many items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1ModerationUserReportedMessages200Response**](../Model/GetApiV1ModerationUserReportedMessages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ModerationDismissReports()`

```php
postApiV1ModerationDismissReports($x_user_id, $x_auth_token, $post_api_v1_moderation_dismiss_reports_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Dismiss Reports

You can dismiss all the reports of a particular user by the `userId`. You can also dismiss the report of a message by the `msgId`. Permission required: `manage-moderation-actions` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_moderation_dismiss_reports_request = new \RocketChatSettingsApi\Model\PostApiV1ModerationDismissReportsRequest(); // \RocketChatSettingsApi\Model\PostApiV1ModerationDismissReportsRequest

try {
    $result = $apiInstance->postApiV1ModerationDismissReports($x_user_id, $x_auth_token, $post_api_v1_moderation_dismiss_reports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postApiV1ModerationDismissReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_moderation_dismiss_reports_request** | [**\RocketChatSettingsApi\Model\PostApiV1ModerationDismissReportsRequest**](../Model/PostApiV1ModerationDismissReportsRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ModerationUserDeleteReportedMessages()`

```php
postApiV1ModerationUserDeleteReportedMessages($x_user_id, $x_auth_token, $post_api_v1_moderation_user_delete_reported_messages_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Delete Reported Messages of a User

Delete all the reports of messages that belongs to user. Permission required: `manage-moderation-actions` ### Changelog | Version      | Description | | ---------------- | ------------| |6.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_moderation_user_delete_reported_messages_request = new \RocketChatSettingsApi\Model\PostApiV1ModerationUserDeleteReportedMessagesRequest(); // \RocketChatSettingsApi\Model\PostApiV1ModerationUserDeleteReportedMessagesRequest

try {
    $result = $apiInstance->postApiV1ModerationUserDeleteReportedMessages($x_user_id, $x_auth_token, $post_api_v1_moderation_user_delete_reported_messages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postApiV1ModerationUserDeleteReportedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_moderation_user_delete_reported_messages_request** | [**\RocketChatSettingsApi\Model\PostApiV1ModerationUserDeleteReportedMessagesRequest**](../Model/PostApiV1ModerationUserDeleteReportedMessagesRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
