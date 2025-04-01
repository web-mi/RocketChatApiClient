# WebMI\RocketChatApiClient\OmnichannelApi\LivechatContactsApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1ContactSearch()**](LivechatContactsApi.md#getApiV1ContactSearch) | **GET** /api/v1/omnichannel/contact.search | Search Contacts |
| [**getApiV1OmnichannelContactsChannels()**](LivechatContactsApi.md#getApiV1OmnichannelContactsChannels) | **GET** /api/v1/omnichannel/contacts.channels | Get channels grouped by contact name |
| [**getApiV1OmnichannelContactsGet()**](LivechatContactsApi.md#getApiV1OmnichannelContactsGet) | **GET** /api/v1/omnichannel/contacts.get | Get Omnichannel Contact |
| [**getApiV1OmnichannelContactsHistory()**](LivechatContactsApi.md#getApiV1OmnichannelContactsHistory) | **GET** /api/v1/omnichannel/contacts.history | Get Contact History |
| [**getApiV1OmnichannelContactsSearch()**](LivechatContactsApi.md#getApiV1OmnichannelContactsSearch) | **GET** /api/v1/omnichannel/contacts.search | Search Omnichannel Contacts |
| [**postApiV1OmnichannelContact()**](LivechatContactsApi.md#postApiV1OmnichannelContact) | **POST** /api/v1/omnichannel/contact | Register or Update Omnichannel Contact |
| [**postApiV1OmnichannelContacts()**](LivechatContactsApi.md#postApiV1OmnichannelContacts) | **POST** /api/v1/omnichannel/contacts | Register Omnichannel Contacts |
| [**postApiV1OmnichannelContactsUpdate()**](LivechatContactsApi.md#postApiV1OmnichannelContactsUpdate) | **POST** /api/v1/omnichannel/contacts.update | Update Omnichannel Contact |


## `getApiV1ContactSearch()`

```php
getApiV1ContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1ContactSearch200Response
```

Search Contacts

> **Note:** This endpoint will be replaced. Refer to the [new API documentation](https://developer.rocket.chat/apidocs/search-omnichannel-contacts) for updated usage and features.  Find contacts by name, email, phone number, or any custom field values stored in the database. Permission required: `view-l-room`. * Encode values having characters like @,+, /and * to avoid breaking the endpoint. * To find contacts using custom fields, use the custom query parameter. The custom query parameter must be encoded by <a href=\"https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams\" target=\"_blank\">URLSearchParams</a>. For example, to search contacts with premium subscription, the request is as follows: ``` curl --location --globoff 'http://localhost:3000/api/v1/omnichannel/contact.search?custom={%20%22Subscription%22%3A%20%22premium%22%20}' \\ --header 'X-Auth-Token: b5BKhblglC5OU0AfB_Tl9dKmOb0zXUvWK-nhNT_aE8V' \\ --header 'X-User-Id: CkCPNcvsvCDfmWLqC'         ```

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
    $result = $apiInstance->getApiV1ContactSearch($x_auth_token, $x_user_id, $email, $phone, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1ContactSearch: ', $e->getMessage(), PHP_EOL;
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

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1ContactSearch200Response**](../Model/GetApiV1ContactSearch200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1OmnichannelContactsChannels()`

```php
getApiV1OmnichannelContactsChannels($x_auth_token, $x_user_id, $contact_id): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsChannels200Response
```

Get channels grouped by contact name

Get channels grouped by contact name. Permission required: `view-livechat-contact`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

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
$contact_id = 673653b997f0fbcd657f0ebf; // string | The contact's ID.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsChannels($x_auth_token, $x_user_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **contact_id** | **string**| The contact&#39;s ID. | |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsChannels200Response**](../Model/GetApiV1OmnichannelContactsChannels200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1OmnichannelContactsGet()`

```php
getApiV1OmnichannelContactsGet($x_auth_token, $x_user_id, $contact_id, $visitor): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsGet200Response
```

Get Omnichannel Contact

Retrieve a single omnichannel contact by providing **either** a `contactId` or a `visitor` object.   - Use `contactId` to fetch the contact directly by its unique ID.   - Use the `visitor` object to fetch the contact by its visitor association.    **Note:** You must provide only one of these parameters in the request.   Required permission: `view-livechat-contact`.

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
$contact_id = 673c76df47a6c9b89dd263d8; // string | The contact's unique ID. Provide this parameter if fetching the contact directly by its ID.
$visitor = new \WebMI\RocketChatApiClient\OmnichannelApi\Model\\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsGetVisitorParameter(); // \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsGetVisitorParameter | Visitor association for the contact. Provide this object as JSON with the required fields: - `visitorId` (string): The ID of the visitor. - `source.type` (string): The type of the source (e.g., \"web\").

try {
    $result = $apiInstance->getApiV1OmnichannelContactsGet($x_auth_token, $x_user_id, $contact_id, $visitor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **contact_id** | **string**| The contact&#39;s unique ID. Provide this parameter if fetching the contact directly by its ID. | [optional] |
| **visitor** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsGetVisitorParameter**](../Model/.md)| Visitor association for the contact. Provide this object as JSON with the required fields: - &#x60;visitorId&#x60; (string): The ID of the visitor. - &#x60;source.type&#x60; (string): The type of the source (e.g., \&quot;web\&quot;). | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsGet200Response**](../Model/GetApiV1OmnichannelContactsGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1OmnichannelContactsHistory()`

```php
getApiV1OmnichannelContactsHistory($x_auth_token, $x_user_id, $contact_id, $source, $offset, $count, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\DeleteApiV1LivechatUsersTypeId200Response
```

Get Contact History

Get contact's history. Permission required: `view-livechat-contact-history`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

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
$contact_id = 673653b997f0fbcd657f0ebf; // string | The contact's ID.
$source = widget; // string | The source of the contact's interaction with your organization.
$offset = 2; // float | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 2; // float | The number of items to return.
$sort = {"msgs": 1}; // mixed | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsHistory($x_auth_token, $x_user_id, $contact_id, $source, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **contact_id** | **string**| The contact&#39;s ID. | |
| **source** | **string**| The source of the contact&#39;s interaction with your organization. | [optional] |
| **offset** | **float**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional] |
| **count** | **float**| The number of items to return. | [optional] |
| **sort** | [**mixed**](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. | [optional] |

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

## `getApiV1OmnichannelContactsSearch()`

```php
getApiV1OmnichannelContactsSearch($x_auth_token, $x_user_id, $search_text, $unknown, $count, $offset, $sort): \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsSearch200Response
```

Search Omnichannel Contacts

Retrieve a list of omnichannel contacts based on search criteria like name, email or phone number. Permission required: `view-livechat-contact`.  **Note**: Ensure to URL-encode special characters such as `@`, `+`, `/`, and `*` in query parameters to prevent issues with the endpoint. For example, encode email addresses as `mail%40example.com` instead of `mail@example.com`.

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
$search_text = John; // string | Text to search for in contact details.
$unknown = false; // bool | Filter by contact's unknown status.
$count = 2; // float | Number of results to return per search.
$offset = 5; // float | Number of results to skip for pagination.
$sort = {"name": 1}; // string | JSON string defining the sort order of results.

try {
    $result = $apiInstance->getApiV1OmnichannelContactsSearch($x_auth_token, $x_user_id, $search_text, $unknown, $count, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->getApiV1OmnichannelContactsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **search_text** | **string**| Text to search for in contact details. | [optional] |
| **unknown** | **bool**| Filter by contact&#39;s unknown status. | [optional] |
| **count** | **float**| Number of results to return per search. | [optional] |
| **offset** | **float**| Number of results to skip for pagination. | [optional] |
| **sort** | **string**| JSON string defining the sort order of results. | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1OmnichannelContactsSearch200Response**](../Model/GetApiV1OmnichannelContactsSearch200Response.md)

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

> **Note:** This endpoint will be replaced. Refer to the new API documentations for [registering](https://developer.rocket.chat/apidocs/register-omnichannel-contacts) and [updating](https://developer.rocket.chat/apidocs/update-omnichannel-contact) contact for updated usage and features.  Register a guest user as a new omnichannel contact. Permission required: `view-l-room`

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

## `postApiV1OmnichannelContacts()`

```php
postApiV1OmnichannelContacts($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contacts_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContacts200Response
```

Register Omnichannel Contacts

Register a new omnichannel contact. Permission required: `create-livechat-contact`  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

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
$post_api_v1_omnichannel_contacts_request = {"name":"John","phones":["+123456789"],"emails":["email@example.com"],"customFileds":{},"contactManager":"67dfghjkjhgfdce31dd9bdae"}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsRequest

try {
    $result = $apiInstance->postApiV1OmnichannelContacts($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contacts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_omnichannel_contacts_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsRequest**](../Model/PostApiV1OmnichannelContactsRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContacts200Response**](../Model/PostApiV1OmnichannelContacts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1OmnichannelContactsUpdate()`

```php
postApiV1OmnichannelContactsUpdate($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contacts_update_request): \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsUpdate200Response
```

Update Omnichannel Contact

Update omnichannel contact. Permission required: `update-livechat-contact`.  ### Changelog | Version      | Description |  | ---------------- | ------------| |6.1.0             | Added       |

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
$post_api_v1_omnichannel_contacts_update_request = {"contactId":"67487f45e98719b7908d0f29","name":"John","phones":["+123456789"],"emails":["email@example.com"],"contactManager":"9sLvmAcQk4EAGdi6e","customFields":{},"wipeConflicts":false}; // \WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsUpdateRequest

try {
    $result = $apiInstance->postApiV1OmnichannelContactsUpdate($x_auth_token, $x_user_id, $post_api_v1_omnichannel_contacts_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatContactsApi->postApiV1OmnichannelContactsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. | |
| **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. | |
| **post_api_v1_omnichannel_contacts_update_request** | [**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsUpdateRequest**](../Model/PostApiV1OmnichannelContactsUpdateRequest.md)|  | [optional] |

### Return type

[**\WebMI\RocketChatApiClient\OmnichannelApi\Model\PostApiV1OmnichannelContactsUpdate200Response**](../Model/PostApiV1OmnichannelContactsUpdate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
