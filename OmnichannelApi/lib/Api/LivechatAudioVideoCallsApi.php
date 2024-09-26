<?php
/**
 * LivechatAudioVideoCallsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebMIRocketChatApiClientOmnichannelApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WebMIRocketChatApiClientOmnichannelApi\ApiException;
use WebMIRocketChatApiClientOmnichannelApi\Configuration;
use WebMIRocketChatApiClientOmnichannelApi\HeaderSelector;
use WebMIRocketChatApiClientOmnichannelApi\ObjectSerializer;

/**
 * LivechatAudioVideoCallsApi Class Doc Comment
 *
 * @category Class
 * @package  WebMIRocketChatApiClientOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LivechatAudioVideoCallsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getApiV1LivechatWebrtcCall' => [
            'application/json',
        ],
        'putApiV1LivechatWebrtcCallCallId' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getApiV1LivechatWebrtcCall
     *
     * Start Call
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $rid The room ID. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1LivechatWebrtcCall'] to see the possible values for this operation
     *
     * @throws \WebMIRocketChatApiClientOmnichannelApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response
     */
    public function getApiV1LivechatWebrtcCall($x_auth_token, $x_user_id, $rid, string $contentType = self::contentTypes['getApiV1LivechatWebrtcCall'][0])
    {
        list($response) = $this->getApiV1LivechatWebrtcCallWithHttpInfo($x_auth_token, $x_user_id, $rid, $contentType);
        return $response;
    }

    /**
     * Operation getApiV1LivechatWebrtcCallWithHttpInfo
     *
     * Start Call
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $rid The room ID. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1LivechatWebrtcCall'] to see the possible values for this operation
     *
     * @throws \WebMIRocketChatApiClientOmnichannelApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApiV1LivechatWebrtcCallWithHttpInfo($x_auth_token, $x_user_id, $rid, string $contentType = self::contentTypes['getApiV1LivechatWebrtcCall'][0])
    {
        $request = $this->getApiV1LivechatWebrtcCallRequest($x_auth_token, $x_user_id, $rid, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getApiV1LivechatWebrtcCallAsync
     *
     * Start Call
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $rid The room ID. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1LivechatWebrtcCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiV1LivechatWebrtcCallAsync($x_auth_token, $x_user_id, $rid, string $contentType = self::contentTypes['getApiV1LivechatWebrtcCall'][0])
    {
        return $this->getApiV1LivechatWebrtcCallAsyncWithHttpInfo($x_auth_token, $x_user_id, $rid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getApiV1LivechatWebrtcCallAsyncWithHttpInfo
     *
     * Start Call
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $rid The room ID. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1LivechatWebrtcCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiV1LivechatWebrtcCallAsyncWithHttpInfo($x_auth_token, $x_user_id, $rid, string $contentType = self::contentTypes['getApiV1LivechatWebrtcCall'][0])
    {
        $returnType = '\WebMIRocketChatApiClientOmnichannelApi\Model\GetApiV1LivechatWebrtcCall200Response';
        $request = $this->getApiV1LivechatWebrtcCallRequest($x_auth_token, $x_user_id, $rid, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getApiV1LivechatWebrtcCall'
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $rid The room ID. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1LivechatWebrtcCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApiV1LivechatWebrtcCallRequest($x_auth_token, $x_user_id, $rid, string $contentType = self::contentTypes['getApiV1LivechatWebrtcCall'][0])
    {

        // verify the required parameter 'x_auth_token' is set
        if ($x_auth_token === null || (is_array($x_auth_token) && count($x_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_auth_token when calling getApiV1LivechatWebrtcCall'
            );
        }

        // verify the required parameter 'x_user_id' is set
        if ($x_user_id === null || (is_array($x_user_id) && count($x_user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user_id when calling getApiV1LivechatWebrtcCall'
            );
        }

        // verify the required parameter 'rid' is set
        if ($rid === null || (is_array($rid) && count($rid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rid when calling getApiV1LivechatWebrtcCall'
            );
        }


        $resourcePath = '/api/v1/livechat/webrtc.call';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rid,
            'rid', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);

        // header params
        if ($x_auth_token !== null) {
            $headerParams['X-Auth-Token'] = ObjectSerializer::toHeaderValue($x_auth_token);
        }
        // header params
        if ($x_user_id !== null) {
            $headerParams['X-User-Id'] = ObjectSerializer::toHeaderValue($x_user_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation putApiV1LivechatWebrtcCallCallId
     *
     * Update Call Status
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $call_id The call message _id. (required)
     * @param  \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest $put_api_v1_livechat_webrtc_call_call_id_request put_api_v1_livechat_webrtc_call_call_id_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putApiV1LivechatWebrtcCallCallId'] to see the possible values for this operation
     *
     * @throws \WebMIRocketChatApiClientOmnichannelApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response
     */
    public function putApiV1LivechatWebrtcCallCallId($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request = null, string $contentType = self::contentTypes['putApiV1LivechatWebrtcCallCallId'][0])
    {
        list($response) = $this->putApiV1LivechatWebrtcCallCallIdWithHttpInfo($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request, $contentType);
        return $response;
    }

    /**
     * Operation putApiV1LivechatWebrtcCallCallIdWithHttpInfo
     *
     * Update Call Status
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $call_id The call message _id. (required)
     * @param  \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest $put_api_v1_livechat_webrtc_call_call_id_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putApiV1LivechatWebrtcCallCallId'] to see the possible values for this operation
     *
     * @throws \WebMIRocketChatApiClientOmnichannelApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function putApiV1LivechatWebrtcCallCallIdWithHttpInfo($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request = null, string $contentType = self::contentTypes['putApiV1LivechatWebrtcCallCallId'][0])
    {
        $request = $this->putApiV1LivechatWebrtcCallCallIdRequest($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putApiV1LivechatWebrtcCallCallIdAsync
     *
     * Update Call Status
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $call_id The call message _id. (required)
     * @param  \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest $put_api_v1_livechat_webrtc_call_call_id_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putApiV1LivechatWebrtcCallCallId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putApiV1LivechatWebrtcCallCallIdAsync($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request = null, string $contentType = self::contentTypes['putApiV1LivechatWebrtcCallCallId'][0])
    {
        return $this->putApiV1LivechatWebrtcCallCallIdAsyncWithHttpInfo($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putApiV1LivechatWebrtcCallCallIdAsyncWithHttpInfo
     *
     * Update Call Status
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $call_id The call message _id. (required)
     * @param  \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest $put_api_v1_livechat_webrtc_call_call_id_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putApiV1LivechatWebrtcCallCallId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putApiV1LivechatWebrtcCallCallIdAsyncWithHttpInfo($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request = null, string $contentType = self::contentTypes['putApiV1LivechatWebrtcCallCallId'][0])
    {
        $returnType = '\WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallId200Response';
        $request = $this->putApiV1LivechatWebrtcCallCallIdRequest($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putApiV1LivechatWebrtcCallCallId'
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  string $call_id The call message _id. (required)
     * @param  \WebMIRocketChatApiClientOmnichannelApi\Model\PutApiV1LivechatWebrtcCallCallIdRequest $put_api_v1_livechat_webrtc_call_call_id_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putApiV1LivechatWebrtcCallCallId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function putApiV1LivechatWebrtcCallCallIdRequest($x_auth_token, $x_user_id, $call_id, $put_api_v1_livechat_webrtc_call_call_id_request = null, string $contentType = self::contentTypes['putApiV1LivechatWebrtcCallCallId'][0])
    {

        // verify the required parameter 'x_auth_token' is set
        if ($x_auth_token === null || (is_array($x_auth_token) && count($x_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_auth_token when calling putApiV1LivechatWebrtcCallCallId'
            );
        }

        // verify the required parameter 'x_user_id' is set
        if ($x_user_id === null || (is_array($x_user_id) && count($x_user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user_id when calling putApiV1LivechatWebrtcCallCallId'
            );
        }

        // verify the required parameter 'call_id' is set
        if ($call_id === null || (is_array($call_id) && count($call_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $call_id when calling putApiV1LivechatWebrtcCallCallId'
            );
        }



        $resourcePath = '/api/v1/livechat/webrtc.call/{callId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_auth_token !== null) {
            $headerParams['X-Auth-Token'] = ObjectSerializer::toHeaderValue($x_auth_token);
        }
        // header params
        if ($x_user_id !== null) {
            $headerParams['X-User-Id'] = ObjectSerializer::toHeaderValue($x_user_id);
        }

        // path params
        if ($call_id !== null) {
            $resourcePath = str_replace(
                '{' . 'callId' . '}',
                ObjectSerializer::toPathValue($call_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($put_api_v1_livechat_webrtc_call_call_id_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($put_api_v1_livechat_webrtc_call_call_id_request));
            } else {
                $httpBody = $put_api_v1_livechat_webrtc_call_call_id_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
