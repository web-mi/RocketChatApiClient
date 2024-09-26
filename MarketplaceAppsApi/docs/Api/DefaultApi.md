# RocketChatMarketplaceAppsApi\DefaultApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiApps()**](DefaultApi.md#postApiApps) | **POST** /api/apps | Install Private Apps |


## `postApiApps()`

```php
postApiApps($x_auth_token, $x_user_id, $post_api_apps_request): \RocketChatMarketplaceAppsApi\Model\PostApiApps200Response
```

Install Private Apps

Install a <a href=\"https://docs.rocket.chat/docs/rocketchat-marketplace#private-apps\" target=\"_blank\">private app</a> via URL. <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `manage-apps`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0     | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMarketplaceAppsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_apps_request = {"url":"https://github.com/RocketChat/Apps.RocketChat.Tester/blob/master/dist/appsrocketchattester_0.0.5.zip?raw=true"}; // \RocketChatMarketplaceAppsApi\Model\PostApiAppsRequest

try {
    $result = $apiInstance->postApiApps($x_auth_token, $x_user_id, $post_api_apps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_apps_request** | [**\RocketChatMarketplaceAppsApi\Model\PostApiAppsRequest**](../Model/PostApiAppsRequest.md)|  | [optional] |

### Return type

[**\RocketChatMarketplaceAppsApi\Model\PostApiApps200Response**](../Model/PostApiApps200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
