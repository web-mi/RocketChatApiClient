# WebMI\RocketChatApiClient\MarketplaceAppsApi\DefaultApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiApps()**](DefaultApi.md#postApiApps) | **POST** /api/apps | Install Private Apps |


## `postApiApps()`

```php
postApiApps($x_auth_token, $x_user_id, $url, $app, $permissions): \WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiApps200Response
```

Install Private Apps

Install a <a href=\"https://docs.rocket.chat/docs/rocketchat-marketplace#private-apps\" target=\"_blank\">private app</a> via URL. <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `manage-apps`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0     | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MarketplaceAppsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$url = 'url_example'; // string | The app URL where the zip file is located.
$app = '/path/to/file.txt'; // \SplFileObject | The zip file containing the app.
$permissions = array(new \WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\\WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiAppsRequestPermissionsInner()); // \WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiAppsRequestPermissionsInner[] | An array of the [permissions](https://developer.rocket.chat/docs/app-permission-system) required for your app. This is required if permissions are defined in your `app.json` file.

try {
    $result = $apiInstance->postApiApps($x_auth_token, $x_user_id, $url, $app, $permissions);
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
| **url** | **string**| The app URL where the zip file is located. | [optional] |
| **app** | **\SplFileObject****\SplFileObject**| The zip file containing the app. | [optional] |
| **permissions** | [**\WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiAppsRequestPermissionsInner[]**](../Model/\WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiAppsRequestPermissionsInner.md)| An array of the [permissions](https://developer.rocket.chat/docs/app-permission-system) required for your app. This is required if permissions are defined in your &#x60;app.json&#x60; file. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MarketplaceAppsApi\Model\PostApiApps200Response**](../Model/PostApiApps200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
