# RocketChatOmnichannelApi\VoiceChannelEventsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1VoipEvents()**](VoiceChannelEventsApi.md#getApiV1VoipEvents) | **POST** /api/v1/voip/events | Send Call Center Events |


## `getApiV1VoipEvents()`

```php
getApiV1VoipEvents($x_auth_token, $x_user_id, $get_api_v1_voip_events_request)
```

Send Call Center Events

Send the VoIP client events. Permission required: `view-l-room` ### VoIP Client Events List of VoIP client Events available in enum format:   ```json   {\"VOIP-CALL-STARTED\" = \"voip-call-started\",    \"VOIP-CALL-ENDED\" = \"voip-call-ended\",    \"VOIP-CALL-DECLINED\" = \"voip-call-declined\",    \"VOIP-CALL-ON-HOLD\" = \"voip-call-on-hold\",    \"VOIP-CALL-UNHOLD\" = \"voip-call-unhold\",    \"VOIP-CALL-DURATION\" = \"voip-call-duration\" }   ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\VoiceChannelEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$get_api_v1_voip_events_request = {"rid":"oWLW6v8c8oRGb4cC9","event":"voip-call-started"}; // \RocketChatOmnichannelApi\Model\GetApiV1VoipEventsRequest

try {
    $apiInstance->getApiV1VoipEvents($x_auth_token, $x_user_id, $get_api_v1_voip_events_request);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelEventsApi->getApiV1VoipEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **get_api_v1_voip_events_request** | [**\RocketChatOmnichannelApi\Model\GetApiV1VoipEventsRequest**](../Model/GetApiV1VoipEventsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
