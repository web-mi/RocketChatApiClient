# WebMIRocketChatApiClientSettingsApi\DNSApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1DnsResolveSrv()**](DNSApi.md#postApiV1DnsResolveSrv) | **POST** /api/v1/dns.resolve.srv | Resolve DNS URL Records |
| [**postApiV1DnsResolveTxt()**](DNSApi.md#postApiV1DnsResolveTxt) | **POST** /api/v1/dns.resolve.txt | Resolve DNS Text Records |


## `postApiV1DnsResolveSrv()`

```php
postApiV1DnsResolveSrv($x_user_id, $x_auth_token, $url): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Resolve DNS URL Records

Resolves DNS URL records for a hostname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$url = 'url_example'; // string | The hostname.

try {
    $result = $apiInstance->postApiV1DnsResolveSrv($x_user_id, $x_auth_token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->postApiV1DnsResolveSrv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **url** | **string**| The hostname. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1DnsResolveTxt()`

```php
postApiV1DnsResolveTxt($x_user_id, $x_auth_token, $url): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Resolve DNS Text Records

Resolves DNS text records (TXT records) for a hostname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$url = 'url_example'; // string | The hostname.

try {
    $result = $apiInstance->postApiV1DnsResolveTxt($x_user_id, $x_auth_token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->postApiV1DnsResolveTxt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **url** | **string**| The hostname. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response**](../Model/PostApiV1SettingsAddCustomOAuth200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
