# WebMI\RocketChatApiClient\SettingsApi\SettingsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ServiceConfigurations()**](SettingsApi.md#getApiV1ServiceConfigurations) | **GET** /api/v1/service.configurations | Get OAuth Service Configuration |
| [**getApiV1Settings()**](SettingsApi.md#getApiV1Settings) | **GET** /api/v1/settings | Get Private Settings |
| [**getApiV1SettingsId()**](SettingsApi.md#getApiV1SettingsId) | **GET** /api/v1/settings/{_id} | Get Setting |
| [**getApiV1SettingsOauth()**](SettingsApi.md#getApiV1SettingsOauth) | **GET** /api/v1/settings.oauth | Get OAuth Settings |
| [**getApiV1SettingsPublic()**](SettingsApi.md#getApiV1SettingsPublic) | **GET** /api/v1/settings.public | Get Public Settings |
| [**postApiV1SettingsAddCustomOAuth()**](SettingsApi.md#postApiV1SettingsAddCustomOAuth) | **POST** /api/v1/settings.addCustomOAuth | Add Custom OAuth |
| [**postApiV1SettingsId()**](SettingsApi.md#postApiV1SettingsId) | **POST** /api/v1/settings/{_id} | Update Setting |


## `getApiV1ServiceConfigurations()`

```php
getApiV1ServiceConfigurations(): \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1ServiceConfigurations200Response
```

Get OAuth Service Configuration

List out all the active OAuth services configured with details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1ServiceConfigurations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1ServiceConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1ServiceConfigurations200Response**](../Model/GetApiV1ServiceConfigurations200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1Settings()`

```php
getApiV1Settings($x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsPublic200Response
```

Get Private Settings

List all private settings. Learn how this can be used in configuring your server in this <a href=\"https://docs.rocket.chat/docs/deployment-environment-variables\" target=\"_blank\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1Settings($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1Settings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsPublic200Response**](../Model/GetApiV1SettingsPublic200Response.md)

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
getApiV1SettingsId($_id, $x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsId200Response
```

Get Setting

Get details of a setting by ID. Permission required: `view-privileged-setting` ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
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

[**\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsId200Response**](../Model/GetApiV1SettingsId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1SettingsOauth()`

```php
getApiV1SettingsOauth(): \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsOauth200Response
```

Get OAuth Settings

List all the <a href=\"https://docs.rocket.chat/docs/oauth\" target=\"_blank\"> OAuth services</a>. enabled in the workspace. ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0            | Renamed field `appId` to `clientId` and added flag `custom` to indicate whether the OAuth service is customized and fix `id` inconsistence (set all cases to `_id`)       | |0.63.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1SettingsOauth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1SettingsOauth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsOauth200Response**](../Model/GetApiV1SettingsOauth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1SettingsPublic()`

```php
getApiV1SettingsPublic($offset, $count, $sort, $query, $fields): \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsPublic200Response
```

Get Public Settings

List all public settings. Learn how this can be used in configuring your workspace in this <a href=\"https://docs.rocket.chat/docs/manage-settings-using-environmental-variables\" target=\"_blank\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | How many items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = NULL; // mixed | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1SettingsPublic($offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1SettingsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| How many items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | [**mixed**](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SettingsPublic200Response**](../Model/GetApiV1SettingsPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1SettingsAddCustomOAuth()`

```php
postApiV1SettingsAddCustomOAuth($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_settings_add_custom_o_auth_request): \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Add Custom OAuth

Add a <a href=\" https://docs.rocket.chat/docs/oauth#add-custom-oauth\" target=\"_blank\">custom OAuth integration</a> to your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$x_2fa_code = 'x_2fa_code_example'; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_settings_add_custom_o_auth_request = new \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuthRequest(); // \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuthRequest

try {
    $result = $apiInstance->postApiV1SettingsAddCustomOAuth($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_settings_add_custom_o_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->postApiV1SettingsAddCustomOAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_settings_add_custom_o_auth_request** | [**\WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuthRequest**](../Model/PostApiV1SettingsAddCustomOAuthRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

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
postApiV1SettingsId($_id, $x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_settings_id_request): \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Update Setting

Permission required: `edit-privileged-setting`  The `_id` of a setting is the first argument of the `RocketChat.settings.add` method used in `Rocket.Chat/packages/rocketchat-lib/server/startup/settings.js` (among other files).   For example, the following code in `settings.js` file:   ```json   this.add('Accounts_AllowAnonymousRead', false, {     type: 'boolean',     public: true  });   ```   This means that the setting labeled `Allow anonymous read` in the section `Accounts` has `_id` equal to `Accounts_AllowAnonymousRead`. The second argument is the default value (false). The third argument specifies the variable's type and whether it is public, hidden, and so on.       To set a color, you can send:   ```json   { value: '<color-code>',     editor: 'color' }   ```      And also to trigger a action-button, use:   ```json   { execute: true }   ```   ### Changelog   | Version      | Description |   | ---------------- | ------------|   |0.65.0            | Added option to set a color and trigger an action       |   |0.42.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\SettingsApi\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = '_id_example'; // string | The unique ID of the setting that you want to update or fetch.
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$x_2fa_code = 'x_2fa_code_example'; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_settings_id_request = new \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsIdRequest(); // \WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsIdRequest

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
| **post_api_v1_settings_id_request** | [**\WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsIdRequest**](../Model/PostApiV1SettingsIdRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\SettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
