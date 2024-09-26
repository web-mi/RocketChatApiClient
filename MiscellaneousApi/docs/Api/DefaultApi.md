# WebMI\RocketChatApiClient\MiscellaneousApi\DefaultApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ShieldSvg()**](DefaultApi.md#getApiV1ShieldSvg) | **GET** /api/v1/shield.svg | Shield SVG |
| [**getApiV1Spotlight()**](DefaultApi.md#getApiV1Spotlight) | **GET** /api/v1/spotlight | Spotlight |
| [**getApiV1StdoutQueue()**](DefaultApi.md#getApiV1StdoutQueue) | **GET** /api/v1/stdout.queue | Get stdout queue |


## `getApiV1ShieldSvg()`

```php
getApiV1ShieldSvg($channel, $name, $type, $icon): object
```

Shield SVG

A simple method, requires no authentication, that returns the shield svg(badge) to add in your website. It must have `API_Enable_Shields` enabled.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.55.0        | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel = general; // string | Name of the channel
$name = Rocket.Chat; // string | Name to show
$type = online; // string | Can either be `online`, `user`, `channel`
$icon = false; // string

try {
    $result = $apiInstance->getApiV1ShieldSvg($channel, $name, $type, $icon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1ShieldSvg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **string**| Name of the channel | |
| **name** | **string**| Name to show | |
| **type** | **string**| Can either be &#x60;online&#x60;, &#x60;user&#x60;, &#x60;channel&#x60; | [optional] |
| **icon** | **string**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1Spotlight()`

```php
getApiV1Spotlight($x_auth_token, $x_user_id, $query): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1Spotlight200Response
```

Spotlight

Searches for users or rooms that are visible to the user. It will only return rooms that user didn't join yet.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0       | Added support to '#' and '@' searches, for channels and users respectively.       | |0.61.0      | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$query = john; // string | The term to be searched. Supports '#' for channels and '@' for users

try {
    $result = $apiInstance->getApiV1Spotlight($x_auth_token, $x_user_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1Spotlight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **query** | **string**| The term to be searched. Supports &#39;#&#39; for channels and &#39;@&#39; for users | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1Spotlight200Response**](../Model/GetApiV1Spotlight200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1StdoutQueue()`

```php
getApiV1StdoutQueue($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1StdoutQueue200Response
```

Get stdout queue

Retrieves last 1000 lines of server logs  Permissions required: `view-logs`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1StdoutQueue($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiV1StdoutQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1StdoutQueue200Response**](../Model/GetApiV1StdoutQueue200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
