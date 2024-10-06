# WebMI\RocketChatApiClient\UserManagementApi\UsersApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1AvatarSubject()**](UsersApi.md#getApiV1AvatarSubject) | **GET** /api/v1/avatar/{subject} | Get Avatars |
| [**getApiV1UsersAutocomplete()**](UsersApi.md#getApiV1UsersAutocomplete) | **GET** /api/v1/users.autocomplete | Autocomplete User |
| [**getApiV1UsersCheckUsernameAvailability()**](UsersApi.md#getApiV1UsersCheckUsernameAvailability) | **GET** /api/v1/users.checkUsernameAvailability | Check Username Availability |
| [**getApiV1UsersGetAvatar()**](UsersApi.md#getApiV1UsersGetAvatar) | **GET** /api/v1/users.getAvatar | Get User Avatar |
| [**getApiV1UsersGetPersonalAccessTokens()**](UsersApi.md#getApiV1UsersGetPersonalAccessTokens) | **GET** /api/v1/users.getPersonalAccessTokens | Get Personal Access Tokens |
| [**getApiV1UsersGetPreferences()**](UsersApi.md#getApiV1UsersGetPreferences) | **GET** /api/v1/users.getPreferences | Get User&#39;s Preferences |
| [**getApiV1UsersGetPresence()**](UsersApi.md#getApiV1UsersGetPresence) | **GET** /api/v1/users.getPresence | Get Specific User&#39;s Presence |
| [**getApiV1UsersGetStatus()**](UsersApi.md#getApiV1UsersGetStatus) | **GET** /api/v1/users.getStatus | Get Status |
| [**getApiV1UsersGetUsernameSuggestion()**](UsersApi.md#getApiV1UsersGetUsernameSuggestion) | **GET** /api/v1/users.getUsernameSuggestion | Get Username Suggestion |
| [**getApiV1UsersInfo()**](UsersApi.md#getApiV1UsersInfo) | **GET** /api/v1/users.info | Get User&#39;s Info |
| [**getApiV1UsersList()**](UsersApi.md#getApiV1UsersList) | **GET** /api/v1/users.list | Get Users List |
| [**getApiV1UsersListByStatus()**](UsersApi.md#getApiV1UsersListByStatus) | **GET** /api/v1/users.listByStatus | List Users by Status |
| [**getApiV1UsersListTeams()**](UsersApi.md#getApiV1UsersListTeams) | **GET** /api/v1/users.listTeams | List User&#39;s Teams |
| [**getApiV1UsersPresence()**](UsersApi.md#getApiV1UsersPresence) | **GET** /api/v1/users.presence | Get Users Presence |
| [**getApiV1UsersRequestDataDownload()**](UsersApi.md#getApiV1UsersRequestDataDownload) | **GET** /api/v1/users.requestDataDownload | Request Data Download |
| [**getApiV1UsersSendWelcomeEmail()**](UsersApi.md#getApiV1UsersSendWelcomeEmail) | **POST** /api/v1/users.sendWelcomeEmail | Send Welcome Email to User |
| [**postApiV1ModerationReportUser()**](UsersApi.md#postApiV1ModerationReportUser) | **POST** /api/v1/moderation.reportUser | Report User |
| [**postApiV1Users2faDisableEmail()**](UsersApi.md#postApiV1Users2faDisableEmail) | **POST** /api/v1/users.2fa.disableEmail | Disable 2FA Email |
| [**postApiV1Users2faEnableEmail()**](UsersApi.md#postApiV1Users2faEnableEmail) | **POST** /api/v1/users.2fa.enableEmail | Enable 2FA with Email |
| [**postApiV1Users2faSendEmailCode()**](UsersApi.md#postApiV1Users2faSendEmailCode) | **POST** /api/v1/users.2fa.sendEmailCode | Send 2FA Email Code |
| [**postApiV1UsersCreate()**](UsersApi.md#postApiV1UsersCreate) | **POST** /api/v1/users.create | Create User |
| [**postApiV1UsersCreateToken()**](UsersApi.md#postApiV1UsersCreateToken) | **POST** /api/v1/users.createToken | Create Users Token |
| [**postApiV1UsersDeactivateIdle()**](UsersApi.md#postApiV1UsersDeactivateIdle) | **POST** /api/v1/users.deactivateIdle | Deactivate Idle Users |
| [**postApiV1UsersDelete()**](UsersApi.md#postApiV1UsersDelete) | **POST** /api/v1/users.delete | Delete User |
| [**postApiV1UsersDeleteOwnAccount()**](UsersApi.md#postApiV1UsersDeleteOwnAccount) | **POST** /api/v1/users.deleteOwnAccount | Delete Own Account |
| [**postApiV1UsersForgotPassword()**](UsersApi.md#postApiV1UsersForgotPassword) | **POST** /api/v1/users.forgotPassword | Forgot Password |
| [**postApiV1UsersGeneratePersonalAccessToken()**](UsersApi.md#postApiV1UsersGeneratePersonalAccessToken) | **POST** /api/v1/users.generatePersonalAccessToken | Generate Personal Access Token |
| [**postApiV1UsersLogout()**](UsersApi.md#postApiV1UsersLogout) | **POST** /api/v1/users.logout | Logout User |
| [**postApiV1UsersLogoutOtherClients()**](UsersApi.md#postApiV1UsersLogoutOtherClients) | **POST** /api/v1/users.logoutOtherClients | Logout Other Clients |
| [**postApiV1UsersRegeneratePersonalAccessToken()**](UsersApi.md#postApiV1UsersRegeneratePersonalAccessToken) | **POST** /api/v1/users.regeneratePersonalAccessToken | Regenerate Personal Access Token |
| [**postApiV1UsersRegister()**](UsersApi.md#postApiV1UsersRegister) | **POST** /api/v1/users.register | Register User |
| [**postApiV1UsersRemoveOtherTokens()**](UsersApi.md#postApiV1UsersRemoveOtherTokens) | **POST** /api/v1/users.removeOtherTokens | Remove Other Tokens |
| [**postApiV1UsersRemovePersonalAccessToken()**](UsersApi.md#postApiV1UsersRemovePersonalAccessToken) | **POST** /api/v1/users.removePersonalAccessToken | Remove Personal Access Token |
| [**postApiV1UsersResetAvatar()**](UsersApi.md#postApiV1UsersResetAvatar) | **POST** /api/v1/users.resetAvatar | Reset Avatar |
| [**postApiV1UsersResetE2EKey()**](UsersApi.md#postApiV1UsersResetE2EKey) | **POST** /api/v1/users.resetE2EKey | Reset Users E2E Key |
| [**postApiV1UsersResetTOTP()**](UsersApi.md#postApiV1UsersResetTOTP) | **POST** /api/v1/users.resetTOTP | Reset Users TOTP |
| [**postApiV1UsersSetActiveStatus()**](UsersApi.md#postApiV1UsersSetActiveStatus) | **POST** /api/v1/users.setActiveStatus | Set User&#39;s Status Active |
| [**postApiV1UsersSetAvatar()**](UsersApi.md#postApiV1UsersSetAvatar) | **POST** /api/v1/users.setAvatar | Set User Avatar |
| [**postApiV1UsersSetPreferences()**](UsersApi.md#postApiV1UsersSetPreferences) | **POST** /api/v1/users.setPreferences | Set User Preferences |
| [**postApiV1UsersSetStatus()**](UsersApi.md#postApiV1UsersSetStatus) | **POST** /api/v1/users.setStatus | Set User Status |
| [**postApiV1UsersUpdate()**](UsersApi.md#postApiV1UsersUpdate) | **POST** /api/v1/users.update | Update User |
| [**postApiV1UsersUpdateOwnBasicInfo()**](UsersApi.md#postApiV1UsersUpdateOwnBasicInfo) | **POST** /api/v1/users.updateOwnBasicInfo | Update Own Basic Information |


## `getApiV1AvatarSubject()`

```php
getApiV1AvatarSubject($subject, $format, $size, $rc_uid, $rc_token): \SplFileObject
```

Get Avatars

Note:   * This is a RESTful endpoint that sits separately from the REST API in the server codebase and behaves slightly differently.   * The `rc_uid` and `rc_token` can alternately be provided as cookies (already present in the web interface), but not as auth headers.   * When requesting the avatar of a user, if they have a custom avatar set, this will override the user's choices of format or size.   * If no uploaded avatar exists for a user, a default one will be generated for them based on the initial of their username in a randomly colored square.   * If `UI_Use_Name_Avatar` is set and the user has a real name set, the generated avatar will be based on their actual name instead of the username.   * If no format is requested, or the format requested isn't supported, the format returned will be SVG.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subject = alice, @general; // string | Name of the user or channel.  Channels are always preceded by an `@` symbol. Rooms that are DMs are always represented by the other participant's user avatar.
$format = png; // string | Format of the image requested.  The values can be one of: jpg, jpeg, png.
$size = 50; // int | Width and height of the image. Default: 200
$rc_uid = aobEdbYhXfu5hkeqG; // string | User ID for authenticating is only required if `Accounts_AvatarBlockUnauthenticatedAccess` is enabled.
$rc_token = 9HqLlyZOugoStsXCUfD_0YdwnNnunAJF8V47U3QHXSq; // string | User auth token for authenticating is only required if `Accounts_AvatarBlockUnauthenticatedAccess` is enabled.

try {
    $result = $apiInstance->getApiV1AvatarSubject($subject, $format, $size, $rc_uid, $rc_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1AvatarSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subject** | **string**| Name of the user or channel.  Channels are always preceded by an &#x60;@&#x60; symbol. Rooms that are DMs are always represented by the other participant&#39;s user avatar. | |
| **format** | **string**| Format of the image requested.  The values can be one of: jpg, jpeg, png. | [optional] |
| **size** | **int**| Width and height of the image. Default: 200 | [optional] |
| **rc_uid** | **string**| User ID for authenticating is only required if &#x60;Accounts_AvatarBlockUnauthenticatedAccess&#x60; is enabled. | [optional] |
| **rc_token** | **string**| User auth token for authenticating is only required if &#x60;Accounts_AvatarBlockUnauthenticatedAccess&#x60; is enabled. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersAutocomplete()`

```php
getApiV1UsersAutocomplete($x_auth_token, $x_user_id, $selector): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersAutocomplete200Response
```

Autocomplete User

List the users whose names match a given pattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$selector = {"exceptions":["john.doe"],"conditions":{"status":"offline"},"term":"user","$or":[{"type":"user"},{"roles":["bot"]}]}; // object | Filter the response with the parameters.

try {
    $result = $apiInstance->getApiV1UsersAutocomplete($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersAutocomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **selector** | [**object**](../Model/.md)| Filter the response with the parameters. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersAutocomplete200Response**](../Model/GetApiV1UsersAutocomplete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersCheckUsernameAvailability()`

```php
getApiV1UsersCheckUsernameAvailability($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersCheckUsernameAvailability200Response
```

Check Username Availability



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersCheckUsernameAvailability($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersCheckUsernameAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersCheckUsernameAvailability200Response**](../Model/GetApiV1UsersCheckUsernameAvailability200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetAvatar()`

```php
getApiV1UsersGetAvatar($user_id): \SplFileObject
```

Get User Avatar

### Changelog | Version      | Description | | ------------ | ------------| |0.50.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = BsNr28znDkG8aeo7W; // string | The user ID. Alternatively, you can enter the `username` parameter.

try {
    $result = $apiInstance->getApiV1UsersGetAvatar($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetPersonalAccessTokens()`

```php
getApiV1UsersGetPersonalAccessTokens($x_user_id, $x_auth_token): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPersonalAccessTokens200Response
```

Get Personal Access Tokens

Permission required: `create-personal-access-tokens`  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1UsersGetPersonalAccessTokens($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPersonalAccessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPersonalAccessTokens200Response**](../Model/GetApiV1UsersGetPersonalAccessTokens200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetPreferences()`

```php
getApiV1UsersGetPreferences($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPreferences200Response
```

Get User's Preferences

Gets all the preferences of the authenticated user in the workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersGetPreferences($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPreferences200Response**](../Model/GetApiV1UsersGetPreferences200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetPresence()`

```php
getApiV1UsersGetPresence($x_user_id, $x_auth_token, $user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPresence200Response
```

Get Specific User's Presence

### Changelog | Version      | Description | | ---------------- | ------------| |0.49.0            | Updated to support `userId` or `username`       | |0.48.0            | Renamed to `users.getPresence`       | |0.35.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$user_id = BsNr28znDkG8aeo7W; // string | The user ID. Alternatively, you can enter the `username` parameter. If not provided, the user who sending the request is retrieved.

try {
    $result = $apiInstance->getApiV1UsersGetPresence($x_user_id, $x_auth_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **user_id** | **string**| The user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. If not provided, the user who sending the request is retrieved. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetPresence200Response**](../Model/GetApiV1UsersGetPresence200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetStatus()`

```php
getApiV1UsersGetStatus($user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetStatus200Response
```

Get Status

Gets a user's status in your workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |1.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = W7NHuX5ri2e3mu2Fc; // string | The `userId` of the user. Alternatively, you can use the `username` property and value. If the value is not provided, the authenticated user is used.

try {
    $result = $apiInstance->getApiV1UsersGetStatus($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The &#x60;userId&#x60; of the user. Alternatively, you can use the &#x60;username&#x60; property and value. If the value is not provided, the authenticated user is used. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetStatus200Response**](../Model/GetApiV1UsersGetStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersGetUsernameSuggestion()`

```php
getApiV1UsersGetUsernameSuggestion($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetUsernameSuggestion200Response
```

Get Username Suggestion

Get a username suggestion for the authenticated user.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.65.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersGetUsernameSuggestion($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetUsernameSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersGetUsernameSuggestion200Response**](../Model/GetApiV1UsersGetUsernameSuggestion200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersInfo()`

```php
getApiV1UsersInfo($x_auth_token, $x_user_id, $user_id, $fields): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersInfo200Response
```

Get User's Info

* Retrieves information about a user. The result is only limited to what the callee has access to view. * This endpoint supports the `field` query parameter with `userRooms` that returns the rooms that the user is part of.  * The `rooms` field returns the `unread` property based on the <a href=\"https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/general#general-settings\" target=\"_blank\">Unread Count setting</a>.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.4.0            | Added `unread` property inside `rooms` object       | |0.70.0            | Added `rooms` property to response if the user request it and has the `view-other-user-channels` permission       | |0.49.0            | Updated to support `userId` or `username`       | |0.48.0            | Renamed to `users.info`       | |0.35.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$user_id = W7NHuX5ri2e3mu2Fc; // string | The `userId` of the user. Alternatively, you can use the `username` parameter and value.
$fields = NULL; // mixed | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1UsersInfo($x_auth_token, $x_user_id, $user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **user_id** | **string**| The &#x60;userId&#x60; of the user. Alternatively, you can use the &#x60;username&#x60; parameter and value. | |
| **fields** | [**mixed**](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersInfo200Response**](../Model/GetApiV1UsersInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersList()`

```php
getApiV1UsersList($x_auth_token, $x_user_id, $query, $fields, $offset, $sort, $count): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersList200Response
```

Get Users List

Gets all of the users in the system and their information, the result is only limited to what the request sender has access to view.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.49.0            | `Count` and `offset` query parameters supported.       | |0.35.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$query = NULL; // mixed | This parameter allows you to use [MongoDB query](https://www.mongodb.com/docs/manual/reference/operator/query/) operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = NULL; // mixed | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1UsersList($x_auth_token, $x_user_id, $query, $fields, $offset, $sort, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use [MongoDB query](https://www.mongodb.com/docs/manual/reference/operator/query/) operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | [**mixed**](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| How many items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersList200Response**](../Model/GetApiV1UsersList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersListByStatus()`

```php
getApiV1UsersListByStatus($x_auth_token, $x_user_id, $offset, $sort, $count, $status, $has_logged_in, $type, $roles, $search_term): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersListByStatus200Response
```

List Users by Status

Returns a list of filtered users based on activation status, first-time log-in, and type of users to be returned.  Permissions required:  - `view-d-room` - `view-outside-room`  ### Changelog | Version      | Description | | ---------------- | ------------| |6.8.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | How many items to return.
$status = active; // string | Filter users based on their activation status. It can either  be `active` or `deactivated`
$has_logged_in = true; // bool | Filter the users who have logged into their accounts for the first time.
$type = user; // string | Filter the type of users to be returned. For example, 'bot', 'user', 'app', etc.
$roles = bot; // string | Filter the users returned based on a list of roles.
$search_term = test; // string | Filter the list of users returned based on a search term

try {
    $result = $apiInstance->getApiV1UsersListByStatus($x_auth_token, $x_user_id, $offset, $sort, $count, $status, $has_logged_in, $type, $roles, $search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersListByStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| How many items to return. | [optional] |
| **status** | **string**| Filter users based on their activation status. It can either  be &#x60;active&#x60; or &#x60;deactivated&#x60; | [optional] |
| **has_logged_in** | **bool**| Filter the users who have logged into their accounts for the first time. | [optional] |
| **type** | **string**| Filter the type of users to be returned. For example, &#39;bot&#39;, &#39;user&#39;, &#39;app&#39;, etc. | [optional] |
| **roles** | **string**| Filter the users returned based on a list of roles. | [optional] |
| **search_term** | **string**| Filter the list of users returned based on a search term | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersListByStatus200Response**](../Model/GetApiV1UsersListByStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersListTeams()`

```php
getApiV1UsersListTeams($x_auth_token, $x_user_id, $user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersListTeams200Response
```

List User's Teams



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the user.

try {
    $result = $apiInstance->getApiV1UsersListTeams($x_auth_token, $x_user_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersListTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **user_id** | **string**| The &#x60;userId&#x60; of the user. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersListTeams200Response**](../Model/GetApiV1UsersListTeams200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersPresence()`

```php
getApiV1UsersPresence($x_user_id, $x_auth_token, $from, $ids): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersPresence200Response
```

Get Users Presence

If the `Presence_broadcast_disabled` setting is true, the endpoint returns an empty array.  ### Changelog | Version      | Description | | ---------------- | ------------| |1.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$from = 2019-05-22T12:11:45.392Z; // string | The last date when the status was changed. Format: ISO 8601 datetime. Timezone, milliseconds and seconds are optional. If you don't pass `from` parameter, you'll get a list of all users' presence and the result will have a `full` field with value `true` .
$ids = J4sWseCgs8eEnWvhE; // string | The user IDs whose status you want.

try {
    $result = $apiInstance->getApiV1UsersPresence($x_user_id, $x_auth_token, $from, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **from** | **string**| The last date when the status was changed. Format: ISO 8601 datetime. Timezone, milliseconds and seconds are optional. If you don&#39;t pass &#x60;from&#x60; parameter, you&#39;ll get a list of all users&#39; presence and the result will have a &#x60;full&#x60; field with value &#x60;true&#x60; . | [optional] |
| **ids** | **string**| The user IDs whose status you want. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersPresence200Response**](../Model/GetApiV1UsersPresence200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersRequestDataDownload()`

```php
getApiV1UsersRequestDataDownload($x_auth_token, $x_user_id, $full_export): \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersRequestDataDownload200Response
```

Request Data Download

### Changelog | Version      | Description | | ---------------- | ------------| |1.2.0            | Added as `users.requestDataDownload`       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$full_export = false; // bool | Whether you want a full export or not. By default, the value is false.

try {
    $result = $apiInstance->getApiV1UsersRequestDataDownload($x_auth_token, $x_user_id, $full_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersRequestDataDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **full_export** | **bool**| Whether you want a full export or not. By default, the value is false. | [optional] [default to false] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersRequestDataDownload200Response**](../Model/GetApiV1UsersRequestDataDownload200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1UsersSendWelcomeEmail()`

```php
getApiV1UsersSendWelcomeEmail($x_auth_token, $x_user_id, $get_api_v1_users_send_welcome_email_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Send Welcome Email to User

Ensure that you have configured the <a href='https://docs.rocket.chat/docs/email' target='_blank'>email settings</a> in your workspace to send emails.   Permission required: `send-mail`  ### Changelog | Version      | Description | | ------------ | ------------| |6.8.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$get_api_v1_users_send_welcome_email_request = {"email":"test@email.com"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersSendWelcomeEmailRequest

try {
    $result = $apiInstance->getApiV1UsersSendWelcomeEmail($x_auth_token, $x_user_id, $get_api_v1_users_send_welcome_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersSendWelcomeEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **get_api_v1_users_send_welcome_email_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\GetApiV1UsersSendWelcomeEmailRequest**](../Model/GetApiV1UsersSendWelcomeEmailRequest.md)|  | [optional] |

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

## `postApiV1ModerationReportUser()`

```php
postApiV1ModerationReportUser($x_auth_token, $x_user_id, $post_api_v1_moderation_report_user_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Report User

### Changelog | Version      | Description | | ---------------- | ------------| |6.4.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_moderation_report_user_request = {"userId":"ByehQjC44FwMeiLbX","description":"test"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1ModerationReportUserRequest

try {
    $result = $apiInstance->postApiV1ModerationReportUser($x_auth_token, $x_user_id, $post_api_v1_moderation_report_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1ModerationReportUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_moderation_report_user_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1ModerationReportUserRequest**](../Model/PostApiV1ModerationReportUserRequest.md)|  | [optional] |

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

## `postApiV1Users2faDisableEmail()`

```php
postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Disable 2FA Email

This endpoint requires 2FA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.

try {
    $result = $apiInstance->postApiV1Users2faDisableEmail($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1Users2faDisableEmail: ', $e->getMessage(), PHP_EOL;
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

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response**](../Model/PostApiV1RolesDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Users2faEnableEmail()`

```php
postApiV1Users2faEnableEmail($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Enable 2FA with Email



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1Users2faEnableEmail($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1Users2faEnableEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response**](../Model/PostApiV1RolesDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1Users2faSendEmailCode()`

```php
postApiV1Users2faSendEmailCode($x_auth_token, $x_user_id, $post_api_v1_users2fa_send_email_code_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Send 2FA Email Code



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_users2fa_send_email_code_request = {"emailOrUsername":"test@email.com"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1Users2faSendEmailCodeRequest

try {
    $result = $apiInstance->postApiV1Users2faSendEmailCode($x_auth_token, $x_user_id, $post_api_v1_users2fa_send_email_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1Users2faSendEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_users2fa_send_email_code_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1Users2faSendEmailCodeRequest**](../Model/PostApiV1Users2faSendEmailCodeRequest.md)|  | [optional] |

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

## `postApiV1UsersCreate()`

```php
postApiV1UsersCreate($x_user_id, $x_auth_token, $post_api_v1_users_create_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreate200Response
```

Create User

Create a new user in your workspace.  Permission required: `create-user`   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.48.0            | `role` property is now `roles` which is an array of strings for the roles to create the user with.       | |0.45.0            | Users created via this now join the default channels.       | |0.40.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_create_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateRequest

try {
    $result = $apiInstance->postApiV1UsersCreate($x_user_id, $x_auth_token, $post_api_v1_users_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_create_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateRequest**](../Model/PostApiV1UsersCreateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreate200Response**](../Model/PostApiV1UsersCreate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersCreateToken()`

```php
postApiV1UsersCreateToken($x_auth_token, $x_user_id, $post_api_v1_users_create_token_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateToken200Response
```

Create Users Token

> This endpoint has been deprecated and is scheduled for removal in the 8.0.0 release.  As a workspace admin, you can create temporary authentication tokens for users. This is the same type of session authentication token a user gets via <a href=\"https://developer.rocket.chat/apidocs/login-with-username-and-password\" target=\"_blank\">login</a> and expires the same way. * To be able to use this endpoint, you must add the <a href=\"https://docs.rocket.chat/docs/deployment-environment-variables\" target=\"_blank\">environment variable</a> `CREATE_TOKENS_FOR_USERS=true` in your compose file. * For SaaS workspaces, <a href=\"https://desk.rocket.chat/portal/en/signin\" target=\"_blank\">contact</a> support to set this variable. * Permission required: `user-generate-access-token` * The maximum number of login tokens per user is 50. See this <a href='https://github.com/RocketChat/Rocket.Chat/pull/32216' target='_blank'>GitHub PR</a> for details.  For example, if you use Snaps to deploy, set the environment variable as shown below:   ```   echo \"CREATE_TOKENS_FOR_USERS=true\" > /var/snap/rocketchat-server/common/create-tokens.env      sudo systemctl restart snap.rocketchat-server.rocketchat-server.service   ```      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |2.1.0            | Added ENV VAR to be able to use this endpoint (process.env.CREATE_TOKENS_FOR_USERS).       |   |0.56.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_users_create_token_request = {"userId":"BsNr28znDkG8aeo7W"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateTokenRequest

try {
    $result = $apiInstance->postApiV1UsersCreateToken($x_auth_token, $x_user_id, $post_api_v1_users_create_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersCreateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_users_create_token_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateTokenRequest**](../Model/PostApiV1UsersCreateTokenRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersCreateToken200Response**](../Model/PostApiV1UsersCreateToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersDeactivateIdle()`

```php
postApiV1UsersDeactivateIdle($x_user_id, $x_auth_token, $post_api_v1_users_deactivate_idle_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeactivateIdle200Response
```

Deactivate Idle Users

Permission required: `edit-other-user-active-status`      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_deactivate_idle_request = {"daysIdle":2,"role":"user"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeactivateIdleRequest

try {
    $result = $apiInstance->postApiV1UsersDeactivateIdle($x_user_id, $x_auth_token, $post_api_v1_users_deactivate_idle_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDeactivateIdle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_deactivate_idle_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeactivateIdleRequest**](../Model/PostApiV1UsersDeactivateIdleRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeactivateIdle200Response**](../Model/PostApiV1UsersDeactivateIdle200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersDelete()`

```php
postApiV1UsersDelete($x_auth_token, $x_user_id, $post_api_v1_users_delete_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Delete User

Deletes an existing user from your workspace. Permission required: `delete-user`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.7.0            | Added `confirmRelinquish` to the payload.       | |0.35.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_users_delete_request = {"userId":"BsNr28znDkG8aeo7W","confirmRelinquish":true}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeleteRequest

try {
    $result = $apiInstance->postApiV1UsersDelete($x_auth_token, $x_user_id, $post_api_v1_users_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_users_delete_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeleteRequest**](../Model/PostApiV1UsersDeleteRequest.md)|  | [optional] |

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

## `postApiV1UsersDeleteOwnAccount()`

```php
postApiV1UsersDeleteOwnAccount($x_auth_token, $x_user_id, $post_api_v1_users_delete_own_account_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Delete Own Account

Deletes your own user account. Requires the `Allow Users to Delete Own Account` setting enabled. Access this setting from **Administration** > **Workspace** > **Settings** > **Accounts**.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.7.0            | Added `confirmRelinquish` to the payload.       | |0.67.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$post_api_v1_users_delete_own_account_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeleteOwnAccountRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeleteOwnAccountRequest

try {
    $result = $apiInstance->postApiV1UsersDeleteOwnAccount($x_auth_token, $x_user_id, $post_api_v1_users_delete_own_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDeleteOwnAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **post_api_v1_users_delete_own_account_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersDeleteOwnAccountRequest**](../Model/PostApiV1UsersDeleteOwnAccountRequest.md)|  | [optional] |

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

## `postApiV1UsersForgotPassword()`

```php
postApiV1UsersForgotPassword($post_api_v1_users_forgot_password_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersForgotPassword200Response
```

Forgot Password

Send an email to reset your password. Ensure that you have completed the configuration of the email; otherwise, your users will not receive the mail normally. Access this from **Administration** > **Workspace** > **Email inboxes**.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_users_forgot_password_request = {"email":"email@rocket.cat"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersForgotPasswordRequest

try {
    $result = $apiInstance->postApiV1UsersForgotPassword($post_api_v1_users_forgot_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersForgotPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_users_forgot_password_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersForgotPasswordRequest**](../Model/PostApiV1UsersForgotPasswordRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersForgotPassword200Response**](../Model/PostApiV1UsersForgotPassword200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersGeneratePersonalAccessToken()`

```php
postApiV1UsersGeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_generate_personal_access_token_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessToken200Response
```

Generate Personal Access Token

Permission required: `create-personal-access-tokens`.   * This endpoint requires <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">two-factor authentication</a>.  * Note that the generated access tokens are irrecoverable, so storing them safely is essential. If a token is lost or forgotten, it can be regenerated or deleted. * When making calls to the API that mandate authentication, include the generated token in the `X-Auth-Token` header and your user ID in the `X-User-Id` header to authenticate the requests. Visit the <a href=\"https://docs.rocket.chat/docs/account#personal-access-tokens\" target=\"_blank\"> Personal Access Token user guide</a> for more details.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added `bypassTwoFactor` param       | |0.69.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_generate_personal_access_token_request = {"tokenName":"mypersonaltoken","bypassTwoFactor":false}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessTokenRequest

try {
    $result = $apiInstance->postApiV1UsersGeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_generate_personal_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersGeneratePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_generate_personal_access_token_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessTokenRequest**](../Model/PostApiV1UsersGeneratePersonalAccessTokenRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessToken200Response**](../Model/PostApiV1UsersGeneratePersonalAccessToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersLogout()`

```php
postApiV1UsersLogout($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersLogout200Response
```

Logout User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersLogout($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersLogout200Response**](../Model/PostApiV1UsersLogout200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersLogoutOtherClients()`

```php
postApiV1UsersLogoutOtherClients($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersLogoutOtherClients200Response
```

Logout Other Clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersLogoutOtherClients($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersLogoutOtherClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersLogoutOtherClients200Response**](../Model/PostApiV1UsersLogoutOtherClients200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersRegeneratePersonalAccessToken()`

```php
postApiV1UsersRegeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_regenerate_personal_access_token_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessToken200Response
```

Regenerate Personal Access Token

Permission required: `create-personal-access-tokens`. This endpoint requires 2FA.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_regenerate_personal_access_token_request = {"tokenName":"mypersonaltoken"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegeneratePersonalAccessTokenRequest

try {
    $result = $apiInstance->postApiV1UsersRegeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_regenerate_personal_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRegeneratePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_regenerate_personal_access_token_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegeneratePersonalAccessTokenRequest**](../Model/PostApiV1UsersRegeneratePersonalAccessTokenRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersGeneratePersonalAccessToken200Response**](../Model/PostApiV1UsersGeneratePersonalAccessToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersRegister()`

```php
postApiV1UsersRegister($post_api_v1_users_register_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegister200Response
```

Register User

### Changelog | Version      | Description | | ---------------- | ------------| |0.50.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_users_register_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegisterRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegisterRequest

try {
    $result = $apiInstance->postApiV1UsersRegister($post_api_v1_users_register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_users_register_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegisterRequest**](../Model/PostApiV1UsersRegisterRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegister200Response**](../Model/PostApiV1UsersRegister200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersRemoveOtherTokens()`

```php
postApiV1UsersRemoveOtherTokens($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Remove Other Tokens

### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersRemoveOtherTokens($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRemoveOtherTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response**](../Model/PostApiV1RolesDelete200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersRemovePersonalAccessToken()`

```php
postApiV1UsersRemovePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_regenerate_personal_access_token_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Remove Personal Access Token

This endpoint requires 2FA.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_regenerate_personal_access_token_request = {"tokenName":"mytoken"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegeneratePersonalAccessTokenRequest

try {
    $result = $apiInstance->postApiV1UsersRemovePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_regenerate_personal_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRemovePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_regenerate_personal_access_token_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersRegeneratePersonalAccessTokenRequest**](../Model/PostApiV1UsersRegeneratePersonalAccessTokenRequest.md)|  | [optional] |

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

## `postApiV1UsersResetAvatar()`

```php
postApiV1UsersResetAvatar($x_user_id, $x_auth_token, $post_api_v1_users_reset_avatar_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Reset Avatar

Permissions required, if the setting `AllowUserAvatarChange` is enabled:    * `edit-other-user-avatar`   * `manage-moderation-actions`      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |0.55.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_reset_avatar_request = {"userId":"BsNr28znDkG8aeo7W"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetAvatarRequest

try {
    $result = $apiInstance->postApiV1UsersResetAvatar($x_user_id, $x_auth_token, $post_api_v1_users_reset_avatar_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_reset_avatar_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetAvatarRequest**](../Model/PostApiV1UsersResetAvatarRequest.md)|  | [optional] |

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

## `postApiV1UsersResetE2EKey()`

```php
postApiV1UsersResetE2EKey($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_reset_e2_e_key_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Reset Users E2E Key

<a href=\"https://docs.rocket.chat/use-rocket.chat/user-guides/user-panel/account#reset-e2e-key\" target=\"_blank\">Reset the E2E key</a> for a user in the workspace. * It requires the `edit-other-user-e2ee` permission. * This endpoint requires 2FA.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.6.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_reset_e2_e_key_request = {"userId":"GonjPyg3gB3Z9ur9s"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetE2EKeyRequest

try {
    $result = $apiInstance->postApiV1UsersResetE2EKey($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_reset_e2_e_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetE2EKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_reset_e2_e_key_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetE2EKeyRequest**](../Model/PostApiV1UsersResetE2EKeyRequest.md)|  | [optional] |

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

## `postApiV1UsersResetTOTP()`

```php
postApiV1UsersResetTOTP($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_reset_totp_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Reset Users TOTP

Reset 2FA via TOTP for a user in the workspace. * It requires the `edit-other-user-totp` permission. * It requires two-factor authentication.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.6.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_reset_totp_request = {"userId":"GonjPyg3gB3Z9ur9s"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetTOTPRequest

try {
    $result = $apiInstance->postApiV1UsersResetTOTP($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $post_api_v1_users_reset_totp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetTOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_reset_totp_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersResetTOTPRequest**](../Model/PostApiV1UsersResetTOTPRequest.md)|  | [optional] |

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

## `postApiV1UsersSetActiveStatus()`

```php
postApiV1UsersSetActiveStatus($x_user_id, $x_auth_token, $post_api_v1_users_set_active_status_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetActiveStatus200Response
```

Set User's Status Active

Permissions required:   * `edit-other-user-active-status`   * `manage-moderation-actions`      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |3.7.0            | Added `confirmRelinquish` to the payload.       |   |0.75.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_set_active_status_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetActiveStatusRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetActiveStatusRequest | If `activeStatus=false` & `confirmRelinquish=true` and the user is the last remaining owner of a room, the oldest member of that room will be chosen as the new owner.

try {
    $result = $apiInstance->postApiV1UsersSetActiveStatus($x_user_id, $x_auth_token, $post_api_v1_users_set_active_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_set_active_status_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetActiveStatusRequest**](../Model/PostApiV1UsersSetActiveStatusRequest.md)| If &#x60;activeStatus&#x3D;false&#x60; &amp; &#x60;confirmRelinquish&#x3D;true&#x60; and the user is the last remaining owner of a room, the oldest member of that room will be chosen as the new owner. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetActiveStatus200Response**](../Model/PostApiV1UsersSetActiveStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersSetAvatar()`

```php
postApiV1UsersSetAvatar($x_user_id, $x_auth_token, $post_api_v1_users_set_avatar_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Set User Avatar

Permission required: `edit-other-user-avatar`, if the `AllowUserAvatarChange` setting is enabled.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.56.0            | Add support for `username` argument.       | |0.48.0            | Set other users avatars if the callee has permission.       | |0.46.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_set_avatar_request = {"avatarUrl":"http://domain.tld/to/my/own/avatar.jpg"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetAvatarRequest | You have 2 options to set the user avatar:   * Upload the image file to use as the new avatar, as form data. For example, `image=@my-own-avatar.png`.   * Enter the image URL you want to set as the user avatar in the request body.

try {
    $result = $apiInstance->postApiV1UsersSetAvatar($x_user_id, $x_auth_token, $post_api_v1_users_set_avatar_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_set_avatar_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetAvatarRequest**](../Model/PostApiV1UsersSetAvatarRequest.md)| You have 2 options to set the user avatar:   * Upload the image file to use as the new avatar, as form data. For example, &#x60;image&#x3D;@my-own-avatar.png&#x60;.   * Enter the image URL you want to set as the user avatar in the request body. | [optional] |

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

## `postApiV1UsersSetPreferences()`

```php
postApiV1UsersSetPreferences($x_user_id, $x_auth_token, $post_api_v1_users_set_preferences_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetPreferences200Response
```

Set User Preferences

If you want to edit another user's preferences, you need the permission `edit-other-user-info`. ### Changelog | Version      | Description | | ---------------- | ------------| |2.3.0            | Added `desktopNotificationRequireInteraction` property.       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_set_preferences_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetPreferencesRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetPreferencesRequest

try {
    $result = $apiInstance->postApiV1UsersSetPreferences($x_user_id, $x_auth_token, $post_api_v1_users_set_preferences_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_set_preferences_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetPreferencesRequest**](../Model/PostApiV1UsersSetPreferencesRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetPreferences200Response**](../Model/PostApiV1UsersSetPreferences200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersSetStatus()`

```php
postApiV1UsersSetStatus($x_user_id, $x_auth_token, $post_api_v1_users_set_status_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1RolesDelete200Response
```

Set User Status

Permission required, if the setting `AllowUserStatusMessageChange` is enabled:    * `edit-other-user-info`      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |1.2.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$post_api_v1_users_set_status_request = {"message":"My status update","status":"online","userId":"zXuq7SvPKYbzYmfpo","username":"bob"}; // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetStatusRequest

try {
    $result = $apiInstance->postApiV1UsersSetStatus($x_user_id, $x_auth_token, $post_api_v1_users_set_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **post_api_v1_users_set_status_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersSetStatusRequest**](../Model/PostApiV1UsersSetStatusRequest.md)|  | [optional] |

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

## `postApiV1UsersUpdate()`

```php
postApiV1UsersUpdate($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_users_update_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdate200Response
```

Update User

* To update the password for the user, `edit-other-user-password` permission is required. * This endpoint requires 2FA.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.48.0            | Renamed to `users.update`       | |0.35.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_update_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateRequest

try {
    $result = $apiInstance->postApiV1UsersUpdate($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_users_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_update_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateRequest**](../Model/PostApiV1UsersUpdateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdate200Response**](../Model/PostApiV1UsersUpdate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1UsersUpdateOwnBasicInfo()`

```php
postApiV1UsersUpdateOwnBasicInfo($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_users_update_own_basic_info_request): \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200Response
```

Update Own Basic Information

* To change your email or password, you must confirm it using TOTP. If you don't have 2FA enabled (token code or email), TOTP will require the current password method. * If you add the `currentPassword` encrypted in SHA256 to the request body, the request won't require TOTP again.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.4.0            | Add `bio` and `statusType` parameters.       | |0.62.2            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\UserManagementApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The authenticated user ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The authenticated user token.
$x_2fa_code = 148750; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = 'x_2fa_method_example'; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$post_api_v1_users_update_own_basic_info_request = new \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfoRequest(); // \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfoRequest

try {
    $result = $apiInstance->postApiV1UsersUpdateOwnBasicInfo($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $post_api_v1_users_update_own_basic_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersUpdateOwnBasicInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The authenticated user ID. | |
| **x_auth_token** | **string**| The authenticated user token. | |
| **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. | |
| **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. | |
| **post_api_v1_users_update_own_basic_info_request** | [**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfoRequest**](../Model/PostApiV1UsersUpdateOwnBasicInfoRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200Response**](../Model/PostApiV1UsersUpdateOwnBasicInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
