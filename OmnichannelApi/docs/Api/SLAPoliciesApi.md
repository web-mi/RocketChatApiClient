# WebMI\RocketChatApiClient\OmnichannelApi\SLAPoliciesApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatSlaSlaId()**](SLAPoliciesApi.md#deleteApiV1LivechatSlaSlaId) | **DELETE** /api/v1/livechat/sla/{slaId} | Delete an SLA |
| [**getApiV1LivechatSla()**](SLAPoliciesApi.md#getApiV1LivechatSla) | **GET** /api/v1/livechat/sla | Get List of SLA Policies |
| [**getApiV1LivechatSlaSlaId()**](SLAPoliciesApi.md#getApiV1LivechatSlaSlaId) | **GET** /api/v1/livechat/sla/{slaId} | Get an SLA |
| [**postApiV1LivechatSla()**](SLAPoliciesApi.md#postApiV1LivechatSla) | **POST** /api/v1/livechat/sla | Create SLA Policy |
| [**putApiV1LivechatSlaSlaId()**](SLAPoliciesApi.md#putApiV1LivechatSlaSlaId) | **PUT** /api/v1/livechat/sla/{slaId} | Update an SLA |


## `deleteApiV1LivechatSlaSlaId()`

```php
deleteApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Delete an SLA

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-sla`  ### Changelog | Version      | Description |  | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\SLAPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$sla_id = 'sla_id_example'; // string | The ID of the SLA.

try {
    $result = $apiInstance->deleteApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SLAPoliciesApi->deleteApiV1LivechatSlaSlaId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **sla_id** | **string**| The ID of the SLA. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response**](../Model/DeleteApiV1LivechatUsersTypeId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatSla()`

```php
getApiV1LivechatSla($x_auth_token, $x_user_id, $text, $count, $sort, $offset): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatSla200Response
```

Get List of SLA Policies

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\SLAPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$text = 'text_example'; // string | The text with which you want to filter the result.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.

try {
    $result = $apiInstance->getApiV1LivechatSla($x_auth_token, $x_user_id, $text, $count, $sort, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SLAPoliciesApi->getApiV1LivechatSla: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **text** | **string**| The text with which you want to filter the result. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatSla200Response**](../Model/GetApiV1LivechatSla200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatSlaSlaId()`

```php
getApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatSlaSlaId200Response
```

Get an SLA

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get details of a specific SLA policy. <br> At least one of the following permissions is required:   * `manage-livechat-sla`   * `view-l-room`    ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\SLAPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$sla_id = 'sla_id_example'; // string | The ID of the SLA.

try {
    $result = $apiInstance->getApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SLAPoliciesApi->getApiV1LivechatSlaSlaId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **sla_id** | **string**| The ID of the SLA. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatSlaSlaId200Response**](../Model/GetApiV1LivechatSlaSlaId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatSla()`

```php
postApiV1LivechatSla($x_auth_token, $x_user_id, $post_api_v1_livechat_sla_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatSla200Response
```

Create SLA Policy

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-sla`  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\SLAPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_sla_request = {"name":"Optimum","description":"OPtimum SLA","dueTimeInMinutes":4}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatSlaRequest

try {
    $result = $apiInstance->postApiV1LivechatSla($x_auth_token, $x_user_id, $post_api_v1_livechat_sla_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SLAPoliciesApi->postApiV1LivechatSla: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_sla_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatSlaRequest**](../Model/PostApiV1LivechatSlaRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatSla200Response**](../Model/PostApiV1LivechatSla200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1LivechatSlaSlaId()`

```php
putApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatSlaSlaId200Response
```

Update an SLA

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Update an existing SLA policy. <br> Permission required: `manage-livechat-sla`  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\SLAPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$sla_id = 'sla_id_example'; // string | The ID of the SLA.

try {
    $result = $apiInstance->putApiV1LivechatSlaSlaId($x_auth_token, $x_user_id, $sla_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SLAPoliciesApi->putApiV1LivechatSlaSlaId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **sla_id** | **string**| The ID of the SLA. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatSlaSlaId200Response**](../Model/PutApiV1LivechatSlaSlaId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
