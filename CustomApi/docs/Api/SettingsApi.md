# WebMI\RocketChatApiClient\CustomApi\SettingsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1SettingsId()**](SettingsApi.md#getApiV1SettingsId) | **GET** /api/v1/settings/{_id} | Get Setting |
| [**postApiV1SettingsId()**](SettingsApi.md#postApiV1SettingsId) | **POST** /api/v1/settings/{_id} | Update Setting |


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



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->getApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new WebMI\RocketChatApiClient\CustomApi\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->postApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
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
