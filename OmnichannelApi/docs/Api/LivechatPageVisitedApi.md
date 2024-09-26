# RocketChatOmnichannelApi\LivechatPageVisitedApi

All URIs are relative to https://apiexplorer.support.rocket.chat, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiV1LivechatPageVisited()**](LivechatPageVisitedApi.md#postApiV1LivechatPageVisited) | **POST** /api/v1/livechat/page.visited | Send Visitor navigation history |


## `postApiV1LivechatPageVisited()`

```php
postApiV1LivechatPageVisited($post_api_v1_livechat_page_visited_request): \RocketChatOmnichannelApi\Model\PostApiV1LivechatPageVisited200Response
```

Send Visitor navigation history

Retrieves the pages your omnichannel user navigated on your website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RocketChatOmnichannelApi\Api\LivechatPageVisitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_v1_livechat_page_visited_request = {"token":"iNKE8a6k6cjbqWhWd","rid":"vp3D9H8ud6HYvRpvq","pageInfo":{"change":"url","title":"","location":{"href":"http://localhost:3000/packages/rocketchat_livechat/assets/demo.html#page-4"}}}; // \RocketChatOmnichannelApi\Model\PostApiV1LivechatPageVisitedRequest

try {
    $result = $apiInstance->postApiV1LivechatPageVisited($post_api_v1_livechat_page_visited_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPageVisitedApi->postApiV1LivechatPageVisited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_v1_livechat_page_visited_request** | [**\RocketChatOmnichannelApi\Model\PostApiV1LivechatPageVisitedRequest**](../Model/PostApiV1LivechatPageVisitedRequest.md)|  | [optional] |

### Return type

[**\RocketChatOmnichannelApi\Model\PostApiV1LivechatPageVisited200Response**](../Model/PostApiV1LivechatPageVisited200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
