# WebMIRocketChatApiClientSettingsApi\ImportApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiV1GetCurrentImportOperation()**](ImportApi.md#getApiV1GetCurrentImportOperation) | **GET** /api/v1/getCurrentImportOperation | Get Current Import Operations |
| [**getApiV1GetImportFileData()**](ImportApi.md#getApiV1GetImportFileData) | **GET** /api/v1/getImportFileData | Get Import File Data |
| [**getApiV1GetImportProgress()**](ImportApi.md#getApiV1GetImportProgress) | **GET** /api/v1/getImportProgress | Get Import Progress |
| [**getApiV1GetLatestImportOperations()**](ImportApi.md#getApiV1GetLatestImportOperations) | **GET** /api/v1/getLatestImportOperations | Get Latest Import Operations |
| [**postApiV1DownloadPendingAvatars()**](ImportApi.md#postApiV1DownloadPendingAvatars) | **POST** /api/v1/downloadPendingAvatars | Download Pending Avatars |
| [**postApiV1DownloadPendingFiles()**](ImportApi.md#postApiV1DownloadPendingFiles) | **POST** /api/v1/downloadPendingFiles | Download Pending Files |
| [**postApiV1DownloadPublicImportFile()**](ImportApi.md#postApiV1DownloadPublicImportFile) | **POST** /api/v1/downloadPublicImportFile | Download Public Import File |
| [**postApiV1StartImport()**](ImportApi.md#postApiV1StartImport) | **POST** /api/v1/startImport | Start Import |
| [**postApiV1UploadImportFile()**](ImportApi.md#postApiV1UploadImportFile) | **POST** /api/v1/uploadImportFile | Upload Import File |


## `getApiV1GetCurrentImportOperation()`

```php
getApiV1GetCurrentImportOperation($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetCurrentImportOperation200Response
```

Get Current Import Operations

Get the current import operation. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetCurrentImportOperation($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetCurrentImportOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetCurrentImportOperation200Response**](../Model/GetApiV1GetCurrentImportOperation200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GetImportFileData()`

```php
getApiV1GetImportFileData($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetImportFileData200Response
```

Get Import File Data

Get the import file data.  Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetImportFileData($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetImportFileData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetImportFileData200Response**](../Model/GetApiV1GetImportFileData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GetImportProgress()`

```php
getApiV1GetImportProgress($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetImportProgress200Response
```

Get Import Progress

Get the progress of the import. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetImportProgress($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetImportProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetImportProgress200Response**](../Model/GetApiV1GetImportProgress200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1GetLatestImportOperations()`

```php
getApiV1GetLatestImportOperations($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetLatestImportOperations200ResponseInner[]
```

Get Latest Import Operations

Get latests import operations. Permission required: `view-import-operations` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1GetLatestImportOperations($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getApiV1GetLatestImportOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\GetApiV1GetLatestImportOperations200ResponseInner[]**](../Model/GetApiV1GetLatestImportOperations200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1DownloadPendingAvatars()`

```php
postApiV1DownloadPendingAvatars($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPendingFiles200Response
```

Download Pending Avatars

Download pending avatars from the import. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1DownloadPendingAvatars($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPendingAvatars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPendingFiles200Response**](../Model/PostApiV1DownloadPendingFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1DownloadPendingFiles()`

```php
postApiV1DownloadPendingFiles($x_user_id, $x_auth_token): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPendingFiles200Response
```

Download Pending Files

Dowbload pending files. Permission required: `run-import` ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.

try {
    $result = $apiInstance->postApiV1DownloadPendingFiles($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPendingFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |

### Return type

[**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPendingFiles200Response**](../Model/PostApiV1DownloadPendingFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1DownloadPublicImportFile()`

```php
postApiV1DownloadPublicImportFile($x_user_id, $x_auth_token, $post_api_v1_download_public_import_file_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Download Public Import File

Download the public import file. Permission required: `run-import`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_download_public_import_file_request = {"fileUrl":"https://www.freepik.com/photos/dog","importerKey":"pending-avatars"}; // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPublicImportFileRequest

try {
    $result = $apiInstance->postApiV1DownloadPublicImportFile($x_user_id, $x_auth_token, $post_api_v1_download_public_import_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1DownloadPublicImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_download_public_import_file_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1DownloadPublicImportFileRequest**](../Model/PostApiV1DownloadPublicImportFileRequest.md)|  | [optional] |

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

## `postApiV1StartImport()`

```php
postApiV1StartImport($x_user_id, $x_auth_token, $post_api_v1_start_import_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Start Import

Triggers the process of importing users, rooms and messages to the workspace. Permission required: `run-import`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_start_import_request = {"input":{"users":[{"user_id":"testbh","username":"testbh","email":"testbh@gmail.com","is_deleted":false,"is_bot":false,"do_import":true,"is_email_taken":false}],"channels":[{"channel_id":"WDuJLFkjwk6L7LdFC","name":"dlp","is_archived":false,"do_import":true,"is_private":false,"is_direct":false}]}}; // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1StartImportRequest

try {
    $result = $apiInstance->postApiV1StartImport($x_user_id, $x_auth_token, $post_api_v1_start_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1StartImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_start_import_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1StartImportRequest**](../Model/PostApiV1StartImportRequest.md)|  | [optional] |

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

## `postApiV1UploadImportFile()`

```php
postApiV1UploadImportFile($x_user_id, $x_auth_token, $post_api_v1_upload_import_file_request): \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1SettingsAddCustomOAuth200Response
```

Upload Import File

This endpoint takes in the binary content of the imported file, along with additional information about its content, and stores it in a buffer.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.0.0            | Added       |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMIRocketChatApiClientSettingsApi\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = CkCPNctrgCDfmWLqC; // string | The user ID.
$x_auth_token = 1Dd4iN_ClKn5jl-xPC36snQ4s9Zd5GZnXCQuCNSKcVE; // string | The authentication token.
$post_api_v1_upload_import_file_request = {"binaryContent":"/testfile.csv","importerKey":"csv","fileName":"Testfile","contentType":"text/csv"}; // \WebMIRocketChatApiClientSettingsApi\Model\PostApiV1UploadImportFileRequest

try {
    $result = $apiInstance->postApiV1UploadImportFile($x_user_id, $x_auth_token, $post_api_v1_upload_import_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->postApiV1UploadImportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_user_id** | **string**| The user ID. | |
| **x_auth_token** | **string**| The authentication token. | |
| **post_api_v1_upload_import_file_request** | [**\WebMIRocketChatApiClientSettingsApi\Model\PostApiV1UploadImportFileRequest**](../Model/PostApiV1UploadImportFileRequest.md)|  | [optional] |

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
