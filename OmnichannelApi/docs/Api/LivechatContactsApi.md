# WebMI\RocketChatApiClient\OmnichannelApi\LivechatContactsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1OmnichannelContact()**](LivechatContactsApi.md#getApiV1OmnichannelContact) | **GET** /api/v1/omnichannel/contact | Get Omnichannel Contact |
| [**getApiV1OmnichannelContactSearch()**](LivechatContactsApi.md#getApiV1OmnichannelContactSearch) | **GET** /api/v1/omnichannel/contact.search | Search Omnichannel Contacts |
| [**postApiV1OmnichannelContact()**](LivechatContactsApi.md#postApiV1OmnichannelContact) | **POST** /api/v1/omnichannel/contact | Register or Update Omnichannel Contact |


## `getApiV1OmnichannelContact()`

```php
getApiV1OmnichannelContact($x_auth_token, $x_user_id, $contact_id_): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContact200Response
```

Get Omnichannel Contact

Retrieve a contact's information. Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$contact_id_ = 'contact_id__example'; // string | The contact ID.

try {
    $result = $apiInstance->getApiV1OmnichannelContact($x_auth_token, $x_user_id, $contact_id_);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **contact_id_** | **string**| The contact ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContact200Response**](../Model/GetApiV1OmnichannelContact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1OmnichannelContactSearch()`

```php
getApiV1OmnichannelContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactSearch200Response
```

Search Omnichannel Contacts

Find Omnichannel contacts by name, email, phone number, or any custom field values stored in the database. Permission required: `view-l-room`  * Encode values having characters like @,+, /and * to avoid breaking the endpoint. * To find contacts using custom fields, use the custom query parameter. The custom query parameter must be encoded by <a href=\"https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams\" target=\"_blank\">URLSearchParams</a>. For example, to search contacts with premium subscription, the request is as follows: ``` curl --location --globoff 'http://localhost:3000/api/v1/omnichannel/contact.search?custom={%20%22Subscription%22%3A%20%22premium%22%20}' \\ --header 'X-Auth-Token: b5BKhblglC5OU0AfB_Tl9dKmOb0zXUvWK-nhNT_aE8V' \\ --header 'X-User-Id: CkCPNcvsvCDfmWLqC'         ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$email = 'email_example'; // string | The contact's email address.
$phone = +1367895436; // string | The contact's phone number.
$custom = fieldName=value; // string | The defined custom fields.

try {
    $result = $apiInstance->getApiV1OmnichannelContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **email** | **string**| The contact&#39;s email address. | [optional] |
| **phone** | **string**| The contact&#39;s phone number. | [optional] |
| **custom** | **string**| The defined custom fields. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactSearch200Response**](../Model/GetApiV1OmnichannelContactSearch200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1OmnichannelContact()`

```php
postApiV1OmnichannelContact($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contact_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContact200Response
```

Register or Update Omnichannel Contact

Register a guest user as a new omnichannel contact. Permission required: `view-l-room`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\RocketChatApiClient\OmnichannelApi\Api\LivechatContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = RScctEHSmLGZGywfIhWyRpyofhKOiMoUIpimhvheU3f; // string | The `authToken` of the authenticated user.
$x_user_id = rbAXPnMktTFbNpwtJ; // string | The `userId` of the authenticated user.
$post_api_v1_omnichannel_contact_request = {"token":"434lxd7iss8yh8c4m80wh","name":"Chris","email":"chris@gmail.com","phone":"+91123456788","contactManager":{"username":"kim.jane"}}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactRequest

try {
    $result = $apiInstance->postApiV1OmnichannelContact($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_omnichannel_contact_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactRequest**](../Model/PostApiV1OmnichannelContactRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContact200Response**](../Model/PostApiV1OmnichannelContact200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
