# WebMI\RocketChatApiClient\OmnichannelApi\LivechatUnitsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1LivechatUnitsId()**](LivechatUnitsApi.md#deleteApiV1LivechatUnitsId) | **DELETE** /api/v1/livechat/units/{id} | Delete a Unit |
| [**getApiV1LivechatUnits()**](LivechatUnitsApi.md#getApiV1LivechatUnits) | **GET** /api/v1/livechat/units | Get List of Units |
| [**getApiV1LivechatUnitsGetOne()**](LivechatUnitsApi.md#getApiV1LivechatUnitsGetOne) | **GET** /api/v1/livechat/units.getOne | Get One Unit |
| [**getApiV1LivechatUnitsList()**](LivechatUnitsApi.md#getApiV1LivechatUnitsList) | **GET** /api/v1/livechat/units.list | List of Units |
| [**getApiV1LivechatUnitsMonitorsList()**](LivechatUnitsApi.md#getApiV1LivechatUnitsMonitorsList) | **GET** /api/v1/livechat/unitMonitors.list | List of Unit Monitors |
| [**getApiV1LivechatUnitsUnitId()**](LivechatUnitsApi.md#getApiV1LivechatUnitsUnitId) | **GET** /api/v1/livechat/units/{id} | Get a Unit |
| [**getApiV1LivechatUnitsUnitIdDepartments()**](LivechatUnitsApi.md#getApiV1LivechatUnitsUnitIdDepartments) | **GET** /api/v1/livechat/units/{unitId}/departments | Get Departments by Unit ID |
| [**getApiV1LivechatUnitsUnitIdDepartmentsAvailable()**](LivechatUnitsApi.md#getApiV1LivechatUnitsUnitIdDepartmentsAvailable) | **GET** /api/v1/livechat/units/{unitId}/departments/available | Get Available Departments by Unit Id |
| [**getApiV1LivechatUnitsUnitIdMonitors()**](LivechatUnitsApi.md#getApiV1LivechatUnitsUnitIdMonitors) | **GET** /api/v1/livechat/units/{unitId}/monitors | Get List of Unit Monitors |
| [**postApiV1LivechatUnits()**](LivechatUnitsApi.md#postApiV1LivechatUnits) | **POST** /api/v1/livechat/units | Create Unit |
| [**postApiV1LivechatUnitsId()**](LivechatUnitsApi.md#postApiV1LivechatUnitsId) | **POST** /api/v1/livechat/units/{id} | Update Unit |


## `deleteApiV1LivechatUnitsId()`

```php
deleteApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Delete a Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`  ### Changelog | Version      | Description |  | ------------ | ------------| |4.2.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->deleteApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->deleteApiV1LivechatUnitsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

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

## `getApiV1LivechatUnits()`

```php
getApiV1LivechatUnits($x_auth_token, $x_user_id, $text, $offset, $count, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnits200Response
```

Get List of Units

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$text = 'text_example'; // string | Enter some text to filter the results.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$sort = NULL; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatUnits($x_auth_token, $x_user_id, $text, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **text** | **string**| Enter some text to filter the results. | [optional] |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnits200Response**](../Model/GetApiV1LivechatUnits200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsGetOne()`

```php
getApiV1LivechatUnitsGetOne($x_auth_token, $x_user_id, $unit_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsGetOne200Response
```

Get One Unit

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get a Unit from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$unit_id = 'unit_id_example'; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatUnitsGetOne($x_auth_token, $x_user_id, $unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsGetOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **unit_id** | **string**| The unit ID. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsGetOne200Response**](../Model/GetApiV1LivechatUnitsGetOne200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsList()`

```php
getApiV1LivechatUnitsList($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsList200Response
```

List of Units

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get List of Units from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsList200Response**](../Model/GetApiV1LivechatUnitsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsMonitorsList()`

```php
getApiV1LivechatUnitsMonitorsList($x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsMonitorsList200Response
```

List of Unit Monitors

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get List of Unit Monitors from Rocket.Chat 5.0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsMonitorsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsMonitorsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsMonitorsList200Response**](../Model/GetApiV1LivechatUnitsMonitorsList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsUnitId()`

```php
getApiV1LivechatUnitsUnitId($id, $x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitId200Response
```

Get a Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get details of a specific unit. <br> Permission required: `manage-livechat-units`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitId($id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitId200Response**](../Model/GetApiV1LivechatUnitsUnitId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsUnitIdDepartments()`

```php
getApiV1LivechatUnitsUnitIdDepartments($unit_id, $x_auth_token, $x_user_id, $offset, $count): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdDepartments200Response
```

Get Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = 'unit_id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdDepartments($unit_id, $x_auth_token, $x_user_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdDepartments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit_id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdDepartments200Response**](../Model/GetApiV1LivechatUnitsUnitIdDepartments200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsUnitIdDepartmentsAvailable()`

```php
getApiV1LivechatUnitsUnitIdDepartmentsAvailable($unit_id, $x_auth_token, $x_user_id, $offset, $count, $text, $only_my_departments): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdDepartmentsAvailable200Response
```

Get Available Departments by Unit Id

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = 'unit_id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 25; // int | The number of items to return.
$text = 'text_example'; // string | Filter the result with the text.
$only_my_departments = True; // bool | Whether you want the result for the departments that you are part of.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdDepartmentsAvailable($unit_id, $x_auth_token, $x_user_id, $offset, $count, $text, $only_my_departments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdDepartmentsAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit_id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **text** | **string**| Filter the result with the text. | [optional] |
| **only_my_departments** | **bool**| Whether you want the result for the departments that you are part of. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdDepartmentsAvailable200Response**](../Model/GetApiV1LivechatUnitsUnitIdDepartmentsAvailable200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1LivechatUnitsUnitIdMonitors()`

```php
getApiV1LivechatUnitsUnitIdMonitors($unit_id, $x_auth_token, $x_user_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdMonitors200Response
```

Get List of Unit Monitors

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the list of monitors associated with a specific unit. <br> Permission required: `manage-livechat-units`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = 'unit_id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdMonitors($unit_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdMonitors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit_id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatUnitsUnitIdMonitors200Response**](../Model/GetApiV1LivechatUnitsUnitIdMonitors200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatUnits()`

```php
postApiV1LivechatUnits($x_auth_token, $x_user_id, $post_api_v1_livechat_units_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnits200Response
```

Create Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Create a <a href='https://docs.rocket.chat/docs/units' target='_blank'>unit</a> to group departments. Permission required: `manage-livechat-units` ### Changelog | Version      | Description | | ------------ | ------------| |4.2.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_units_request = {"unitData":{"name":"unitxx2","visibility":"public"},"unitMonitors":[{"monitorId":"GT67Tv6x5p5y5xZWN","username":"testerio"}],"unitDepartments":[{"departmentId":"CgM4vfNNtj8t4QEMd"}]}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequest

try {
    $result = $apiInstance->postApiV1LivechatUnits($x_auth_token, $x_user_id, $post_api_v1_livechat_units_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->postApiV1LivechatUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_units_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsRequest**](../Model/PostApiV1LivechatUnitsRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnits200Response**](../Model/PostApiV1LivechatUnits200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1LivechatUnitsId()`

```php
postApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id, $post_api_v1_livechat_units_id_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnits200Response
```

Update Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`  ### Changelog | Version      | Description | | ------------ | ------------| |4.2.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The unit ID.
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_livechat_units_id_request = {"unitData":{"name":"unitxx2","visibility":"private"},"unitMonitors":[{"monitorId":"GT67Tv6x5p5y5xZWN","username":"testerio"}],"unitDepartments":[{"departmentId":"CgM4vfNNtj8t4QEMd"}]}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsIdRequest

try {
    $result = $apiInstance->postApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id, $post_api_v1_livechat_units_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->postApiV1LivechatUnitsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The unit ID. | |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_livechat_units_id_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnitsIdRequest**](../Model/PostApiV1LivechatUnitsIdRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1LivechatUnits200Response**](../Model/PostApiV1LivechatUnits200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
