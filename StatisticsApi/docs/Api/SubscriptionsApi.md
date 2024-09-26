# WebMIRocketChatApiClientStatisticsApi\SubscriptionsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1SubscriptionsGet()**](SubscriptionsApi.md#getApiV1SubscriptionsGet) | **GET** /api/v1/subscriptions.get | Get All Subscriptions |
| [**getApiV1SubscriptionsGetOne()**](SubscriptionsApi.md#getApiV1SubscriptionsGetOne) | **GET** /api/v1/subscriptions.getOne | Get Subscription Room |
| [**postApiV1SubscriptionsRead()**](SubscriptionsApi.md#postApiV1SubscriptionsRead) | **POST** /api/v1/subscriptions.read | Mark Channel as Read |
| [**postApiV1SubscriptionsUnread()**](SubscriptionsApi.md#postApiV1SubscriptionsUnread) | **POST** /api/v1/subscriptions.unread | Mark Channel as Unread |


## `getApiV1SubscriptionsGet()`

```php
getApiV1SubscriptionsGet($x_auth_token, $x_user_id, $updated_since): \WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1SubscriptionsGet200Response
```

Get All Subscriptions

Note that the unread counter value depends on your settings in the **Administration** > <a href='https://docs.rocket.chat/docs/general' target='_blank'>**General**</a> section.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.60.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientStatisticsApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$updated_since = 2017-11-25T15:08:17.248Z; // string | Date and time from which to fetch changes. Format: ISO 8601 datetime. Optional seconds, optional milliseconds, optional timezone, always with colon time separators.

try {
    $result = $apiInstance->getApiV1SubscriptionsGet($x_auth_token, $x_user_id, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getApiV1SubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **updated_since** | **string**| Date and time from which to fetch changes. Format: ISO 8601 datetime. Optional seconds, optional milliseconds, optional timezone, always with colon time separators. | [optional] |

### Return type

[**\WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1SubscriptionsGet200Response**](../Model/GetApiV1SubscriptionsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1SubscriptionsGetOne()`

```php
getApiV1SubscriptionsGetOne($x_auth_token, $x_user_id, $room_id): \WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1SubscriptionsGetOne200Response
```

Get Subscription Room

Note that the unread counter value depends on your settings at the **Administration** > <a href='https://docs.rocket.chat/docs/general' target='_blank'>**General**</a> section.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.63.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientStatisticsApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$room_id = ByehQjC44FwMeiLbX; // string | The room ID.

try {
    $result = $apiInstance->getApiV1SubscriptionsGetOne($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getApiV1SubscriptionsGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **room_id** | **string**| The room ID. | |

### Return type

[**\WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1SubscriptionsGetOne200Response**](../Model/GetApiV1SubscriptionsGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1SubscriptionsRead()`

```php
postApiV1SubscriptionsRead($x_auth_token, $x_user_id, $post_api_v1_subscriptions_read_request): \WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsRead200Response
```

Mark Channel as Read

### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0            | `roomId` can be used as argument instead of `rid`.       | |0.61.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientStatisticsApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$post_api_v1_subscriptions_read_request = {"rid":"L6su9mxwdDkvdSaT9hvzu8z6mHFigiXy6Y"}; // \WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsReadRequest

try {
    $result = $apiInstance->postApiV1SubscriptionsRead($x_auth_token, $x_user_id, $post_api_v1_subscriptions_read_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postApiV1SubscriptionsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **post_api_v1_subscriptions_read_request** | [**\WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsReadRequest**](../Model/PostApiV1SubscriptionsReadRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsRead200Response**](../Model/PostApiV1SubscriptionsRead200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1SubscriptionsUnread()`

```php
postApiV1SubscriptionsUnread($x_auth_token, $x_user_id, $post_api_v1_subscriptions_unread_request): \WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsRead200Response
```

Mark Channel as Unread

Mark messages as unread by room ID or from a message.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.65.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientStatisticsApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The token of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The user ID of the authenticated user.
$post_api_v1_subscriptions_unread_request = {"roomId":"L6su9mxwdDkvdSaT9hvzu8z6mHFigiXy6Y"}; // \WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsUnreadRequest | 

try {
    $result = $apiInstance->postApiV1SubscriptionsUnread($x_auth_token, $x_user_id, $post_api_v1_subscriptions_unread_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postApiV1SubscriptionsUnread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The token of the authenticated user. | |
| **x_user_id** | **string**| The user ID of the authenticated user. | |
| **post_api_v1_subscriptions_unread_request** | [**\WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsUnreadRequest**](../Model/PostApiV1SubscriptionsUnreadRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientStatisticsApi\Model\PostApiV1SubscriptionsRead200Response**](../Model/PostApiV1SubscriptionsRead200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
