# WebMI\RocketChatApiClient\MiscellaneousApi\LicensesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LicensesGet()**](LicensesApi.md#getApiV1LicensesGet) | **GET** /api/v1/licenses.get | Get Licenses |
| [**getApiV1LicensesInfo()**](LicensesApi.md#getApiV1LicensesInfo) | **GET** /api/v1/licenses.info | Get Licenses |
| [**getApiV1LicensesIsEnterprise()**](LicensesApi.md#getApiV1LicensesIsEnterprise) | **GET** /api/v1/licenses.isEnterprise | Confirm Enterprise License |
| [**getLicensesMaxActiveUsers()**](LicensesApi.md#getLicensesMaxActiveUsers) | **GET** /licenses.maxActiveUsers | Get Maximum Active User |
| [**postApiV1LicensesAdd()**](LicensesApi.md#postApiV1LicensesAdd) | **POST** /api/v1/licenses.add | Add License |


## `getApiV1LicensesGet()`

```php
getApiV1LicensesGet($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200Response
```

Get Licenses

Use the `/licenses.info` endpoint instead.  Retrieves a list of all registered licenses in the workspace.  Permission required: `view-privileged-setting`  ### Changelog | Version      | Description | | ---------------- | ------------| |6.5.0         | Deprecated       | |3.10.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LicensesGet($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getApiV1LicensesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200Response**](../Model/GetApiV1LicensesGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LicensesInfo()`

```php
getApiV1LicensesInfo($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesInfo200Response
```

Get Licenses

Retrieves a list of all registered licenses and the details in the workspace.  Permission required: `view-privileged-setting`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LicensesInfo($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getApiV1LicensesInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesInfo200Response**](../Model/GetApiV1LicensesInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LicensesIsEnterprise()`

```php
getApiV1LicensesIsEnterprise($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesIsEnterprise200Response
```

Confirm Enterprise License

Use the `/licenses.info` endpoint instead.  Confirm if the current workspace is subscribed to the <a href=\"https://docs.rocket.chat/docs/our-plans#enterprise-plan\" target=\"_blank\">Enterprise plan</a>.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.5.0         | Deprecated       | |5.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = 'x_auth_token_example'; // string | The `authToken` of the authenticated user.
$x_user_id = 'x_user_id_example'; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LicensesIsEnterprise($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getApiV1LicensesIsEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | [optional] |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesIsEnterprise200Response**](../Model/GetApiV1LicensesIsEnterprise200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLicensesMaxActiveUsers()`

```php
getLicensesMaxActiveUsers($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetLicensesMaxActiveUsers200Response
```

Get Maximum Active User

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Retrieves a list of the maximum active users.  ### Changelog | Version      | Description | | ---------------- | ------------| |4.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getLicensesMaxActiveUsers($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->getLicensesMaxActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetLicensesMaxActiveUsers200Response**](../Model/GetLicensesMaxActiveUsers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LicensesAdd()`

```php
postApiV1LicensesAdd($x_auth_token, $x_user_id, $post_api_v1_licenses_add_request): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response
```

Add License

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  You may want to <a href=\"https://docs.rocket.chat/docs/rocketchat-air-gapped-deployment\" target=\"_blank\">deploy your workspace in an air-gapped environment</a>. Since the server has no internet to communicate with the cloud, we provide a license for your subscribed plan that you can apply manually to upgrade your workspace.  Permission required: `edit-privileged-setting`. ### Changelog | Version      | Description | | ---------------- | ------------| |3.10.0         | Added       |  A successful response only means the license provided follows the accepted format. Check your <a href=\"https://docs.rocket.chat/docs/reports\" target=\"_blank\">workspace log</a> or <a href=\"https://docs.rocket.chat/docs/workspace\" target=\"_blank\">administration info</a> to confirm if the license is valid and was applied to your workspace. Alternatively, you can check <b><a href=\"https://developer.rocket.chat/apidocs/get-licenses-1\" target=\"_blank\">Confirm Enterprise License</a></b> endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\LicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_licenses_add_request = {"license":"VFJ0vHf3Jm9AR0minB342MLaHRlZdc3Du5nf0E5Sv0QJ4SUkEIaU2boCYaDsxQ2N1UL4uhLjCF9M7iCZ/yxafJjxbHvOu1D5rOfdgO4RKlAGE9tGHDidJR9crJyXVb16jPHHvLSkUFzb7HoIq/nUXxU8gEgT3uJ9u2+Dw5ukDLX3SG2AFq1hLoPSZqsP6g2AQo="}; // \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1LicensesAddRequest

try {
    $result = $apiInstance->postApiV1LicensesAdd($x_auth_token, $x_user_id, $post_api_v1_licenses_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicensesApi->postApiV1LicensesAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_licenses_add_request** | [**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1LicensesAddRequest**](../Model/PostApiV1LicensesAddRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1AutotranslateSaveSettings200Response**](../Model/PostApiV1AutotranslateSaveSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
