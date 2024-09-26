# WebMI\RocketChatApiClient\OmnichannelApi\LivechatTagsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatTags()**](LivechatTagsApi.md#getApiV1LivechatTags) | **GET** /api/v1/livechat/tags | Get List of Tags |
| [**getApiV1LivechatTagsList()**](LivechatTagsApi.md#getApiV1LivechatTagsList) | **GET** /api/v1/livechat/tags.list | List of Tags |
| [**getApiV1LivechatTagsTagId()**](LivechatTagsApi.md#getApiV1LivechatTagsTagId) | **GET** /api/v1/livechat/tags/{tagId} | Get a Tag |
| [**getLivechatTagsGetOne()**](LivechatTagsApi.md#getLivechatTagsGetOne) | **GET** /livechat/tags.getOne | Get One Tag |


## `getApiV1LivechatTags()`

```php
getApiV1LivechatTags($x_auth_token, $x_user_id, $offset, $count, $sort, $text, $department, $view_all): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTags200Response
```

Get List of Tags

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves list of <a href='https://docs.rocket.chat/docs/tags' target='_blank'>tags</a>. At least one of the following permissions is required:    * `view-l-room`   * `manage-livechat-tags`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatTagsApi(
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
$department = 'department_example'; // string | Enter the department ID.
$view_all = True; // bool | Select whether you want to view all tags.

try {
    $result = $apiInstance->getApiV1LivechatTags($x_auth_token, $x_user_id, $offset, $count, $sort, $text, $department, $view_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTagsApi->getApiV1LivechatTags: ', $e->getMessage(), PHP_EOL;
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
| **department** | **string**| Enter the department ID. | [optional] |
| **view_all** | **bool**| Select whether you want to view all tags. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTags200Response**](../Model/GetApiV1LivechatTags200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatTagsList()`

```php
getApiV1LivechatTagsList($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTagsList200Response
```

List of Tags

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to <a href=\"https://developer.rocket.chat/apidocs/get-list-of-tags\" target=\"_blank\">Get List of Tags</a> as from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatTagsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTagsApi->getApiV1LivechatTagsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTagsList200Response**](../Model/GetApiV1LivechatTagsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatTagsTagId()`

```php
getApiV1LivechatTagsTagId($x_auth_token, $x_user_id, $tag_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTagsTagId200Response
```

Get a Tag

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  At least one of the following permissions is required:   * `view-l-room`   * `manage-livechat-tags`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$tag_id = pXkCRLGxD34y2FEZq; // string | The tag ID.

try {
    $result = $apiInstance->getApiV1LivechatTagsTagId($x_auth_token, $x_user_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTagsApi->getApiV1LivechatTagsTagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **tag_id** | **string**| The tag ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatTagsTagId200Response**](../Model/GetApiV1LivechatTagsTagId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivechatTagsGetOne()`

```php
getLivechatTagsGetOne(): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatTagsGetOne200Response
```

Get One Tag

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  This endpoint has been renamed to  <b><a href='https://developer.rocket.chat/apidocs/get-a-tag' target='_blank'>Get a Tag</a><b> as from Rocket.Chat 5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLivechatTagsGetOne();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatTagsApi->getLivechatTagsGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetLivechatTagsGetOne200Response**](../Model/GetLivechatTagsGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
