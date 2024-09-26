# WebMIRocketChatApiClientMiscellaneousApi\AutoTranslateApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1AutotranslateGetSupportedLanguages()**](AutoTranslateApi.md#getApiV1AutotranslateGetSupportedLanguages) | **GET** /api/v1/autotranslate.getSupportedLanguages | Get Supported Languages |
| [**postApiV1AutotranslateSaveSettings()**](AutoTranslateApi.md#postApiV1AutotranslateSaveSettings) | **POST** /api/v1/autotranslate.saveSettings | Save Auto-Translate  Settings |
| [**postApiV1AutotranslateTranslateMessage()**](AutoTranslateApi.md#postApiV1AutotranslateTranslateMessage) | **POST** /api/v1/autotranslate.translateMessage | Translate Message |


## `getApiV1AutotranslateGetSupportedLanguages()`

```php
getApiV1AutotranslateGetSupportedLanguages($x_auth_token, $x_user_id, $target_language): \WebMIRocketChatApiClientMiscellaneousApi\Model\GetApiV1AutotranslateGetSupportedLanguages200Response
```

Get Supported Languages

To learn how to enable the auto-translate feature, see the <a href=\"https://docs.rocket.chat/docs/message#autotranslate\" target=\"_blank\">Auto-Translate</a> user guide.  Get the supported languages by the auto-translate. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMiscellaneousApi\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$target_language = en; // string | Language in which the language names will be returned.

try {
    $result = $apiInstance->getApiV1AutotranslateGetSupportedLanguages($x_auth_token, $x_user_id, $target_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->getApiV1AutotranslateGetSupportedLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **target_language** | **string**| Language in which the language names will be returned. | |

### Return type

[**\WebMIRocketChatApiClientMiscellaneousApi\Model\GetApiV1AutotranslateGetSupportedLanguages200Response**](../Model/GetApiV1AutotranslateGetSupportedLanguages200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1AutotranslateSaveSettings()`

```php
postApiV1AutotranslateSaveSettings($x_auth_token, $x_user_id, $post_api_v1_autotranslate_save_settings_request): \WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Save Auto-Translate  Settings

Saves autotranslate settings for a room. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMiscellaneousApi\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_autotranslate_save_settings_request = {"roomId":"7aDSXtjMA3KPLxLjt","field":"autoTranslate","value":true,"defaultLanguage":"en"}; // \WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettingsRequest

try {
    $result = $apiInstance->postApiV1AutotranslateSaveSettings($x_auth_token, $x_user_id, $post_api_v1_autotranslate_save_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->postApiV1AutotranslateSaveSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_autotranslate_save_settings_request** | [**\WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettingsRequest**](../Model/PostApiV1AutotranslateSaveSettingsRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1AutotranslateTranslateMessage()`

```php
postApiV1AutotranslateTranslateMessage($x_auth_token, $x_user_id, $post_api_v1_autotranslate_translate_message_request): \WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateTranslateMessage200Response
```

Translate Message

Auto-translates the provided message. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientMiscellaneousApi\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_autotranslate_translate_message_request = {"messageId":"Fq7sQNSnDEfzj8qoS","targetLanguage":"en"}; // \WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateTranslateMessageRequest

try {
    $result = $apiInstance->postApiV1AutotranslateTranslateMessage($x_auth_token, $x_user_id, $post_api_v1_autotranslate_translate_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->postApiV1AutotranslateTranslateMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_autotranslate_translate_message_request** | [**\WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateTranslateMessageRequest**](../Model/PostApiV1AutotranslateTranslateMessageRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientMiscellaneousApi\Model\PostApiV1AutotranslateTranslateMessage200Response**](../Model/PostApiV1AutotranslateTranslateMessage200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
