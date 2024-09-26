# WebMIRocketChatApiClientOmnichannelApi\LivechatApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1LivechatConfig()**](LivechatApi.md#getApiV1LivechatConfig) | **GET** /api/v1/livechat/config | Get Livechat Configurations |
| [**getApiV1LivechatIntegrationsSettings()**](LivechatApi.md#getApiV1LivechatIntegrationsSettings) | **GET** /api/v1/livechat/integrations.settings | Get Livechat Integrations |
| [**getApiV1LivechatQueue()**](LivechatApi.md#getApiV1LivechatQueue) | **GET** /api/v1/livechat/queue | Get Livechat Queue |
| [**postApiV1LivechatSmsIncomingService()**](LivechatApi.md#postApiV1LivechatSmsIncomingService) | **POST** /api/v1/livechat/sms-incoming/{service} | Livechat SMS Incoming (Twilio) |


## `getApiV1LivechatConfig()`

```php
getApiV1LivechatConfig($token, $department): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatConfig200Response
```

Get Livechat Configurations

Get Livechat widget configuration information and additional visitor data.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The visitor token.
$department = 'department_example'; // string | The visitor's department.

try {
    $result = $apiInstance->getApiV1LivechatConfig($token, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The visitor token. | [optional] |
| **department** | **string**| The visitor&#39;s department. | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatConfig200Response**](../Model/GetApiV1LivechatConfig200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatIntegrationsSettings()`

```php
getApiV1LivechatIntegrationsSettings($x_auth_token, $x_user_id): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatIntegrationsSettings200Response
```

Get Livechat Integrations

Retrieves a list of integration settings. Permission required: `view-livechat-manager` ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatIntegrationsSettings($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatIntegrationsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatIntegrationsSettings200Response**](../Model/GetApiV1LivechatIntegrationsSettings200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatQueue()`

```php
getApiV1LivechatQueue($x_auth_token, $x_user_id, $department_id, $agent_id, $include_offline_agents, $offset, $count, $sort): \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatQueue200Response
```

Get Livechat Queue

Permission required: `view-l-room` ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0             | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$department_id = 'department_id_example'; // string | The department ID.
$agent_id = 'agent_id_example'; // string | The agent ID.
$include_offline_agents = 'include_offline_agents_example'; // string | Whether you want to include offline agents or not.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatQueue($x_auth_token, $x_user_id, $department_id, $agent_id, $include_offline_agents, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **department_id** | **string**| The department ID. | [optional] |
| **agent_id** | **string**| The agent ID. | [optional] |
| **include_offline_agents** | **string**| Whether you want to include offline agents or not. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatQueue200Response**](../Model/GetApiV1LivechatQueue200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatSmsIncomingService()`

```php
postApiV1LivechatSmsIncomingService($service, $post_api_v1_livechat_sms_incoming_service_request): string
```

Livechat SMS Incoming (Twilio)

Receive SMS.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added      |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientOmnichannelApi\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = twilio; // string | Only the server `twilio` is accepted at moment.
$post_api_v1_livechat_sms_incoming_service_request = {"From":"5551123456789","To":"5551987654321","Body":"SMS message","ToCountry":"Brazil","ToState":"RS","ToCity":"Porto Alegre","ToZip":"","FromCountry":"Brazil","FromState":"RS","FromCity":"Porto Alegre","FromZip":""}; // \WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatSmsIncomingServiceRequest

try {
    $result = $apiInstance->postApiV1LivechatSmsIncomingService($service, $post_api_v1_livechat_sms_incoming_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->postApiV1LivechatSmsIncomingService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service** | **string**| Only the server &#x60;twilio&#x60; is accepted at moment. | |
| **post_api_v1_livechat_sms_incoming_service_request** | [**\WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatSmsIncomingServiceRequest**](../Model/PostApiV1LivechatSmsIncomingServiceRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
