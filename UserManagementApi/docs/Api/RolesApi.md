# WebMI\RocketChatApiClient\UserManagementApi\RolesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1RolesGetUsersInRole()**](RolesApi.md#getApiV1RolesGetUsersInRole) | **GET** /api/v1/roles.getUsersInRole | Get Users of a Role |
| [**getApiV1RolesList()**](RolesApi.md#getApiV1RolesList) | **GET** /api/v1/roles.list | Get Roles |
| [**getApiV1RolesSync()**](RolesApi.md#getApiV1RolesSync) | **GET** /api/v1/roles.sync | Get Updated Roles |
| [**postApiV1RolesAddUserToRole()**](RolesApi.md#postApiV1RolesAddUserToRole) | **POST** /api/v1/roles.addUserToRole | Assign Role to User |
| [**postApiV1RolesCreate()**](RolesApi.md#postApiV1RolesCreate) | **POST** /api/v1/roles.create | Create Role |
| [**postApiV1RolesDelete()**](RolesApi.md#postApiV1RolesDelete) | **POST** /api/v1/roles.delete | Delete Role |
| [**postApiV1RolesRemoveUserFromRole()**](RolesApi.md#postApiV1RolesRemoveUserFromRole) | **POST** /api/v1/roles.removeUserFromRole | Remove Role from User |
| [**postApiV1RolesUpdate()**](RolesApi.md#postApiV1RolesUpdate) | **POST** /api/v1/roles.update | Update Role |


## `getApiV1RolesGetUsersInRole()`

```php
getApiV1RolesGetUsersInRole($role, $x_user_id, $x_auth_token, $room_id, $offset, $count): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesGetUsersInRole200Response
```

Get Users of a Role

Gets the users that belong to a specific role. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role = 653ec9873c7460e18e6f; // string | The role name or the role ID. For custom roles, use the role ID.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$room_id = hfiec783ifjl; // string | The room ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 50; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1RolesGetUsersInRole($role, $x_user_id, $x_auth_token, $room_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesGetUsersInRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| The role name or the role ID. For custom roles, use the role ID. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **room_id** | **string**| The room ID. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| How many items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesGetUsersInRole200Response**](../Model/GetApiV1RolesGetUsersInRole200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RolesList()`

```php
getApiV1RolesList($x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesList200Response
```

Get Roles

Gets all the roles in the workspace. ### Changelog | Version      | Description |  | ---------------- | ------------| |0.73.0            | Added `mandatory2fa` property       | |0.70.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1RolesList($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesList200Response**](../Model/GetApiV1RolesList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1RolesSync()`

```php
getApiV1RolesSync($updated_since, $x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesSync200Response
```

Get Updated Roles

Gets all the roles in the workspace which are updated after a given date.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updated_since = 2017-11-25T15:08:17.248Z; // string | Date as ISO string.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1RolesSync($updated_since, $x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_since** | **string**| Date as ISO string. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1RolesSync200Response**](../Model/GetApiV1RolesSync200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RolesAddUserToRole()`

```php
postApiV1RolesAddUserToRole($x_user_id, $x_auth_token, $post_api_v1_roles_add_user_to_role_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesAddUserToRole200Response
```

Assign Role to User

Assign a role to a user. Optionally, you can set this role to a user for a specific room.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.70.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_roles_add_user_to_role_request = {"roleName":"auditor-log","username":"test.fun","roomId":"64adb09baa5ad4273bfc"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesAddUserToRoleRequest | By default, the three major room roles are available in Rocket.Chat are **Owner**, **Leader**, and **Moderator**.  [Creating custom roles](https://docs.rocket.chat/use-rocket.chat/user-management/custom-roles) is exclusively available on the Enterprise plan.  Refer to [Roles](https://docs.rocket.chat/setup-and-configure/roles-in-rocket.chat) for more information.

try {
    $result = $apiInstance->postApiV1RolesAddUserToRole($x_user_id, $x_auth_token, $post_api_v1_roles_add_user_to_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesAddUserToRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_roles_add_user_to_role_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesAddUserToRoleRequest**](../Model/PostApiV1RolesAddUserToRoleRequest.md)| By default, the three major room roles are available in Rocket.Chat are **Owner**, **Leader**, and **Moderator**.  [Creating custom roles](https://docs.rocket.chat/use-rocket.chat/user-management/custom-roles) is exclusively available on the Enterprise plan.  Refer to [Roles](https://docs.rocket.chat/setup-and-configure/roles-in-rocket.chat) for more information. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesAddUserToRole200Response**](../Model/PostApiV1RolesAddUserToRole200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RolesCreate()`

```php
postApiV1RolesCreate($x_user_id, $x_auth_token, $post_api_v1_roles_create_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreate200Response
```

Create Role

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Create a new <a href='https://docs.rocket.chat/docs/roles-in-rocketchat' target='_blank'>role</a> in the workspace. See <a href='https://docs.rocket.chat/v1/docs/custom-roles' target='_blank'>Custom Roles</a> for further information.   * You can't create new roles with the same name as existing roles. For example, it is not possible to create a new role with the name `admin`.  * The scope can either be `Users`(user level) or `Subscriptions`(room level).  * Permission required: `access-permissions`    ### Changelog  | Version      | Description |  | ---------------- | ------------|  |6.0.0            | Moved to Enterprise plan.       |  |3.15.0            | The endpoint is no longer used to update roles.       |  |0.70.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_roles_create_request = {"name":"Test Role","scope":"Users","description":"Testing Role for API","mandatory2fa":false}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreateRequest

try {
    $result = $apiInstance->postApiV1RolesCreate($x_user_id, $x_auth_token, $post_api_v1_roles_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_roles_create_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreateRequest**](../Model/PostApiV1RolesCreateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreate200Response**](../Model/PostApiV1RolesCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RolesDelete()`

```php
postApiV1RolesDelete($x_user_id, $x_auth_token, $post_api_v1_roles_delete_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Delete Role

Permission required: `access-permissions` - Roles that have the protected value as true can't be deleted (such as: `admin`, `moderator`, `user` and so on). - You cannot delete roles that are assigned to users. To do that, you must first remove this role from all the users.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.17.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_roles_delete_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDeleteRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDeleteRequest

try {
    $result = $apiInstance->postApiV1RolesDelete($x_user_id, $x_auth_token, $post_api_v1_roles_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_roles_delete_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDeleteRequest**](../Model/PostApiV1RolesDeleteRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response**](../Model/PostApiV1RolesDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RolesRemoveUserFromRole()`

```php
postApiV1RolesRemoveUserFromRole($x_user_id, $x_auth_token, $post_api_v1_roles_remove_user_from_role_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Remove Role from User

Permission required: `access-permissions` Remove a role from a user. Optionally, you can remove this role from a specified scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_roles_remove_user_from_role_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesRemoveUserFromRoleRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesRemoveUserFromRoleRequest

try {
    $result = $apiInstance->postApiV1RolesRemoveUserFromRole($x_user_id, $x_auth_token, $post_api_v1_roles_remove_user_from_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesRemoveUserFromRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_roles_remove_user_from_role_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesRemoveUserFromRoleRequest**](../Model/PostApiV1RolesRemoveUserFromRoleRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response**](../Model/PostApiV1RolesDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1RolesUpdate()`

```php
postApiV1RolesUpdate($x_user_id, $x_auth_token, $post_api_v1_roles_update_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreate200Response
```

Update Role

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Update a role in the workspace. <br>  Permission required: `access-permissions`          ### Changelog | Version      | Description | | ---------------- | ------------| |6.0.0            | Moved to Enterprise plan.       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_roles_update_request = {"roleId":"646c431fa8c3a3ba32d0e1c4","name":"Test Role","scope":"Users","description":"Testing Role for API","mandatory2fa":false}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesUpdateRequest

try {
    $result = $apiInstance->postApiV1RolesUpdate($x_user_id, $x_auth_token, $post_api_v1_roles_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_roles_update_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesUpdateRequest**](../Model/PostApiV1RolesUpdateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesCreate200Response**](../Model/PostApiV1RolesCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
