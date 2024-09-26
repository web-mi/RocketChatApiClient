# RocketChatOmnichannelApi\LivechatCustomFieldsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatCustomFields()**](LivechatCustomFieldsApi.md#getApiV1LivechatCustomFields) | **GET** /api/v1/livechat/custom-fields | Get Livechat Custom Fields |
| [**getApiV1LivechatCustomFieldsId()**](LivechatCustomFieldsApi.md#getApiV1LivechatCustomFieldsId) | **GET** /api/v1/livechat/custom-fields/{_id} | Get Custom Field Information |
| [**postApiV1LivechatCustomField()**](LivechatCustomFieldsApi.md#postApiV1LivechatCustomField) | **POST** /api/v1/livechat/custom.field | Send Custom Field Value |
| [**postApiV1LivechatCustomFields()**](LivechatCustomFieldsApi.md#postApiV1LivechatCustomFields) | **POST** /api/v1/livechat/custom.fields | Send Array of Custom Field Values |


## `getApiV1LivechatCustomFields()`

```php
getApiV1LivechatCustomFields($x_auth_token, $x_user_id, $offset, $count, $sort, $text): \RocketChatOmnichannelApi\Model\GetApiV1LivechatCustomFields200Response
```

Get Livechat Custom Fields

Get a list of the Livechat custom fields. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$text = 'text_example'; // string | Enter the text to filter the search result.

try {
    $result = $apiInstance->getApiV1LivechatCustomFields($x_auth_token, $x_user_id, $offset, $count, $sort, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->getApiV1LivechatCustomFields: ', $e->getMessage(), PHP_EOL;
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
| **text** | **string**| Enter the text to filter the search result. | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatCustomFields200Response**](../Model/GetApiV1LivechatCustomFields200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatCustomFieldsId()`

```php
getApiV1LivechatCustomFieldsId($x_auth_token, $x_user_id, $_id): \RocketChatOmnichannelApi\Model\GetApiV1LivechatCustomFieldsId200Response
```

Get Custom Field Information

Get details about a specific custom field. Permission required: `view-l-room`  ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = address; // string | The custom field ID.

try {
    $result = $apiInstance->getApiV1LivechatCustomFieldsId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->getApiV1LivechatCustomFieldsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The custom field ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatCustomFieldsId200Response**](../Model/GetApiV1LivechatCustomFieldsId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatCustomField()`

```php
postApiV1LivechatCustomField($post_api_v1_livechat_custom_field_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomField200Response
```

Send Custom Field Value

Send the value for a custom field.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_custom_field_request = {"token":"iNKE8a6k6cjbqWhWd","key":"address","value":"Rocket.Chat Avenue","overwrite":true}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFieldRequest

try {
    $result = $apiInstance->postApiV1LivechatCustomField($post_api_v1_livechat_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->postApiV1LivechatCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_custom_field_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFieldRequest**](../Model/PostApiV1LivechatCustomFieldRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomField200Response**](../Model/PostApiV1LivechatCustomField200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatCustomFields()`

```php
postApiV1LivechatCustomFields($post_api_v1_livechat_custom_fields_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFields200Response
```

Send Array of Custom Field Values

Send an array of values for different custom fields.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_custom_fields_request = {"token":"iNKE8a6k6cjbqWhWd","customFields":[{"key":"address","value":"Rocket.Chat Avenue","overwrite":true}]}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFieldsRequest | 

try {
    $result = $apiInstance->postApiV1LivechatCustomFields($post_api_v1_livechat_custom_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatCustomFieldsApi->postApiV1LivechatCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_custom_fields_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFieldsRequest**](../Model/PostApiV1LivechatCustomFieldsRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatCustomFields200Response**](../Model/PostApiV1LivechatCustomFields200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
