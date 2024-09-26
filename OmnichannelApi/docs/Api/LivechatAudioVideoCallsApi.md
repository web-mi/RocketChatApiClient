# RocketChatOmnichannelApi\LivechatAudioVideoCallsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatWebrtcCall()**](LivechatAudioVideoCallsApi.md#getApiV1LivechatWebrtcCall) | **GET** /api/v1/livechat/webrtc.call | Start Call |
| [**putApiV1LivechatWebrtcCallCallId()**](LivechatAudioVideoCallsApi.md#putApiV1LivechatWebrtcCallCallId) | **PUT** /api/v1/livechat/webrtc.call/{callId} | Update Call Status |


## `getApiV1LivechatWebrtcCall()`

```php
getApiV1LivechatWebrtcCall($x_auth_token, $x_user_id, $rid): \RocketChatOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response
```

Start Call

**Note**: WebRTC is no longer supported with Omnichannel Livechat audio/video calls. - To configure audio/video calls, see <a href=\"https://docs.rocket.chat/docs/omnichannel-videoaudio-call-configuration\" target=\"_blank\">Omnichannel Video/Audio Call Configuration</a>. - To configure voice channel, see <a href=\"https://docs.rocket.chat/docs/rocketchat-conference-call\" target=\"_blank\">Voice Channel</a>. <br> - To start a WebRTC audio/video call in a room requires the `view-l-room` <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">permission</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatAudioVideoCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$rid = 'rid_example'; // string | The room ID.

try {
    $result = $apiInstance->getApiV1LivechatWebrtcCall($x_auth_token, $x_user_id, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAudioVideoCallsApi->getApiV1LivechatWebrtcCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **rid** | **string**| The room ID. | |

### Return type

[**\RocketChatOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response**](../Model/GetApiV1LivechatWebrtcCall200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatWebrtcCallCallId()`

```php
putApiV1LivechatWebrtcCallCallId($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request): \RocketChatOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response
```

Update Call Status

**Note**: WebRTC is no longer supported with Omnichannel Livechat audio/video calls. - To configure audio/video calls, see <a href=\"https://docs.rocket.chat/docs/omnichannel-videoaudio-call-configuration\" target=\"_blank\">Omnichannel Video/Audio Call Configuration</a>. - To configure voice channel, see <a href=\"https://docs.rocket.chat/docs/rocketchat-conference-call\" target=\"_blank\">Voice Channel</a>. <br> - To  Update the call status of an existing WebRTC audio/video call requires the `view-l-room` <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">permission</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatAudioVideoCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$call_id = zRAeTszXor8CCPceB; // string | The call message _id.
$put_api_v1_livechat_webrtc_call_call_id_request = new \RocketChatOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest(); // \RocketChatOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest

try {
    $result = $apiInstance->putApiV1LivechatWebrtcCallCallId($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatAudioVideoCallsApi->putApiV1LivechatWebrtcCallCallId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **call_id** | **string**| The call message _id. | |
| **put_api_v1_livechat_webrtc_call_call_id_request** | [**\RocketChatOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest**](../Model/PutApiV1LivechatWebrtcCallCallIdRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response**](../Model/PutApiV1LivechatWebrtcCallCallId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
