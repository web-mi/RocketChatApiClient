# RocketChatContentManagementApi\AssetsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1AssetsSetAsset()**](AssetsApi.md#postApiV1AssetsSetAsset) | **POST** /api/v1/assets.setAsset | Set Asset |
| [**postApiV1AssetsUnsetAsset()**](AssetsApi.md#postApiV1AssetsUnsetAsset) | **POST** /api/v1/assets.unsetAsset | Unset Asset |


## `postApiV1AssetsSetAsset()`

```php
postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $post_api_v1_assets_set_asset_request): \RocketChatContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Set Asset

Set an <a href=\"https://docs.rocket.chat/docs/assets\" target=\"_blank\"> asset</a> by name. Permissions required: `manage-assets`.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.69.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatContentManagementApi\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_assets_set_asset_request = new \RocketChatContentManagementApi\Model\PostApiV1AssetsSetAssetRequest(); // \RocketChatContentManagementApi\Model\PostApiV1AssetsSetAssetRequest | 

try {
    $result = $apiInstance->postApiV1AssetsSetAsset($x_auth_token, $x_user_id, $post_api_v1_assets_set_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postApiV1AssetsSetAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_assets_set_asset_request** | [**\RocketChatContentManagementApi\Model\PostApiV1AssetsSetAssetRequest**](../Model/PostApiV1AssetsSetAssetRequest.md)|  | [optional] |

### Return type

[**\RocketChatContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1AssetsUnsetAsset()`

```php
postApiV1AssetsUnsetAsset($x_auth_token, $x_user_id, $post_api_v1_assets_unset_asset_request): \RocketChatContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Unset Asset

Unset an asset by name. Permissions required: `manage-assets` .  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.69.0           | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatContentManagementApi\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_assets_unset_asset_request = {"assetName":"logo","refreshAllClients":true}; // \RocketChatContentManagementApi\Model\PostApiV1AssetsUnsetAssetRequest

try {
    $result = $apiInstance->postApiV1AssetsUnsetAsset($x_auth_token, $x_user_id, $post_api_v1_assets_unset_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postApiV1AssetsUnsetAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_assets_unset_asset_request** | [**\RocketChatContentManagementApi\Model\PostApiV1AssetsUnsetAssetRequest**](../Model/PostApiV1AssetsUnsetAssetRequest.md)|  | [optional] |

### Return type

[**\RocketChatContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
