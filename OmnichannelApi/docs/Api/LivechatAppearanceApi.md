# WebMI\RocketChatApiClient\OmnichannelApi\LivechatAppearanceApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatAppearance()**](LivechatAppearanceApi.md#getApiV1LivechatAppearance) | **GET** /api/v1/livechat/appearance | Get Livechat Appearance |
| [**postApiV1LivechatAppearance()**](LivechatAppearanceApi.md#postApiV1LivechatAppearance) | **POST** /api/v1/livechat/appearance | Set Livechat Appearance |


## `getApiV1LivechatAppearance()`

```php
getApiV1LivechatAppearance($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAppearance200Response
```

Get Livechat Appearance

Get the settings about the widget appearance. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAppearanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatAppearance($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAppearanceApi->getApiV1LivechatAppearance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatAppearance200Response**](../Model/GetApiV1LivechatAppearance200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatAppearance()`

```php
postApiV1LivechatAppearance($x_auth_token, $x_user_id, $post_api_v1_livechat_appearance_request_inner): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Set Livechat Appearance

Update the <a href=\"https://docs.rocket.chat/docs/livechat-widget-appearance\" target=\"_blank\">livechat widget appearance</a> settings. Permission required: `view-livechat-manager`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.4.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatAppearanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_appearance_request_inner = [{"_id":"Livechat_title","value":"Hello"},{"_id":"Livechat_show_agent_email","value":"false"},{"_id":"Livechat_show_agent_info","value":true},{"_id":"Livechat_title_color","value":"#b427bed"}]; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatAppearanceRequestInner[] | An array of objects containing the `_id` and `value` of the settings to be updated. See <a href=\"https://developer.rocket.chat/apidocs/get-livechat-appearance\" target=\"_blank\">Get LiveChat Appearance</a> example response for the `_id` of each setting.

try {
    $result = $apiInstance->postApiV1LivechatAppearance($x_auth_token, $x_user_id, $post_api_v1_livechat_appearance_request_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAppearanceApi->postApiV1LivechatAppearance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_appearance_request_inner** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatAppearanceRequestInner[]**](../Model/PostApiV1LivechatAppearanceRequestInner.md)| An array of objects containing the &#x60;_id&#x60; and &#x60;value&#x60; of the settings to be updated. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/get-livechat-appearance\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Get LiveChat Appearance&lt;/a&gt; example response for the &#x60;_id&#x60; of each setting. | [optional] |

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
