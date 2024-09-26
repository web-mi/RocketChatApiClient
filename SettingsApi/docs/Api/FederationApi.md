# WebMIRocketChatApiClientSettingsApi\FederationApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1FederationListServersByUser()**](FederationApi.md#getApiV1FederationListServersByUser) | **GET** /api/v1/federation/listServersByUser | Get Federated Servers |
| [**getApiV1FederationSearchPublicRooms()**](FederationApi.md#getApiV1FederationSearchPublicRooms) | **GET** /api/v1/federation/searchPublicRooms | Search Public Rooms |
| [**postApiV1FederationAddServerByUser()**](FederationApi.md#postApiV1FederationAddServerByUser) | **POST** /api/v1/federation/addServerByUser | Add Federated Server |
| [**postApiV1FederationJoinExternalPublicRoom()**](FederationApi.md#postApiV1FederationJoinExternalPublicRoom) | **POST** /api/v1/federation/joinExternalPublicRoom | Join External Public Room |
| [**postApiV1FederationRemoveServerByUser()**](FederationApi.md#postApiV1FederationRemoveServerByUser) | **POST** /api/v1/federation/removeServerByUser | Remove Federated Server |


## `getApiV1FederationListServersByUser()`

```php
getApiV1FederationListServersByUser($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1FederationListServersByUser200Response
```

Get Federated Servers

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Lists all the servers the user has already saved.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1FederationListServersByUser($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->getApiV1FederationListServersByUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1FederationListServersByUser200Response**](../Model/GetApiV1FederationListServersByUser200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1FederationSearchPublicRooms()`

```php
getApiV1FederationSearchPublicRooms($x_user_id, $x_auth_token, $server_name, $room_name, $page_token, $count): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1FederationSearchPublicRooms200Response
```

Search Public Rooms

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Search for federated public rooms by the server name or room name.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$server_name = matrix.org; // string | The server name.
$room_name = my public room name; // string | The room name you want to search for in the server.
$page_token = g6FtzRlCoXK+IUpmS; // string | The page you want to retrieve, use it for pagination. Make sure to URL encode this.
$count = 50; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1FederationSearchPublicRooms($x_user_id, $x_auth_token, $server_name, $room_name, $page_token, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->getApiV1FederationSearchPublicRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **server_name** | **string**| The server name. | |
| **room_name** | **string**| The room name you want to search for in the server. | [optional] |
| **page_token** | **string**| The page you want to retrieve, use it for pagination. Make sure to URL encode this. | [optional] |
| **count** | **int**| How many items to return. | [optional] |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1FederationSearchPublicRooms200Response**](../Model/GetApiV1FederationSearchPublicRooms200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1FederationAddServerByUser()`

```php
postApiV1FederationAddServerByUser($x_user_id, $x_auth_token, $post_api_v1_federation_add_server_by_user_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Add Federated Server

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Add a new federated server.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_federation_add_server_by_user_request = {"serverName":"my-server.rocket.chat"}; // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationAddServerByUserRequest

try {
    $result = $apiInstance->postApiV1FederationAddServerByUser($x_user_id, $x_auth_token, $post_api_v1_federation_add_server_by_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationAddServerByUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_federation_add_server_by_user_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationAddServerByUserRequest**](../Model/PostApiV1FederationAddServerByUserRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1FederationJoinExternalPublicRoom()`

```php
postApiV1FederationJoinExternalPublicRoom($x_user_id, $x_auth_token, $post_api_v1_federation_join_external_public_room_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Join External Public Room

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Join a public external federated room.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_federation_join_external_public_room_request = {"externalRoomId":"!externalRoomId:server.com"}; // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationJoinExternalPublicRoomRequest

try {
    $result = $apiInstance->postApiV1FederationJoinExternalPublicRoom($x_user_id, $x_auth_token, $post_api_v1_federation_join_external_public_room_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationJoinExternalPublicRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_federation_join_external_public_room_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationJoinExternalPublicRoomRequest**](../Model/PostApiV1FederationJoinExternalPublicRoomRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1FederationRemoveServerByUser()`

```php
postApiV1FederationRemoveServerByUser($x_user_id, $x_auth_token, $post_api_v1_federation_remove_server_by_user_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Remove Federated Server

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Remove a federated server.   ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0          Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_federation_remove_server_by_user_request = new \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationRemoveServerByUserRequest(); // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationRemoveServerByUserRequest

try {
    $result = $apiInstance->postApiV1FederationRemoveServerByUser($x_user_id, $x_auth_token, $post_api_v1_federation_remove_server_by_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationRemoveServerByUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_federation_remove_server_by_user_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1FederationRemoveServerByUserRequest**](../Model/PostApiV1FederationRemoveServerByUserRequest.md)|  | [optional] |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
