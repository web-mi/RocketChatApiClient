# WebMI\RocketChatApiClient\AuthenticationApi\AuthenticationApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1Me()**](AuthenticationApi.md#getApiV1Me) | **GET** /api/v1/me | Get Profile Information |
| [**postApiV1Login()**](AuthenticationApi.md#postApiV1Login) | **POST** /api/v1/login | Login with Username and Password |
| [**postApiV1Logout()**](AuthenticationApi.md#postApiV1Logout) | **POST** /api/v1/logout | Logout |


## `getApiV1Me()`

```php
getApiV1Me($x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\AuthenticationApi\Model\GetApiV1Me200Response
```

Get Profile Information

Quick information about the authenticated user. ### Changelog  | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.68.0            | Added `customFields` property.      |  |0.48.0            | Added      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\AuthenticationApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = 'x_user_id_example'; // string | The user ID of the user.
$x_auth_token = 'x_auth_token_example'; // string | The authorization token of the user.

try {
    $result = $apiInstance->getApiV1Me($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getApiV1Me: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID of the user. | |
| **x_auth_token** | **string**| The authorization token of the user. | |

### Return type

[**\WebMI\RocketChatApiClient\AuthenticationApi\Model\GetApiV1Me200Response**](../Model/GetApiV1Me200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Login()`

```php
postApiV1Login($post_api_v1_login_request): \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200Response
```

Login with Username and Password

-  Although none of the body parameters are required, it's mandatory to include  either the `user` AND `password`  or only the `resume` parameter.  - To authenticate a request, you need to pass the `userId` and `authToken` values from this JSON response object as headers in the request. The `authToken` is passed as `X-Auth-Token` header, while the `userId` as `X-User-Id` header.  -  If LDAP authentication is enabled, you must maintain the login in the same way as you normally do. Similarly, if 2FA is enabled for an LDAP user, everything stays the same.    ### Changelog | Version      | Description |   | ---------------- | ------------|  |1.0.0            | Added `avatarUrl` property to response       |  |0.64.0            | Added `me` property.      |  |0.60.0            | Added      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\AuthenticationApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_login_request = {"user":"test@rocket.test","password":"vanvica32"}; // \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1LoginRequest | 

try {
    $result = $apiInstance->postApiV1Login($post_api_v1_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1Login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_login_request** | [**\WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1LoginRequest**](../Model/PostApiV1LoginRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Login200Response**](../Model/PostApiV1Login200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Logout()`

```php
postApiV1Logout($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Logout200Response
```

Logout

Invalidate your REST API authentication token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\AuthenticationApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 'x_auth_token_example'; // string | The authorization token of the user
$x_user_id = 'x_user_id_example'; // string | The user id of the user

try {
    $result = $apiInstance->postApiV1Logout($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postApiV1Logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user | |
| **x_user_id** | **string**| The user id of the user | |

### Return type

[**\WebMI\RocketChatApiClient\AuthenticationApi\Model\PostApiV1Logout200Response**](../Model/PostApiV1Logout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
