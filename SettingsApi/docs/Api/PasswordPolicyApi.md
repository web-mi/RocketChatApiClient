# WebMIRocketChatApiClientSettingsApi\PasswordPolicyApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPwGetPolicy()**](PasswordPolicyApi.md#getPwGetPolicy) | **GET** /api/v1/pw.getPolicy | Get Password Policy |


## `getPwGetPolicy()`

```php
getPwGetPolicy($x_user_id, $x_auth_token): object
```

Get Password Policy

Get the current [password policy](https://docs.rocket.chat/v1/docs/accounts#password-policy) for users in your workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\PasswordPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getPwGetPolicy($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordPolicyApi->getPwGetPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
