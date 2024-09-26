# RocketChatMiscellaneousApi\VideoConferenceApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1VideoConferenceJitsiUpdateTimeout()**](VideoConferenceApi.md#postApiV1VideoConferenceJitsiUpdateTimeout) | **POST** /api/v1/video-conference/jitsi.update-timeout | Update Jitsi Timeout |


## `postApiV1VideoConferenceJitsiUpdateTimeout()`

```php
postApiV1VideoConferenceJitsiUpdateTimeout($x_user_id, $x_auth_token, $post_api_v1_video_conference_jitsi_update_timeout_request): \RocketChatMiscellaneousApi\Model\PostApiV1VideoConferenceJitsiUpdateTimeout200Response
```

Update Jitsi Timeout

### Changelog | Version      | Description | | ---------------- | ------------| |0.74.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\VideoConferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_video_conference_jitsi_update_timeout_request = {"roomId":"hyoM5JSQi94RwqPE7"}; // \RocketChatMiscellaneousApi\Model\PostApiV1VideoConferenceJitsiUpdateTimeoutRequest

try {
    $result = $apiInstance->postApiV1VideoConferenceJitsiUpdateTimeout($x_user_id, $x_auth_token, $post_api_v1_video_conference_jitsi_update_timeout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoConferenceApi->postApiV1VideoConferenceJitsiUpdateTimeout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_video_conference_jitsi_update_timeout_request** | [**\RocketChatMiscellaneousApi\Model\PostApiV1VideoConferenceJitsiUpdateTimeoutRequest**](../Model/PostApiV1VideoConferenceJitsiUpdateTimeoutRequest.md)|  | [optional] |

### Return type

[**\RocketChatMiscellaneousApi\Model\PostApiV1VideoConferenceJitsiUpdateTimeout200Response**](../Model/PostApiV1VideoConferenceJitsiUpdateTimeout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
