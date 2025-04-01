# WebMI\RocketChatApiClient\MiscellaneousApi\EmailInboxApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiV1EmailInboxId()**](EmailInboxApi.md#deleteApiV1EmailInboxId) | **DELETE** /api/v1/email-inbox/{_id} | Delete Email Inbox by ID |
| [**getApiV1EmailInboxId()**](EmailInboxApi.md#getApiV1EmailInboxId) | **GET** /api/v1/email-inbox/{_id} | Email Inbox by ID |
| [**getApiV1EmailInboxList()**](EmailInboxApi.md#getApiV1EmailInboxList) | **GET** /api/v1/email-inbox.list | List Email Inbox |
| [**getApiV1EmailInboxSearch()**](EmailInboxApi.md#getApiV1EmailInboxSearch) | **GET** /api/v1/email-inbox.search | Search Email Inbox |
| [**getApiV1EmailInboxSendTestId()**](EmailInboxApi.md#getApiV1EmailInboxSendTestId) | **GET** /api/v1/email-inbox.send-test/{_id} | Send test email to email inbox |
| [**postApiV1EmailInbox()**](EmailInboxApi.md#postApiV1EmailInbox) | **POST** /api/v1/email-inbox | Set Email Inbox |


## `deleteApiV1EmailInboxId()`

```php
deleteApiV1EmailInboxId($x_auth_token, $x_user_id, $_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response
```

Delete Email Inbox by ID

Deletes email inbox using ID.  Permissions required: `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | Email inbox ID

try {
    $result = $apiInstance->deleteApiV1EmailInboxId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->deleteApiV1EmailInboxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| Email inbox ID | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response**](../Model/PostApiV1EmailInbox200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EmailInboxId()`

```php
getApiV1EmailInboxId($x_auth_token, $x_user_id, $_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxId200Response
```

Email Inbox by ID

Gets email inbox by ID.  Permissions required: `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |5.3.0       | Not Found Error Added       | |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = '_id_example'; // string | Email inbox ID

try {
    $result = $apiInstance->getApiV1EmailInboxId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| Email inbox ID | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxId200Response**](../Model/GetApiV1EmailInboxId200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EmailInboxList()`

```php
getApiV1EmailInboxList($x_auth_token, $x_user_id, $offset, $sort, $count, $query, $fields): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxList200Response
```

List Email Inbox

Gets email inbox list.  Permissions required:- `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$offset = 50; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = NULL; // mixed | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 50; // int | The number of items to return.
$query = NULL; // mixed | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query={ \"name\": { \"$regex\": \"g\" } }
$fields = 'fields_example'; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields={ \"username\": 1 }

try {
    $result = $apiInstance->getApiV1EmailInboxList($x_auth_token, $x_user_id, $offset, $sort, $count, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional] |
| **count** | **int**| The number of items to return. | [optional] |
| **query** | [**mixed**](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } } | [optional] |
| **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxList200Response**](../Model/GetApiV1EmailInboxList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EmailInboxSearch()`

```php
getApiV1EmailInboxSearch($x_auth_token, $x_user_id, $email): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxSearch200Response
```

Search Email Inbox

Searches email inbox by email address.  Permissions required: `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$email = info@rockt.chat; // string | Email inbox address

try {
    $result = $apiInstance->getApiV1EmailInboxSearch($x_auth_token, $x_user_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **email** | **string**| Email inbox address | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1EmailInboxSearch200Response**](../Model/GetApiV1EmailInboxSearch200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1EmailInboxSendTestId()`

```php
getApiV1EmailInboxSendTestId($x_auth_token, $x_user_id, $_id): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response
```

Send test email to email inbox

Send a test email to the inbox. Permissions required: `manage-email-inbox`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$_id = 60197e8ff82d6c83b96c53ff; // string | Email inbox id

try {
    $result = $apiInstance->getApiV1EmailInboxSendTestId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->getApiV1EmailInboxSendTestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **_id** | **string**| Email inbox id | |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response**](../Model/PostApiV1EmailInbox200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1EmailInbox()`

```php
postApiV1EmailInbox($x_auth_token, $x_user_id, $post_api_v1_email_inbox_request): \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response
```

Set Email Inbox

Sets the email inbox for your server.  Permissions required:- `manage-email-inbox` ### Changelog | Version      | Description | | ---------------- | ------------| |3.11.0-rc.0         | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\MiscellaneousApi\Api\EmailInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_email_inbox_request = {"name":"new email","email":"mdyemaasil@rocket.chat","active":false,"description":"This email has been set","senderInfo":"email sender","department":"awesome department","smtp":{"password":"10fae4dc374fb87d","port":25,"secure":true,"server":"smtp.mailtrap.io","username":"b5ef5safd6cb806c"},"imap":{"password":"10fae4374sdfb87d","port":993,"secure":true,"server":"imap.mailtrap.io","username":"b5ef5aafd6cb806c"}}; // \WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInboxRequest

try {
    $result = $apiInstance->postApiV1EmailInbox($x_auth_token, $x_user_id, $post_api_v1_email_inbox_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailInboxApi->postApiV1EmailInbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_email_inbox_request** | [**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInboxRequest**](../Model/PostApiV1EmailInboxRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\MiscellaneousApi\Model\PostApiV1EmailInbox200Response**](../Model/PostApiV1EmailInbox200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
