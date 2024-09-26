# WebMI\RocketChatApiClient\OmnichannelApi\LivechatInquiriesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatInquiriesGetOne()**](LivechatInquiriesApi.md#getApiV1LivechatInquiriesGetOne) | **GET** /api/v1/livechat/inquiries.getOne | Get Inquiry by Room |
| [**getApiV1LivechatInquiriesList()**](LivechatInquiriesApi.md#getApiV1LivechatInquiriesList) | **GET** /api/v1/livechat/inquiries.list | Get Inquiries List |
| [**getApiV1LivechatInquiriesQueued()**](LivechatInquiriesApi.md#getApiV1LivechatInquiriesQueued) | **GET** /api/v1/livechat/inquiries.queued | List Queued Inquiries |
| [**getApiV1LivechatInquiriesQueuedForUser()**](LivechatInquiriesApi.md#getApiV1LivechatInquiriesQueuedForUser) | **GET** /api/v1/livechat/inquiries.queuedForUser | List Queued User Inquiries |
| [**postApiV1LivechatInquiriesTake()**](LivechatInquiriesApi.md#postApiV1LivechatInquiriesTake) | **POST** /api/v1/livechat/inquiries.take | Take Inquiry |
| [**putApiV1LivechatInquirySetSLA()**](LivechatInquiriesApi.md#putApiV1LivechatInquirySetSLA) | **PUT** /api/v1/livechat/inquiry.setSLA | Set SLA Policy to Inquiry |


## `getApiV1LivechatInquiriesGetOne()`

```php
getApiV1LivechatInquiriesGetOne($x_auth_token, $x_user_id, $room_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200Response
```

Get Inquiry by Room

Permission required: `view-l-room`  ### Changelog | Version      | Description | | ---------------- | ------------| |2.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatInquiriesGetOne($x_auth_token, $x_user_id, $room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **room_id** | **string**| The room ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200Response**](../Model/GetApiV1LivechatInquiriesGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatInquiriesList()`

```php
getApiV1LivechatInquiriesList($x_auth_token, $x_user_id, $department, $offset, $count, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesList200Response
```

Get Inquiries List

Lists all open Livechat inquiries. An incoming chat that has not yet been taken by the agent is called an inquiry. After it's been taken by the agent it is referred to as room. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$department = 'department_example'; // string | The department ID or name.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatInquiriesList($x_auth_token, $x_user_id, $department, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **department** | **string**| The department ID or name. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesList200Response**](../Model/GetApiV1LivechatInquiriesList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatInquiriesQueued()`

```php
getApiV1LivechatInquiriesQueued($x_user_id, $x_auth_token, $department, $offset, $count, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesQueued200Response
```

List Queued Inquiries

Use the `/inquiries.queuedForUser` endpoint instead.  Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$department = 'department_example'; // string | The department ID or name.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatInquiriesQueued($x_user_id, $x_auth_token, $department, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesQueued: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **department** | **string**| The department ID or name. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesQueued200Response**](../Model/GetApiV1LivechatInquiriesQueued200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatInquiriesQueuedForUser()`

```php
getApiV1LivechatInquiriesQueuedForUser($x_user_id, $x_auth_token, $department, $offset, $count, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesQueued200Response
```

List Queued User Inquiries

Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$department = 'department_example'; // string | The department ID or name.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatInquiriesQueuedForUser($x_user_id, $x_auth_token, $department, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->getApiV1LivechatInquiriesQueuedForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **department** | **string**| The department ID or name. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesQueued200Response**](../Model/GetApiV1LivechatInquiriesQueued200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatInquiriesTake()`

```php
postApiV1LivechatInquiriesTake($x_auth_token, $x_user_id, $post_api_v1_livechat_inquiries_take_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Take Inquiry

Join an open inquiry. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |1.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_inquiries_take_request = {"inquiryId":"ByehQjC44FwMeiLbX"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatInquiriesTakeRequest | If the `userId` is provided, the user must have the `view-l-room` permission.

try {
    $result = $apiInstance->postApiV1LivechatInquiriesTake($x_auth_token, $x_user_id, $post_api_v1_livechat_inquiries_take_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->postApiV1LivechatInquiriesTake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_inquiries_take_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatInquiriesTakeRequest**](../Model/PostApiV1LivechatInquiriesTakeRequest.md)| If the &#x60;userId&#x60; is provided, the user must have the &#x60;view-l-room&#x60; permission. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatInquirySetSLA()`

```php
putApiV1LivechatInquirySetSLA($x_auth_token, $x_user_id, $put_api_v1_livechat_inquiry_set_sla_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Set SLA Policy to Inquiry

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Set <a href=\"https://docs.rocket.chat/docs/sla-policies\" target=\"_blank\">SLA policy</a> to an inquiry. You can only set the policy for an inquiry that has not been taken by an agent.  At least one of the following permissions is required: * `view-l-room` * `manage-livechat-sla`  ### Changelog | Version | Description  | | ------- |--------------| | 5.0.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatInquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$put_api_v1_livechat_inquiry_set_sla_request = {"roomId":"ZDYMFPpvnXgptmzMs","sla":"6417f67528384134ed600dc6"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatInquirySetSLARequest

try {
    $result = $apiInstance->putApiV1LivechatInquirySetSLA($x_auth_token, $x_user_id, $put_api_v1_livechat_inquiry_set_sla_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatInquiriesApi->putApiV1LivechatInquirySetSLA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **put_api_v1_livechat_inquiry_set_sla_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatInquirySetSLARequest**](../Model/PutApiV1LivechatInquirySetSLARequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
