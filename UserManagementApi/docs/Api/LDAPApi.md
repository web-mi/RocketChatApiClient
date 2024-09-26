# WebMIRocketChatApiClientUserManagementApi\LDAPApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1LdapSyncNow()**](LDAPApi.md#postApiV1LdapSyncNow) | **POST** /api/v1/ldap.syncNow | LDAP Sync |
| [**postApiV1LdapTestConnection()**](LDAPApi.md#postApiV1LdapTestConnection) | **POST** /api/v1/ldap.testConnection | Test LDAP Connection |
| [**postApiV1LdapTestSearch()**](LDAPApi.md#postApiV1LdapTestSearch) | **POST** /api/v1/ldap.testSearch | Test LDAP User Search |


## `postApiV1LdapSyncNow()`

```php
postApiV1LdapSyncNow($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method): \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response
```

LDAP Sync

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Syncs your <a href=\"https://docs.rocket.chat/use-rocket.chat/authentication/ldap\" target=\"_blank\">LDAP data</a> based on the <a href=\"https://docs.rocket.chat/use-rocket.chat/authentication/ldap/ldap-data-sync-settings\" target=\"_blank\">data sync configurations</a>. This endpoints requires 2FA. <br>  Permission required: `sync-auth-services-users`.  ### Changelog | Version      | Description | | ---------------- | ------------| |5.2.0            | Include `syncAvatars`       | |4.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientUserManagementApi\Api\LDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.

try {
    $result = $apiInstance->postApiV1LdapSyncNow($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LDAPApi->postApiV1LdapSyncNow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |

### Return type

[**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response**](../Model/PostApiV1UsersLogout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LdapTestConnection()`

```php
postApiV1LdapTestConnection($x_auth_token, $x_user_id): \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response
```

Test LDAP Connection

Test if Rocket.Chat can connect to the specified LDAP server using the port and host provided in the Rocket.Chat settings. Permission required: `test-admin-options`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientUserManagementApi\Api\LDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1LdapTestConnection($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LDAPApi->postApiV1LdapTestConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response**](../Model/PostApiV1UsersLogout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LdapTestSearch()`

```php
postApiV1LdapTestSearch($x_auth_token, $x_user_id, $post_api_v1_ldap_test_search_request): \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response
```

Test LDAP User Search

Test if a given username can be found in the LDAP server using the authentication and filter <a href='https://docs.rocket.chat/docs/configure-ldap-connection' target='_blank'>settings</a> provided to Rocket.Chat. Permission required: `test-admin-options`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientUserManagementApi\Api\LDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_ldap_test_search_request = {"username":"bob"}; // \WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1LdapTestSearchRequest

try {
    $result = $apiInstance->postApiV1LdapTestSearch($x_auth_token, $x_user_id, $post_api_v1_ldap_test_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LDAPApi->postApiV1LdapTestSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_ldap_test_search_request** | [**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1LdapTestSearchRequest**](../Model/PostApiV1LdapTestSearchRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientUserManagementApi\Model\PostApiV1UsersLogout200Response**](../Model/PostApiV1UsersLogout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
