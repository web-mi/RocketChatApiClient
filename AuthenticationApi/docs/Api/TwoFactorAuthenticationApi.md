# RocketChatAuthenticationApi\TwoFactorAuthenticationApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1Users2faDisableEmail()**](TwoFactorAuthenticationApi.md#postApiV1Users2faDisableEmail) | **POST** /api/v1/users.2fa.disableEmail | Disable 2FA via Email |
| [**postApiV1Users2faEnableEmail()**](TwoFactorAuthenticationApi.md#postApiV1Users2faEnableEmail) | **POST** /api/v1/users.2fa.enableEmail | Enable 2FA via Email |
| [**postApiV1Users2faSendEmailCode()**](TwoFactorAuthenticationApi.md#postApiV1Users2faSendEmailCode) | **POST** /api/v1/users.2fa.sendEmailCode | Request a new Email Code |


## `postApiV1Users2faDisableEmail()`

```php
postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method): \RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response
```

Disable 2FA via Email

Disable two-factor authentication via email. The 2FA code is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatAuthenticationApi\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_2fa_code = 'x_2fa_code_example'; // string | The 2FA code.
$x_2fa_method = 'x_2fa_method_example'; // string | The 2FA method. It can be `email`, `totp`, or `password`.

try {
    $result = $apiInstance->postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faDisableEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_2fa_code** | **string**| The 2FA code. | |
| **x_2fa_method** | **string**| The 2FA method. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |

### Return type

[**\RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response**](../Model/PostApiV1Users2faEnableEmail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Users2faEnableEmail()`

```php
postApiV1Users2faEnableEmail($x_auth_token, $x_user_id): \RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response
```

Enable 2FA via Email

Enable email two-factor authentication for your account. This endpoint only works if the user has at least one verified email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatAuthenticationApi\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postApiV1Users2faEnableEmail($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faEnableEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response**](../Model/PostApiV1Users2faEnableEmail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Users2faSendEmailCode()`

```php
postApiV1Users2faSendEmailCode($post_api_v1_users2fa_send_email_code_request): \RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response
```

Request a new Email Code

Use this endpoint to request for a new 2FA code by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatAuthenticationApi\Api\TwoFactorAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_users2fa_send_email_code_request = {"emailOrUsername":"test-user"}; // \RocketChatAuthenticationApi\Model\PostApiV1Users2faSendEmailCodeRequest

try {
    $result = $apiInstance->postApiV1Users2faSendEmailCode($post_api_v1_users2fa_send_email_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwoFactorAuthenticationApi->postApiV1Users2faSendEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_users2fa_send_email_code_request** | [**\RocketChatAuthenticationApi\Model\PostApiV1Users2faSendEmailCodeRequest**](../Model/PostApiV1Users2faSendEmailCodeRequest.md)|  | [optional] |

### Return type

[**\RocketChatAuthenticationApi\Model\PostApiV1Users2faEnableEmail200Response**](../Model/PostApiV1Users2faEnableEmail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
