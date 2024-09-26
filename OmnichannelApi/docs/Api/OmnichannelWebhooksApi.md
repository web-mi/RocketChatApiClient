# RocketChatOmnichannelApi\OmnichannelWebhooksApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1LivechatWebhookTest()**](OmnichannelWebhooksApi.md#postApiV1LivechatWebhookTest) | **POST** /api/v1/livechat/webhook.test | Test the Webhook Integration |
| [**postApiV1OmnichannelIntegrations()**](OmnichannelWebhooksApi.md#postApiV1OmnichannelIntegrations) | **POST** /api/v1/omnichannel/integrations | Set up Omnichannel webhook |


## `postApiV1LivechatWebhookTest()`

```php
postApiV1LivechatWebhookTest($x_auth_token, $x_user_id): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Test the Webhook Integration

This endpoint sends sample data to test whether the [configured webhook URL](https://docs.rocket.chat/docs/webhooks) is functioning correctly. Permission required: `view-livechat-webhooks`.  The data you can expect on your webhook for this test follows this format: ``` {   \"type\": \"LivechatSession\",   \"_id\": \"fasd6f5a4sd6f8a4sdf\",   \"label\": \"title\",   \"topic\": \"asiodojf\",   \"createdAt\": \"2024-09-18T12:22:02.975Z\",   \"lastMessageAt\": \"2024-09-18T12:22:02.975Z\",   \"tags\": [     \"tag1\",     \"tag2\",     \"tag3\"   ],   \"customFields\": {     \"productId\": \"123456\"   },   \"visitor\": {     \"_id\": \"\",     \"name\": \"visitor name\",     \"username\": \"visitor-username\",     \"department\": \"department\",     \"email\": \"email@address.com\",     \"phone\": \"192873192873\",     \"ip\": \"123.456.7.89\",     \"browser\": \"Chrome\",     \"os\": \"Linux\",     \"customFields\": {       \"customerId\": \"123456\"     }   },   \"agent\": {     \"_id\": \"asdf89as6df8\",     \"username\": \"agent.username\",     \"name\": \"Agent Name\",     \"email\": \"agent@email.com\"   },   \"messages\": [     {       \"username\": \"visitor-username\",       \"msg\": \"message content\",       \"ts\": \"2024-09-18T12:22:02.975Z\"     },     {       \"username\": \"agent.username\",       \"agentId\": \"asdf89as6df8\",       \"msg\": \"message content from agent\",       \"ts\": \"2024-09-18T12:22:02.975Z\"     }   ] } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\OmnichannelWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->postApiV1LivechatWebhookTest($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnichannelWebhooksApi->postApiV1LivechatWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1OmnichannelIntegrations()`

```php
postApiV1OmnichannelIntegrations($x_auth_token, $x_user_id, $post_api_v1_omnichannel_integrations_request): \RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Set up Omnichannel webhook

Set up a [webhook](https://docs.rocket.chat/docs/webhooks) to easily integrate Omnichannel with your CRM. Permission required: `view-livechat-manager`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\OmnichannelWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_omnichannel_integrations_request = {"LivechatWebhookUrl":"https://webhook/d548683u3-7f38ow-48ba-ieooefa-oejiduiw","LivechatSecretToken":"","LivechatHttpTimeout":5000,"LivechatWebhookOnStart":true,"LivechatWebhookOnClose":true,"LivechatWebhookOnChatTaken":true,"LivechatWebhookOnChatQueued":false,"LivechatWebhookOnForward":false,"LivechatWebhookOnOfflineMsg":true,"LivechatWebhookOnVisitorMessage":true,"LivechatWebhookOnAgentMessage":true}; // \RocketChatOmnichannelApi\Model\PostApiV1OmnichannelIntegrationsRequest

try {
    $result = $apiInstance->postApiV1OmnichannelIntegrations($x_auth_token, $x_user_id, $post_api_v1_omnichannel_integrations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnichannelWebhooksApi->postApiV1OmnichannelIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_omnichannel_integrations_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1OmnichannelIntegrationsRequest**](../Model/PostApiV1OmnichannelIntegrationsRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
