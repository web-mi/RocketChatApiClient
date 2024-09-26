# WebMIRocketChatApiClientOmnichannelApi\VoiceChannelQueueMembershipApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1VoipQueuesGetMembershipSubscription()**](VoiceChannelQueueMembershipApi.md#getApiV1VoipQueuesGetMembershipSubscription) | **GET** /api/v1/voip/queues.getMembershipSubscription | Get Call Center Queue Membership Subscription Information |
| [**getApiV1VoipQueuesGetQueuedCallsForThisExtension()**](VoiceChannelQueueMembershipApi.md#getApiV1VoipQueuesGetQueuedCallsForThisExtension) | **GET** /api/v1/voip/queues.getQueuedCallsForThisExtension | Get Call Center Queue Membership Information |


## `getApiV1VoipQueuesGetMembershipSubscription()`

```php
getApiV1VoipQueuesGetMembershipSubscription($x_auth_token, $x_user_id, $extension): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1VoipQueuesGetMembershipSubscription200Response
```

Get Call Center Queue Membership Subscription Information

Permission required: `inbound-voip-calls`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\VoiceChannelQueueMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$extension = 1293; // string | The phone extension for VoIP.

try {
    $result = $apiInstance->getApiV1VoipQueuesGetMembershipSubscription($x_auth_token, $x_user_id, $extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelQueueMembershipApi->getApiV1VoipQueuesGetMembershipSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **extension** | **string**| The phone extension for VoIP. | |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1VoipQueuesGetMembershipSubscription200Response**](../Model/GetApiV1VoipQueuesGetMembershipSubscription200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1VoipQueuesGetQueuedCallsForThisExtension()`

```php
getApiV1VoipQueuesGetQueuedCallsForThisExtension($x_auth_token, $x_user_id, $extension): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1VoipQueuesGetQueuedCallsForThisExtension200Response
```

Get Call Center Queue Membership Information

Permission required: `inbound-voip-calls`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\VoiceChannelQueueMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$extension = 1293; // string | The phone extension for VoIP.

try {
    $result = $apiInstance->getApiV1VoipQueuesGetQueuedCallsForThisExtension($x_auth_token, $x_user_id, $extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoiceChannelQueueMembershipApi->getApiV1VoipQueuesGetQueuedCallsForThisExtension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **extension** | **string**| The phone extension for VoIP. | |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1VoipQueuesGetQueuedCallsForThisExtension200Response**](../Model/GetApiV1VoipQueuesGetQueuedCallsForThisExtension200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
