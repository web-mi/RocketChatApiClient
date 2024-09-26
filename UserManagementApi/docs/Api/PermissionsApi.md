# WebMIRocketChatApiClientUserManagementApi\PermissionsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPermissionsListAll()**](PermissionsApi.md#getPermissionsListAll) | **GET** /api/v1/permissions.listAll | List All Permissions |
| [**postApiV1PermissionsUpdate()**](PermissionsApi.md#postApiV1PermissionsUpdate) | **POST** /api/v1/permissions.update | Update Permissions |


## `getPermissionsListAll()`

```php
getPermissionsListAll($x_user_id, $x_auth_token, $updated_since): \WebMIRocketChatApiClientUserManagementApi\Model\GetPermissionsListAll200Response
```

List All Permissions

Returns the list of <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>permissions</a> from the workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.73.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientUserManagementApi\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$updated_since = 2017-11-25T15:08:17.248Z; // string | Date as ISO string. If you include this parameter, the `update` and `remove` fields in the response will contain only those permissions updated and removed since this date and time.

try {
    $result = $apiInstance->getPermissionsListAll($x_user_id, $x_auth_token, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissionsListAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **updated_since** | **string**| Date as ISO string. If you include this parameter, the &#x60;update&#x60; and &#x60;remove&#x60; fields in the response will contain only those permissions updated and removed since this date and time. | [optional] |

### Return type

[**\WebMIRocketChatApiClientUserManagementApi\Model\GetPermissionsListAll200Response**](../Model/GetPermissionsListAll200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1PermissionsUpdate()`

```php
postApiV1PermissionsUpdate($x_user_id, $x_auth_token, $post_api_v1_permissions_update_request): \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1PermissionsUpdate200Response
```

Update Permissions

Update the <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>permissions</a> on the workspace. Permission required: `access-permissions` ### Changelog | Version      | Description | | ---------------- | ------------| |0.66.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientUserManagementApi\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_permissions_update_request = {"permissions":[{"_id":"access-permissions","roles":["admin"]}]}; // \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1PermissionsUpdateRequest | 

try {
    $result = $apiInstance->postApiV1PermissionsUpdate($x_user_id, $x_auth_token, $post_api_v1_permissions_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->postApiV1PermissionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_permissions_update_request** | [**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1PermissionsUpdateRequest**](../Model/PostApiV1PermissionsUpdateRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1PermissionsUpdate200Response**](../Model/PostApiV1PermissionsUpdate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
