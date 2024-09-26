# WebMI\RocketChatApiClient\NotificationsApi\BannersApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1Banners()**](BannersApi.md#getApiV1Banners) | **GET** /api/v1/banners | Get Banners |
| [**getApiV1BannersId()**](BannersApi.md#getApiV1BannersId) | **GET** /api/v1/banners/{id} | Get Banner by ID |
| [**postApiV1BannersDismiss()**](BannersApi.md#postApiV1BannersDismiss) | **POST** /api/v1/banners.dismiss | Dismiss a Banner |


## `getApiV1Banners()`

```php
getApiV1Banners($x_auth_token, $x_user_id, $platform): \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1BannersId200Response
```

Get Banners

Gets the banners to be shown to the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\NotificationsApi\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$platform = web; // string | The platform rendering the banner

try {
    $result = $apiInstance->getApiV1Banners($x_auth_token, $x_user_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->getApiV1Banners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **platform** | **string**| The platform rendering the banner | |

### Return type

[**\WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1BannersId200Response**](../Model/GetApiV1BannersId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1BannersId()`

```php
getApiV1BannersId($id, $x_auth_token, $x_user_id, $platform): \WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1BannersId200Response
```

Get Banner by ID

Gets the banner to be shown to the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\NotificationsApi\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = ByehQjC44FwMeiLbX; // string | The banner ID.
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$platform = web; // string | The platform rendering the banner.

try {
    $result = $apiInstance->getApiV1BannersId($id, $x_auth_token, $x_user_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->getApiV1BannersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The banner ID. | |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **platform** | **string**| The platform rendering the banner. | |

### Return type

[**\WebMI\RocketChatApiClient\NotificationsApi\Model\GetApiV1BannersId200Response**](../Model/GetApiV1BannersId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1BannersDismiss()`

```php
postApiV1BannersDismiss($x_auth_token, $x_user_id, $post_api_v1_banners_dismiss_request): \WebMI\RocketChatApiClient\NotificationsApi\Model\PostApiV1BannersDismiss200Response
```

Dismiss a Banner

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\NotificationsApi\Api\BannersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | The authorization token of the user.
$x_user_id = aobEdbYhXfu5hkeqG; // string | The user ID of the user.
$post_api_v1_banners_dismiss_request = {"bannerId":"ByehQjC44FwMeiLbX"}; // \WebMI\RocketChatApiClient\NotificationsApi\Model\PostApiV1BannersDismissRequest

try {
    $result = $apiInstance->postApiV1BannersDismiss($x_auth_token, $x_user_id, $post_api_v1_banners_dismiss_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->postApiV1BannersDismiss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authorization token of the user. | |
| **x_user_id** | **string**| The user ID of the user. | |
| **post_api_v1_banners_dismiss_request** | [**\WebMI\RocketChatApiClient\NotificationsApi\Model\PostApiV1BannersDismissRequest**](../Model/PostApiV1BannersDismissRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\NotificationsApi\Model\PostApiV1BannersDismiss200Response**](../Model/PostApiV1BannersDismiss200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
