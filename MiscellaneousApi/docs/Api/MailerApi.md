# RocketChatMiscellaneousApi\MailerApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1Mailer()**](MailerApi.md#postApiV1Mailer) | **POST** /api/v1/mailer | Send Mailer Endpoint |
| [**postApiV1MailerUnsubscribe()**](MailerApi.md#postApiV1MailerUnsubscribe) | **POST** /api/v1/mailer.unsubscribe | Mailer Unsubscribe Endpoint |


## `postApiV1Mailer()`

```php
postApiV1Mailer($x_auth_token, $x_user_id, $post_api_v1_mailer_request): \RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Send Mailer Endpoint

Send emails to users from your workspace.  | Version      | Description | | ---------------- | ------------| |5.4.0      | Added      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\MailerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_mailer_request = {"from":"test.test@test.com","subject":"Welcome to the Test Newsletter","body":"Thank you for subscribing to the Test Newsletter. If this was not you feel free to unsubscribe by hitting the following button [unsubscribe]","dryrun":"true"}; // \RocketChatMiscellaneousApi\Model\PostApiV1MailerRequest

try {
    $result = $apiInstance->postApiV1Mailer($x_auth_token, $x_user_id, $post_api_v1_mailer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailerApi->postApiV1Mailer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_mailer_request** | [**\RocketChatMiscellaneousApi\Model\PostApiV1MailerRequest**](../Model/PostApiV1MailerRequest.md)|  | [optional] |

### Return type

[**\RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1MailerUnsubscribe()`

```php
postApiV1MailerUnsubscribe($x_auth_token, $x_user_id, $post_api_v1_mailer_unsubscribe_request): \RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Mailer Unsubscribe Endpoint

Send emails to users from your workspace.  ### Changelog | Version      | Description | | ------------ | ------------| |5.4.0         | Added      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatMiscellaneousApi\Api\MailerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_mailer_unsubscribe_request = {"_id":"c6Lsa9SFVFxJLR56H","createdAt":"1692284808957"}; // \RocketChatMiscellaneousApi\Model\PostApiV1MailerUnsubscribeRequest

try {
    $result = $apiInstance->postApiV1MailerUnsubscribe($x_auth_token, $x_user_id, $post_api_v1_mailer_unsubscribe_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailerApi->postApiV1MailerUnsubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_mailer_unsubscribe_request** | [**\RocketChatMiscellaneousApi\Model\PostApiV1MailerUnsubscribeRequest**](../Model/PostApiV1MailerUnsubscribeRequest.md)|  | [optional] |

### Return type

[**\RocketChatMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
