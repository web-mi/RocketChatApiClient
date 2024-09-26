# WebMI\RocketChatApiClient\MiscellaneousApi\InviteApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1RemoveInviteId()**](InviteApi.md#deleteApiV1RemoveInviteId) | **DELETE** /api/v1/removeInvite/{_id} | Delete Invite by ID |
| [**getApiV1ListInvites()**](InviteApi.md#getApiV1ListInvites) | **GET** /api/v1/listInvites | List Invites |
| [**postApiV1FindOrCreateInvite()**](InviteApi.md#postApiV1FindOrCreateInvite) | **POST** /api/v1/findOrCreateInvite | Find or Create Invite |
| [**postApiV1UseInviteToken()**](InviteApi.md#postApiV1UseInviteToken) | **POST** /api/v1/useInviteToken | Report Invite Token Usage |
| [**postApiV1ValidateInviteToken()**](InviteApi.md#postApiV1ValidateInviteToken) | **POST** /api/v1/validateInviteToken | Validate Invite Token |


## `deleteApiV1RemoveInviteId()`

```php
deleteApiV1RemoveInviteId($x_auth_token, $x_user_id, $_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Delete Invite by ID

Deletes an invite from the workspace.    <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>Permission</a> required: `create-invite-links`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = kDKQ3H; // string | The invite ID to be deleted.

try {
    $result = $apiInstance->deleteApiV1RemoveInviteId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->deleteApiV1RemoveInviteId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| The invite ID to be deleted. | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ListInvites()`

```php
getApiV1ListInvites(): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInvite200ResponseInner[]
```

List Invites

Lists all of the invites on the workspace.   <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `create-invite-links`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1ListInvites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->getApiV1ListInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInvite200ResponseInner[]**](../Model/PostApiV1FindOrCreateInvite200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1FindOrCreateInvite()`

```php
postApiV1FindOrCreateInvite($x_auth_token, $x_user_id, $post_api_v1_find_or_create_invite_request): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInvite200ResponseInner[]
```

Find or Create Invite

Creates or return an existing invite with the specified parameters.   <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `create-invite-links`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_find_or_create_invite_request = {"rid":"csFYrDeixJG7PnrAh","days":10,"maxUses":0}; // \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInviteRequest

try {
    $result = $apiInstance->postApiV1FindOrCreateInvite($x_auth_token, $x_user_id, $post_api_v1_find_or_create_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1FindOrCreateInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_find_or_create_invite_request** | [**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInviteRequest**](../Model/PostApiV1FindOrCreateInviteRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1FindOrCreateInvite200ResponseInner[]**](../Model/PostApiV1FindOrCreateInvite200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UseInviteToken()`

```php
postApiV1UseInviteToken($x_auth_token, $x_user_id, $post_api_v1_use_invite_token_request): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1UseInviteToken200Response
```

Report Invite Token Usage

Report to the workspace that an invite token was used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_use_invite_token_request = {"token":"iS7pza"}; // \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1UseInviteTokenRequest

try {
    $result = $apiInstance->postApiV1UseInviteToken($x_auth_token, $x_user_id, $post_api_v1_use_invite_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1UseInviteToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_use_invite_token_request** | [**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1UseInviteTokenRequest**](../Model/PostApiV1UseInviteTokenRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1UseInviteToken200Response**](../Model/PostApiV1UseInviteToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ValidateInviteToken()`

```php
postApiV1ValidateInviteToken($post_api_v1_validate_invite_token_request): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1ValidateInviteToken200Response
```

Validate Invite Token

Checks if an invite token is valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_validate_invite_token_request = iS7pza; // \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1ValidateInviteTokenRequest

try {
    $result = $apiInstance->postApiV1ValidateInviteToken($post_api_v1_validate_invite_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1ValidateInviteToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_validate_invite_token_request** | [**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1ValidateInviteTokenRequest**](../Model/PostApiV1ValidateInviteTokenRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1ValidateInviteToken200Response**](../Model/PostApiV1ValidateInviteToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
