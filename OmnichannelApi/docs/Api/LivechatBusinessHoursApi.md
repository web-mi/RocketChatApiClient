# RocketChatOmnichannelApi\LivechatBusinessHoursApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatBusinessHour()**](LivechatBusinessHoursApi.md#getApiV1LivechatBusinessHour) | **GET** /api/v1/livechat/business-hour | Get Default Business Hour |
| [**getApiV1LivechatBusinessHours()**](LivechatBusinessHoursApi.md#getApiV1LivechatBusinessHours) | **GET** /api/v1/livechat/business-hours | Get Business Hours |
| [**getApiV1LivechatBusinessHoursList()**](LivechatBusinessHoursApi.md#getApiV1LivechatBusinessHoursList) | **GET** /api/v1/livechat/business-hours.list | Business Hours List |


## `getApiV1LivechatBusinessHour()`

```php
getApiV1LivechatBusinessHour($x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHour200Response
```

Get Default Business Hour

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Fetches the default business hours of a workspace. Permission required: `view-livechat-business-hours`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatBusinessHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatBusinessHour($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatBusinessHoursApi->getApiV1LivechatBusinessHour: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHour200Response**](../Model/GetApiV1LivechatBusinessHour200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatBusinessHours()`

```php
getApiV1LivechatBusinessHours($x_auth_token, $x_user_id, $name, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHours200Response
```

Get Business Hours

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves all the <a href='https://docs.rocket.chat/docs/business-hours' target='_blank'>business hours</a> attached to a workspace. Permission required: `view-livechat-business-hours`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatBusinessHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$name = 'name_example'; // string | Name of the business hour.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatBusinessHours($x_auth_token, $x_user_id, $name, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatBusinessHoursApi->getApiV1LivechatBusinessHours: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **name** | **string**| Name of the business hour. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHours200Response**](../Model/GetApiV1LivechatBusinessHours200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatBusinessHoursList()`

```php
getApiV1LivechatBusinessHoursList($x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHoursList200Response
```

Business Hours List

Gives a list of existing business hours. This endpoint has been renamed to Get Business Hours from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatBusinessHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatBusinessHoursList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatBusinessHoursApi->getApiV1LivechatBusinessHoursList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatBusinessHoursList200Response**](../Model/GetApiV1LivechatBusinessHoursList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
