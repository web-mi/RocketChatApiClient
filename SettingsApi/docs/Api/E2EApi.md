# RocketChatSettingsApi\E2EApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1E2eFetchMyKeys()**](E2EApi.md#getApiV1E2eFetchMyKeys) | **GET** /api/v1/e2e.fetchMyKeys | Get E2E Keys |
| [**getApiV1E2eGetUsersOfRoomWithoutKey()**](E2EApi.md#getApiV1E2eGetUsersOfRoomWithoutKey) | **GET** /api/v1/e2e.getUsersOfRoomWithoutKey | Get Users of Room Without E2E key |
| [**postApiV1E2eSetRoomKeyID()**](E2EApi.md#postApiV1E2eSetRoomKeyID) | **POST** /api/v1/e2e.setRoomKeyID | Set Room E2E Key |
| [**postApiV1E2eSetUserPublicAndPrivateKeys()**](E2EApi.md#postApiV1E2eSetUserPublicAndPrivateKeys) | **POST** /api/v1/e2e.setUserPublicAndPrivateKeys | Set User Key |
| [**postApiV1E2eUpdateGroupKey()**](E2EApi.md#postApiV1E2eUpdateGroupKey) | **POST** /api/v1/e2e.updateGroupKey | Update User E2E Key in Room |


## `getApiV1E2eFetchMyKeys()`

```php
getApiV1E2eFetchMyKeys($x_user_id, $x_auth_token): \RocketChatSettingsApi\Model\GetApiV1E2eFetchMyKeys200Response
```

Get E2E Keys

Retrieves E2E keys of logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1E2eFetchMyKeys($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->getApiV1E2eFetchMyKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1E2eFetchMyKeys200Response**](../Model/GetApiV1E2eFetchMyKeys200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1E2eGetUsersOfRoomWithoutKey()`

```php
getApiV1E2eGetUsersOfRoomWithoutKey($x_user_id, $x_auth_token, $rid): \RocketChatSettingsApi\Model\GetApiV1E2eGetUsersOfRoomWithoutKey200Response
```

Get Users of Room Without E2E key

Retrieves user IDs Of room without E2E key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$rid = 'rid_example'; // string | The room ID.

try {
    $result = $apiInstance->getApiV1E2eGetUsersOfRoomWithoutKey($x_user_id, $x_auth_token, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->getApiV1E2eGetUsersOfRoomWithoutKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **rid** | **string**| The room ID. | |

### Return type

[**\RocketChatSettingsApi\Model\GetApiV1E2eGetUsersOfRoomWithoutKey200Response**](../Model/GetApiV1E2eGetUsersOfRoomWithoutKey200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1E2eSetRoomKeyID()`

```php
postApiV1E2eSetRoomKeyID($x_user_id, $x_auth_token, $post_api_v1_e2e_set_room_key_id_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Set Room E2E Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_e2e_set_room_key_id_request = {"rid":"wCiXndNp5NqNY3uCc","keyID":"my-UniQu3_ke4_Id"}; // \RocketChatSettingsApi\Model\PostApiV1E2eSetRoomKeyIDRequest

try {
    $result = $apiInstance->postApiV1E2eSetRoomKeyID($x_user_id, $x_auth_token, $post_api_v1_e2e_set_room_key_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eSetRoomKeyID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_e2e_set_room_key_id_request** | [**\RocketChatSettingsApi\Model\PostApiV1E2eSetRoomKeyIDRequest**](../Model/PostApiV1E2eSetRoomKeyIDRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1E2eSetUserPublicAndPrivateKeys()`

```php
postApiV1E2eSetUserPublicAndPrivateKeys($x_user_id, $x_auth_token, $post_api_v1_e2e_set_user_public_and_private_keys_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Set User Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_e2e_set_user_public_and_private_keys_request = {"public_key":"My-9UbLiK-k34","private_key":"9R1V4t3_k3Y"}; // \RocketChatSettingsApi\Model\PostApiV1E2eSetUserPublicAndPrivateKeysRequest

try {
    $result = $apiInstance->postApiV1E2eSetUserPublicAndPrivateKeys($x_user_id, $x_auth_token, $post_api_v1_e2e_set_user_public_and_private_keys_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eSetUserPublicAndPrivateKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_e2e_set_user_public_and_private_keys_request** | [**\RocketChatSettingsApi\Model\PostApiV1E2eSetUserPublicAndPrivateKeysRequest**](../Model/PostApiV1E2eSetUserPublicAndPrivateKeysRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1E2eUpdateGroupKey()`

```php
postApiV1E2eUpdateGroupKey($x_user_id, $x_auth_token, $post_api_v1_e2e_update_group_key_request): \RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Update User E2E Key in Room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatSettingsApi\Api\E2EApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_e2e_update_group_key_request = {"uid":"d26x6zSkaPSe5gCyy","rid":"9R1V4t3_k3Y","key":"M4-Ubd4T3d-k39"}; // \RocketChatSettingsApi\Model\PostApiV1E2eUpdateGroupKeyRequest

try {
    $result = $apiInstance->postApiV1E2eUpdateGroupKey($x_user_id, $x_auth_token, $post_api_v1_e2e_update_group_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling E2EApi->postApiV1E2eUpdateGroupKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_e2e_update_group_key_request** | [**\RocketChatSettingsApi\Model\PostApiV1E2eUpdateGroupKeyRequest**](../Model/PostApiV1E2eUpdateGroupKeyRequest.md)|  | [optional] |

### Return type

[**\RocketChatSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
