# WebMIRocketChatApiClientContentManagementApi\CustomEmojiApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1EmojiCustomAll()**](CustomEmojiApi.md#getApiV1EmojiCustomAll) | **GET** /api/v1/emoji-custom.all | List All Custom Emojis |
| [**getApiV1EmojiCustomList()**](CustomEmojiApi.md#getApiV1EmojiCustomList) | **GET** /api/v1/emoji-custom.list | Get Updated List of Custom Emojis |
| [**postApiV1EmojiCustomCreate()**](CustomEmojiApi.md#postApiV1EmojiCustomCreate) | **POST** /api/v1/emoji-custom.create | Create an Emoji |
| [**postApiV1EmojiCustomDelete()**](CustomEmojiApi.md#postApiV1EmojiCustomDelete) | **POST** /api/v1/emoji-custom.delete | Delete a Custom Emoji |
| [**postApiV1EmojiCustomUpdate()**](CustomEmojiApi.md#postApiV1EmojiCustomUpdate) | **POST** /api/v1/emoji-custom.update | Update a Custom Emoji |


## `getApiV1EmojiCustomAll()`

```php
getApiV1EmojiCustomAll($x_auth_token, $x_user_id): \WebMIRocketChatApiClientContentManagementApi\Model\GetApiV1EmojiCustomAll200Response
```

List All Custom Emojis

List all custom emojis.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.63.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientContentManagementApi\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1EmojiCustomAll($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->getApiV1EmojiCustomAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMIRocketChatApiClientContentManagementApi\Model\GetApiV1EmojiCustomAll200Response**](../Model/GetApiV1EmojiCustomAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EmojiCustomList()`

```php
getApiV1EmojiCustomList($x_auth_token, $x_user_id, $updated_since, $query): \WebMIRocketChatApiClientContentManagementApi\Model\GetApiV1EmojiCustomList200Response
```

Get Updated List of Custom Emojis

Get an updated list of custom emojis.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.75.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientContentManagementApi\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$updated_since = 2017-11-25T15:08:17.248Z; // string | Date since the emojis were updated. Format: ISO string. When you provide the `updatedSince` query parameter in the URL then the `update` and `remove` in the response will contain only those updated and removed since this date and time.
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }

try {
    $result = $apiInstance->getApiV1EmojiCustomList($x_auth_token, $x_user_id, $updated_since, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->getApiV1EmojiCustomList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **updated_since** | **string**| Date since the emojis were updated. Format: ISO string. When you provide the &#x60;updatedSince&#x60; query parameter in the URL then the &#x60;update&#x60; and &#x60;remove&#x60; in the response will contain only those updated and removed since this date and time. | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |

### Return type

[**\WebMIRocketChatApiClientContentManagementApi\Model\GetApiV1EmojiCustomList200Response**](../Model/GetApiV1EmojiCustomList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1EmojiCustomCreate()`

```php
postApiV1EmojiCustomCreate($x_auth_token, $x_user_id, $emoji, $name, $aliases): \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Create an Emoji

Create a custom emoji.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientContentManagementApi\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$emoji = "/path/to/file.txt"; // \SplFileObject | The image file to use as the new custom emoji.
$name = 'name_example'; // string | The name of the new custom emoji.
$aliases = 'aliases_example'; // string | The alias of the new custom emoji.

try {
    $result = $apiInstance->postApiV1EmojiCustomCreate($x_auth_token, $x_user_id, $emoji, $name, $aliases);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **emoji** | **\SplFileObject****\SplFileObject**| The image file to use as the new custom emoji. | |
| **name** | **string**| The name of the new custom emoji. | |
| **aliases** | **string**| The alias of the new custom emoji. | |

### Return type

[**\WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1EmojiCustomDelete()`

```php
postApiV1EmojiCustomDelete($x_auth_token, $x_user_id, $post_api_v1_emoji_custom_delete_request): \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Delete a Custom Emoji

Delete a custom emoji.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientContentManagementApi\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_emoji_custom_delete_request = {"emojiId":"6542e83aa2f73c7460e18efb"}; // \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomDeleteRequest

try {
    $result = $apiInstance->postApiV1EmojiCustomDelete($x_auth_token, $x_user_id, $post_api_v1_emoji_custom_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_emoji_custom_delete_request** | [**\WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomDeleteRequest**](../Model/PostApiV1EmojiCustomDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1EmojiCustomUpdate()`

```php
postApiV1EmojiCustomUpdate($x_user_id, $x_auth_token, $post_api_v1_emoji_custom_update_request): \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response
```

Update a Custom Emoji

Update a custom emoji. ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientContentManagementApi\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$post_api_v1_emoji_custom_update_request = new \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomUpdateRequest(); // \WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomUpdateRequest | If you are updating the image, provide the image file as form data.

try {
    $result = $apiInstance->postApiV1EmojiCustomUpdate($x_user_id, $x_auth_token, $post_api_v1_emoji_custom_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **post_api_v1_emoji_custom_update_request** | [**\WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomUpdateRequest**](../Model/PostApiV1EmojiCustomUpdateRequest.md)| If you are updating the image, provide the image file as form data. | [optional] |

### Return type

[**\WebMIRocketChatApiClientContentManagementApi\Model\PostApiV1EmojiCustomCreate200Response**](../Model/PostApiV1EmojiCustomCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
