# WebMI\RocketChatApiClient\CustomApi\CustomApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ChatGetMessage()**](CustomApi.md#getApiV1ChatGetMessage) | **GET** /api/v1/chat.getMessage | Get Message |
| [**getApiV1SettingsId()**](CustomApi.md#getApiV1SettingsId) | **GET** /api/v1/settings/{_id} | Get Setting |
| [**postApiV1ChatSendMessage()**](CustomApi.md#postApiV1ChatSendMessage) | **POST** /api/v1/chat.sendMessage | Send Message |
| [**postApiV1Login()**](CustomApi.md#postApiV1Login) | **POST** /api/v1/login | Login with ServiceName and Token |
| [**postApiV1SettingsId()**](CustomApi.md#postApiV1SettingsId) | **POST** /api/v1/settings/{_id} | Update Setting |


## `getApiV1ChatGetMessage()`

```php
getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id): \WebMI\RocketChatApiClient\CustomApi\Model\GetApiV1ChatGetMessage200Response
```

Get Message

Overwritten because repsonse is wrong documented

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$msg_id = 7aDSXtjMA3KPLxLjt; // string | The message ID.

try {
    $result = $apiInstance->getApiV1ChatGetMessage($x_auth_token, $x_user_id, $msg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->getApiV1ChatGetMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **msg_id** | **string**| The message ID. | |

### Return type

[**\WebMI\RocketChatApiClient\CustomApi\Model\GetApiV1ChatGetMessage200Response**](../Model/GetApiV1ChatGetMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1SettingsId()`

```php
getApiV1SettingsId($_id, $x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\CustomApi\Model\GetApiV1SettingsId200Response
```

Get Setting

Get details of a setting by ID. Permission required: `view-privileged-setting` ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = '_id_example'; // string | The unique ID of the setting that you want to update or fetch.
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1SettingsId($_id, $x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->getApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The unique ID of the setting that you want to update or fetch. | |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMI\RocketChatApiClient\CustomApi\Model\GetApiV1SettingsId200Response**](../Model/GetApiV1SettingsId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ChatSendMessage()`

```php
postApiV1ChatSendMessage($x_auth_token, $x_user_id, $post_api_v1_chat_send_message_request): \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1ChatSendMessage200Response
```

Send Message

Overwritten because property t is wrong documented

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_chat_send_message_request = {"message":{"rid":"Xnb2kLD2Pnhdwe3RH","msg":"Sample message","alias":"Gruggy","emoji":":smirk:","avatar":"http://res.guggy.com/logo_128.png","attachments":[{"color":"#ff0000","text":"Yay for gruggy!","ts":"2016-12-09T16:53:06.761Z","thumb_url":"http://res.guggy.com/logo_128.png","message_link":"https://google.com","collapsed":false,"author_name":"Bradley Hilton","author_link":"https://rocket.chat/","author_icon":"https://avatars.githubusercontent.com/u/850391?v=3","title":"Attachment Example","title_link":"https://youtube.com","title_link_download":true,"image_url":"http://res.guggy.com/logo_128.png","audio_url":"http://www.w3schools.com/tags/horse.mp3","video_url":"http://www.w3schools.com/tags/movie.mp4","fields":[{"short":true,"title":"Test","value":"Testing out something or other"},{"short":true,"title":"Another Test","value":"[Link](https://google.com/) something and this and that."}]}]}}; // \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1ChatSendMessageRequest | **Some important things to note about the `previewUrls` parameter include:** * If the `previewUrls` array is empty, no URL will be previewed. * If the `previewUrls` parameter isn't sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the `previewUrls` array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. > URLs that include the same text as the <a href='https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings' target='_blank'>**Site URL**</a> are referred to as Internal URLs.

try {
    $result = $apiInstance->postApiV1ChatSendMessage($x_auth_token, $x_user_id, $post_api_v1_chat_send_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->postApiV1ChatSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_chat_send_message_request** | [**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1ChatSendMessageRequest**](../Model/PostApiV1ChatSendMessageRequest.md)| **Some important things to note about the &#x60;previewUrls&#x60; parameter include:** * If the &#x60;previewUrls&#x60; array is empty, no URL will be previewed. * If the &#x60;previewUrls&#x60; parameter isn&#39;t sent, all URLs (up to a maximum of five external URLs) will be previewed. * If the message contains attachments or quotes, no URL is previewed. * Internal URLs are not considered in the &#x60;previewUrls&#x60; array. * A maximum of five external URLs is previewed  per message. If there are more than 5 external URLs, no URL is previewed. &gt; URLs that include the same text as the &lt;a href&#x3D;&#39;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings&#39; target&#x3D;&#39;_blank&#39;&gt;**Site URL**&lt;/a&gt; are referred to as Internal URLs. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1ChatSendMessage200Response**](../Model/PostApiV1ChatSendMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Login()`

```php
postApiV1Login($post_api_v1_login_request): \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1Login200Response
```

Login with ServiceName and Token

-| Added because authentication with serviceName and accessToken is missing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_login_request = {"serviceName":"keycloak","accessToken":"eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiw","expiresIn":300}; // \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1LoginRequest | 

try {
    $result = $apiInstance->postApiV1Login($post_api_v1_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->postApiV1Login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_login_request** | [**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1LoginRequest**](../Model/PostApiV1LoginRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1Login200Response**](../Model/PostApiV1Login200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1SettingsId()`

```php
postApiV1SettingsId($_id, $x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_settings_id_request): \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1SettingsId200Response
```

Update Setting

Permission required: `edit-privileged-setting`  The `_id` of a setting is the first argument of the `RocketChat.settings.add` method used in `Rocket.Chat/packages/rocketchat-lib/server/startup/settings.js` (among other files).   For example, the following code in `settings.js` file:   ```json   this.add('Accounts_AllowAnonymousRead', false, {     type: 'boolean',     public: true  });   ```   This means that the setting labeled `Allow anonymous read` in the section `Accounts` has `_id` equal to `Accounts_AllowAnonymousRead`. The second argument is the default value (false). The third argument specifies the variable's type and whether it is public, hidden, and so on.     To set a color, you can send:   ```json   { value: '<color-code>',     editor: 'color' }   ```    And also to trigger a action-button, use:   ```json   { execute: true }   ```   ### Changelog   | Version      | Description |   | ---------------- | ------------|   |0.65.0            | Added option to set a color and trigger an action       |   |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = '_id_example'; // string | The unique ID of the setting that you want to update or fetch.
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$x_2fa_code = 'x_2fa_code_example'; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_settings_id_request = new \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1SettingsIdRequest(); // \WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1SettingsIdRequest

try {
    $result = $apiInstance->postApiV1SettingsId($_id, $x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_settings_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->postApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_id** | **string**| The unique ID of the setting that you want to update or fetch. | |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_settings_id_request** | [**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1SettingsIdRequest**](../Model/PostApiV1SettingsIdRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\CustomApi\Model\PostApiV1SettingsId200Response**](../Model/PostApiV1SettingsId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
