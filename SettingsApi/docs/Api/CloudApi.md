# RocketChatSettingsApi\CloudApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1CloudManualRegister()**](CloudApi.md#postApiV1CloudManualRegister) | **POST** /api/v1/cloud.manualRegister | Manual Cloud Register |


## `postApiV1CloudManualRegister()`

```php
postApiV1CloudManualRegister($x_user_id, $x_auth_token, $post_api_v1_cloud_manual_register_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Manual Cloud Register

Manually register a workspace on <a href=\"https://docs.rocket.chat/docs/rocketchat-cloud\" target=\"_blank\">Rocket.Chat Cloud</a>. Permission required: `register-on-cloud`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_cloud_manual_register_request = {"cloudBlob":"jfiscsm38urc3ujd"}; // \RocketChatSettingsApi\Model\PostApiV1CloudManualRegisterRequest

try {
    $result = $apiInstance->postApiV1CloudManualRegister($x_user_id, $x_auth_token, $post_api_v1_cloud_manual_register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->postApiV1CloudManualRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_cloud_manual_register_request** | [**\RocketChatSettingsApi\Model\PostApiV1CloudManualRegisterRequest**](../Model/PostApiV1CloudManualRegisterRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
