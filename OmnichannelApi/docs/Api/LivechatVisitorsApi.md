# RocketChatOmnichannelApi\LivechatVisitorsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatVisitorToken()**](LivechatVisitorsApi.md#deleteApiV1LivechatVisitorToken) | **DELETE** /api/v1/livechat/visitor/{token} | Delete Visitor |
| [**getApiV1LivechatVisitorInfo()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorInfo) | **GET** /api/v1/livechat/visitor.info | Get Visitor Information by ID |
| [**getApiV1LivechatVisitorToken()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorToken) | **GET** /api/v1/livechat/visitor/{token} | Get Visitor Information |
| [**getApiV1LivechatVisitorTokenRoom()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorTokenRoom) | **GET** /api/v1/livechat/visitor/{token}/room | Get Open Conversation of a Visitor |
| [**getApiV1LivechatVisitorsAutocomplete()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorsAutocomplete) | **GET** /api/v1/livechat/visitors.autocomplete | Autocomplete Visitors |
| [**getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId) | **GET** /api/v1/livechat/visitors.chatHistory/room/{roomId}/visitor/{visitorId} | Get Livechat Visitor Chat History |
| [**getApiV1LivechatVisitorsPagesVisitedRoomId()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorsPagesVisitedRoomId) | **GET** /api/v1/livechat/visitors.pagesVisited/{roomId} | Get Pages Visited by Livechat Visitor |
| [**getApiV1LivechatVisitorsSearch()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorsSearch) | **GET** /api/v1/livechat/visitors.search | Search Visitors by Term |
| [**getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId()**](LivechatVisitorsApi.md#getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId) | **GET** /api/v1/livechat/visitors.searchChats/room/{roomId}/visitor/{visitorId} | Search Visitor Chat |
| [**postApiV1LivechatVisitor()**](LivechatVisitorsApi.md#postApiV1LivechatVisitor) | **POST** /api/v1/livechat/visitor | Register Livechat Visitor |
| [**postApiV1LivechatVisitorsStatus()**](LivechatVisitorsApi.md#postApiV1LivechatVisitorsStatus) | **POST** /api/v1/livechat/visitors.status | Set Visitor&#39;s Status |


## `deleteApiV1LivechatVisitorToken()`

```php
deleteApiV1LivechatVisitorToken($token): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatVisitorToken200Response
```

Delete Visitor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The visitor token.

try {
    $result = $apiInstance->deleteApiV1LivechatVisitorToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->deleteApiV1LivechatVisitorToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatVisitorToken200Response**](../Model/DeleteApiV1LivechatVisitorToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorInfo()`

```php
getApiV1LivechatVisitorInfo($visitor_id, $x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitor200Response
```

Get Visitor Information by ID

Get the information of a specific visitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$visitor_id = 'visitor_id_example'; // string | The visitor ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorInfo($visitor_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **visitor_id** | **string**| The visitor ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitor200Response**](../Model/PostApiV1LivechatVisitor200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorToken()`

```php
getApiV1LivechatVisitorToken($token): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorToken200Response
```

Get Visitor Information

Get the details of a specific visitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The visitor token.

try {
    $result = $apiInstance->getApiV1LivechatVisitorToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorToken200Response**](../Model/GetApiV1LivechatVisitorToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorTokenRoom()`

```php
getApiV1LivechatVisitorTokenRoom($token, $x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorTokenRoom200Response
```

Get Open Conversation of a Visitor

Retrieve open conversations associated with a particular visitor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The visitor token.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorTokenRoom($token, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorTokenRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorTokenRoom200Response**](../Model/GetApiV1LivechatVisitorTokenRoom200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorsAutocomplete()`

```php
getApiV1LivechatVisitorsAutocomplete($x_auth_token, $x_user_id, $selector): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsAutocomplete200Response
```

Autocomplete Visitors

Autocomplete a visitor's name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$selector = NULL; // mixed | Enter the exceptions or the conditions that you want to search for. For example, { \"exceptions\" : [], \"conditions\" : {\"username\": \"guest-5\"}}

try {
    $result = $apiInstance->getApiV1LivechatVisitorsAutocomplete($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **selector** | [**mixed**](../Model/.md)| Enter the exceptions or the conditions that you want to search for. For example, { \&quot;exceptions\&quot; : [], \&quot;conditions\&quot; : {\&quot;username\&quot;: \&quot;guest-5\&quot;}} | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsAutocomplete200Response**](../Model/GetApiV1LivechatVisitorsAutocomplete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId()`

```php
getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200Response
```

Get Livechat Visitor Chat History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 'room_id_example'; // string | The room ID.
$visitor_id = 'visitor_id_example'; // string | The visitor ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **visitor_id** | **string**| The visitor ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200Response**](../Model/GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorsPagesVisitedRoomId()`

```php
getApiV1LivechatVisitorsPagesVisitedRoomId($room_id, $x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsPagesVisitedRoomId200Response
```

Get Pages Visited by Livechat Visitor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 'room_id_example'; // string | The room ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorsPagesVisitedRoomId($room_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsPagesVisitedRoomId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsPagesVisitedRoomId200Response**](../Model/GetApiV1LivechatVisitorsPagesVisitedRoomId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorsSearch()`

```php
getApiV1LivechatVisitorsSearch($x_auth_token, $x_user_id, $term, $offset, $count, $sort): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsSearch200Response
```

Search Visitors by Term

Search Livechat visitors using a specific term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$term = 'term_example'; // string | The visitor's name, username, email, or phone.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatVisitorsSearch($x_auth_token, $x_user_id, $term, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **term** | **string**| The visitor&#39;s name, username, email, or phone. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsSearch200Response**](../Model/GetApiV1LivechatVisitorsSearch200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId()`

```php
getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId200Response
```

Search Visitor Chat

Get the Livechat information of a visitor. This endpoint returns only those chats that are served and closed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 'room_id_example'; // string | The room ID.
$visitor_id = 'visitor_id_example'; // string | The visitor ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId($room_id, $visitor_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->getApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **visitor_id** | **string**| The visitor ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId200Response**](../Model/GetApiV1LivechatVisitorsSearchChatsRoomRoomIdVisitorVisitorId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatVisitor()`

```php
postApiV1LivechatVisitor($post_api_v1_livechat_visitor_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitor200Response
```

Register Livechat Visitor

Register a visitor's information before creating a new Omnichannel room. You can set basic information such as name, phone, custom fields, and the initial department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_visitor_request = {"visitor":{"name":"Livechat Visitor","email":"visitor@rocket.chat","department":"Support","token":"iNKE8a6k6cjbqWhWd","phone":"55 51 5555-5555","customFields":[{"key":"address","value":"Rocket.Chat street","overwrite":true}]}}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorRequest

try {
    $result = $apiInstance->postApiV1LivechatVisitor($post_api_v1_livechat_visitor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->postApiV1LivechatVisitor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_visitor_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorRequest**](../Model/PostApiV1LivechatVisitorRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitor200Response**](../Model/PostApiV1LivechatVisitor200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatVisitorsStatus()`

```php
postApiV1LivechatVisitorsStatus($post_api_v1_livechat_visitors_status_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorsStatus200Response
```

Set Visitor's Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatVisitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_visitors_status_request = {"token":"54fc5544030bcecda0533","status":"busy"}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorsStatusRequest

try {
    $result = $apiInstance->postApiV1LivechatVisitorsStatus($post_api_v1_livechat_visitors_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatVisitorsApi->postApiV1LivechatVisitorsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_visitors_status_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorsStatusRequest**](../Model/PostApiV1LivechatVisitorsStatusRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatVisitorsStatus200Response**](../Model/PostApiV1LivechatVisitorsStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
