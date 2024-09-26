# RocketChatMarketplaceAppsApi\RasaAppApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiAppsPublicAppIdIncoming()**](RasaAppApi.md#postApiAppsPublicAppIdIncoming) | **POST** /api/apps/public/{app-id}/incoming | Close Chat or Perform Handover |


## `postApiAppsPublicAppIdIncoming()`

```php
postApiAppsPublicAppIdIncoming($app_id, $x_auth_token, $x_user_id, $post_api_apps_public_app_id_incoming_request): \RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdIncoming200Response
```

Close Chat or Perform Handover

Close a chat session or perform handover. The appropriate endpoint URL including the `appId` for  closing chat or perfoming handover in your workspace is displayed under **App Info > Details > APIs > POST incoming** section of the Rasa app.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.0.0     | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMarketplaceAppsApi\Api\RasaAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The app id. Navigate to App Info > Details > APIs > POST incoming to get the complete URL for this endpoint.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_apps_public_app_id_incoming_request = {"action":"close-chat","sessionId":"2Sfq8wXw4fYPMf6r4"}; // \RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdIncomingRequest

try {
    $result = $apiInstance->postApiAppsPublicAppIdIncoming($app_id, $x_auth_token, $x_user_id, $post_api_apps_public_app_id_incoming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RasaAppApi->postApiAppsPublicAppIdIncoming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The app id. Navigate to App Info &gt; Details &gt; APIs &gt; POST incoming to get the complete URL for this endpoint. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_apps_public_app_id_incoming_request** | [**\RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdIncomingRequest**](../Model/PostApiAppsPublicAppIdIncomingRequest.md)|  | [optional] |

### Return type

[**\RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdIncoming200Response**](../Model/PostApiAppsPublicAppIdIncoming200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
