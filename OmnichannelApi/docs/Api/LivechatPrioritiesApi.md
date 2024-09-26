# WebMI\RocketChatApiClient\OmnichannelApi\LivechatPrioritiesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatPriorities()**](LivechatPrioritiesApi.md#getApiV1LivechatPriorities) | **GET** /api/v1/livechat/priorities | Get List of Priorities |
| [**getApiV1LivechatPrioritiesPriorityId()**](LivechatPrioritiesApi.md#getApiV1LivechatPrioritiesPriorityId) | **GET** /api/v1/livechat/priorities/{priorityId} | Get a Priority |
| [**getLivechatPriorities()**](LivechatPrioritiesApi.md#getLivechatPriorities) | **GET** /livechat/priorities | Get Priorities |
| [**getLivechatPrioritiesList()**](LivechatPrioritiesApi.md#getLivechatPrioritiesList) | **GET** /livechat/priorities.list | List of Priorities |
| [**getLivechatPrioritiesPriorityId()**](LivechatPrioritiesApi.md#getLivechatPrioritiesPriorityId) | **GET** /livechat/priorities/{priorityId} | Get a Priority |
| [**getLivechatPriorityGetOne()**](LivechatPrioritiesApi.md#getLivechatPriorityGetOne) | **GET** /livechat/priority.getOne | Get one Priority |
| [**postLivechatPrioritiesReset()**](LivechatPrioritiesApi.md#postLivechatPrioritiesReset) | **POST** /api/v1/livechat/priorities.reset | Reset Priorities |
| [**putApiV1LivechatPrioritiesPriorityId()**](LivechatPrioritiesApi.md#putApiV1LivechatPrioritiesPriorityId) | **PUT** /api/v1/livechat/priorities/{priorityId} | Update Priority |


## `getApiV1LivechatPriorities()`

```php
getApiV1LivechatPriorities($x_auth_token, $x_user_id, $offset, $count, $sort, $text): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatPriorities200Response
```

Get List of Priorities

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves list of existing <a href='https://docs.rocket.chat/docs/priorities' target='_blank'>priorities</a>. At least one of the following permissions is required:   * `manage-livechat-priorities`   * `view-l-room`  ### Changelog | Version      | Description |  | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = 'text_example'; // string | Filter the search result with the text.

try {
    $result = $apiInstance->getApiV1LivechatPriorities($x_auth_token, $x_user_id, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getApiV1LivechatPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |
| **text** | **string**| Filter the search result with the text. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatPriorities200Response**](../Model/GetApiV1LivechatPriorities200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatPrioritiesPriorityId()`

```php
getApiV1LivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatPrioritiesPriorityId200Response
```

Get a Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get details of a specific priority. At least one of the following permissions is required:   * `manage-livechat-priorities`   * `view-l-room`  ### Changelog | Version | Description  | | ------- |--------------| | 6.0.0  | Added         |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$priority_id = 'priority_id_example'; // string | The priority ID.

try {
    $result = $apiInstance->getApiV1LivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getApiV1LivechatPrioritiesPriorityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **priority_id** | **string**| The priority ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatPrioritiesPriorityId200Response**](../Model/GetApiV1LivechatPrioritiesPriorityId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivechatPriorities()`

```php
getLivechatPriorities($x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPriorities200Response
```

Get Priorities

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint is used to get a list of all priorities in a workspace below version 6.0. It supports the optional <a href=\"https://developer.rocket.chat/apidocs#pagination\" target=\"_blank\">pagination</a> query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.

try {
    $result = $apiInstance->getLivechatPriorities($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getLivechatPriorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPriorities200Response**](../Model/GetLivechatPriorities200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivechatPrioritiesList()`

```php
getLivechatPrioritiesList($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPrioritiesList200Response
```

List of Priorities

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to <b><a href='https://rocketchat-developer.us.document360.io/apidocs/get-priorities' target='_blank'>Get Priorities</a></b> as from Rocket.Chat 5.0.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getLivechatPrioritiesList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getLivechatPrioritiesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPrioritiesList200Response**](../Model/GetLivechatPrioritiesList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivechatPrioritiesPriorityId()`

```php
getLivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPrioritiesPriorityId200Response
```

Get a Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint is used to get the details of a priority in a workspace below version 6.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$priority_id = 'priority_id_example'; // string | Priority ID

try {
    $result = $apiInstance->getLivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getLivechatPrioritiesPriorityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **priority_id** | **string**| Priority ID | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPrioritiesPriorityId200Response**](../Model/GetLivechatPrioritiesPriorityId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivechatPriorityGetOne()`

```php
getLivechatPriorityGetOne($x_auth_token, $x_user_id, $priority_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPriorityGetOne200Response
```

Get one Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to <b><a href='https://developer.rocket.chat/apidocs/get-a-priority' target='_blank'>Get a Priority</a></b> as from Rocket.Chat 5.0.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$priority_id = 'priority_id_example'; // string | Priority ID

try {
    $result = $apiInstance->getLivechatPriorityGetOne($x_auth_token, $x_user_id, $priority_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->getLivechatPriorityGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **priority_id** | **string**| Priority ID | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatPriorityGetOne200Response**](../Model/GetLivechatPriorityGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLivechatPrioritiesReset()`

```php
postLivechatPrioritiesReset($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Reset Priorities

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint resets all priorities back to default. Permission required: `manage-livechat-priorities`  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postLivechatPrioritiesReset($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->postLivechatPrioritiesReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatPrioritiesPriorityId()`

```php
putApiV1LivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id, $put_api_v1_livechat_priorities_priority_id_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Update Priority

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Update an existing priority. Permission required: `manage-livechat-priorities`  ### Changelog | Version      | Description |  | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatPrioritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$priority_id = 64007cc2fa0ed7dd905092e3; // string | The priority ID.
$put_api_v1_livechat_priorities_priority_id_request = {"name":"Very low"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatPrioritiesPriorityIdRequest

try {
    $result = $apiInstance->putApiV1LivechatPrioritiesPriorityId($x_auth_token, $x_user_id, $priority_id, $put_api_v1_livechat_priorities_priority_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPrioritiesApi->putApiV1LivechatPrioritiesPriorityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **priority_id** | **string**| The priority ID. | |
| **put_api_v1_livechat_priorities_priority_id_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatPrioritiesPriorityIdRequest**](../Model/PutApiV1LivechatPrioritiesPriorityIdRequest.md)|  | [optional] |

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
