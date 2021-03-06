<?php
/*
 * DeskPRO (r) has been developed by DeskPRO Ltd. https://www.deskpro.com/
 * a British company located in London, England.
 *
 * All source code and content Copyright (c) 2017, DeskPRO Ltd.
 *
 * The license agreement under which this software is released
 * can be found at https://www.deskpro.com/eula/
 *
 * By using this software, you acknowledge having read the license
 * and agree to be bound thereby.
 *
 * Please note that DeskPRO is not free software. We release the full
 * source code for our software because we trust our users to pay us for
 * the huge investment in time and energy that has gone into both creating
 * this software and supporting our customers. By providing the source code
 * we preserve our customers' ability to modify, audit and learn from our
 * work. We have been developing DeskPRO since 2001, please help us make it
 * another decade.
 *
 * Like the work you see? Think you could make it better? We are always
 * looking for great developers to join us: http://www.deskpro.com/jobs/
 *
 * ~ Thanks, Everyone at Team DeskPRO
 */

/**
 * SearchApi
 * PHP version 5
 *
 * @category Class
 * @package  DeskPRO\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DeskPRO API
 *
 * DeskPRO API
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DeskPRO\API\Client;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DeskPRO\API\ApiException;
use DeskPRO\API\Configuration;
use DeskPRO\API\HeaderSelector;
use DeskPRO\API\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  DeskPRO\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null
    ) {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSearch
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *   "types" string  comma separated list of types (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DeskPRO\API\Model\Response
     */
    public function getSearch(array $filters = [])
    {
        list($response) = $this->getSearchWithHttpInfo($filters);
        return $response;
    }

    /**
     * Operation getSearchWithHttpInfo
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *   "types" string  comma separated list of types (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DeskPRO\API\Model\Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSearchWithHttpInfo(array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchRequest($filters);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse()->getBody()->getContents()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\DeskPRO\API\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSearchAsync
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *   "types" string  comma separated list of types (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchAsync(array $filters = [])
    {
        return $this->getSearchAsyncWithHttpInfo($filters)
            ->then(
                function (array $response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSearchAsyncWithHttpInfo
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *   "types" string  comma separated list of types (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchAsyncWithHttpInfo(array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchRequest($filters);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function (ResponseInterface $response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                                        if (isset($content->data)) {
                                            $content = $content->data;
                                        }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (RequestException $exception) {
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSearch'
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *   "types" string  comma separated list of types (optional)
     *
     * @param array $filters API endpoint parameters
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSearchRequest(array $filters = [])
    {
        if (!isset($filters['q'])) {
            $filters['q'] = null;
        }
        if (!isset($filters['sort'])) {
            $filters['sort'] = null;
        }
        if (!isset($filters['types'])) {
            $filters['types'] = null;
        }
        

        $resourcePath = '/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        
        // query params
        if ($filters['q'] !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($filters['q']);
        }
        // query params
        if ($filters['sort'] !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($filters['sort']);
        }
        // query params
        if ($filters['types'] !== null) {
            $queryParams['types'] = ObjectSerializer::toQueryValue($filters['types']);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSearchByType
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param string $type 
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DeskPRO\API\Model\Response
     */
    public function getSearchByType($type, array $filters = [])
    {
        list($response) = $this->getSearchByTypeWithHttpInfo($type, $filters);
        return $response;
    }

    /**
     * Operation getSearchByTypeWithHttpInfo
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param string $type 
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DeskPRO\API\Model\Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSearchByTypeWithHttpInfo($type, array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchByTypeRequest($type, $filters);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse()->getBody()->getContents()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\DeskPRO\API\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSearchByTypeAsync
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param string $type 
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchByTypeAsync($type, array $filters = [])
    {
        return $this->getSearchByTypeAsyncWithHttpInfo($type, $filters)
            ->then(
                function (array $response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSearchByTypeAsyncWithHttpInfo
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param string $type 
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchByTypeAsyncWithHttpInfo($type, array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchByTypeRequest($type, $filters);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function (ResponseInterface $response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                                        if (isset($content->data)) {
                                            $content = $content->data;
                                        }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (RequestException $exception) {
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSearchByType'
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param string $type 
     * @param array $filters API endpoint parameters
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSearchByTypeRequest($type, array $filters = [])
    {
        if (empty($type)) {
            throw new \InvalidArgumentException('Missing parameter "$type" in SearchApi::getSearchByTypeRequest().');
        }
        if (!isset($filters['q'])) {
            $filters['q'] = null;
        }
        if (!isset($filters['sort'])) {
            $filters['sort'] = null;
        }
        

        $resourcePath = '/search/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($type !== null) {
            $type = ObjectSerializer::toQueryValue($type);
        }
        
        // query params
        if ($filters['q'] !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($filters['q']);
        }
        // query params
        if ($filters['sort'] !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($filters['sort']);
        }

        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSearchPeopleAndOrg
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DeskPRO\API\Model\Response
     */
    public function getSearchPeopleAndOrg(array $filters = [])
    {
        list($response) = $this->getSearchPeopleAndOrgWithHttpInfo($filters);
        return $response;
    }

    /**
     * Operation getSearchPeopleAndOrgWithHttpInfo
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \DeskPRO\API\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DeskPRO\API\Model\Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSearchPeopleAndOrgWithHttpInfo(array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchPeopleAndOrgRequest($filters);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse()->getBody()->getContents()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\DeskPRO\API\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSearchPeopleAndOrgAsync
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchPeopleAndOrgAsync(array $filters = [])
    {
        return $this->getSearchPeopleAndOrgAsyncWithHttpInfo($filters)
            ->then(
                function (array $response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSearchPeopleAndOrgAsyncWithHttpInfo
     *
     * 
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param array $filters API endpoint parameters
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSearchPeopleAndOrgAsyncWithHttpInfo(array $filters = [])
    {
        $returnType = '\DeskPRO\API\Model\Response';
        $request = $this->getSearchPeopleAndOrgRequest($filters);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function (ResponseInterface $response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                                        if (isset($content->data)) {
                                            $content = $content->data;
                                        }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (RequestException $exception) {
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSearchPeopleAndOrg'
     *
     * Filters:
     *   "q" string  search term (optional)
     *   "sort" string  how to sort (optional)
     *
     * @param array $filters API endpoint parameters
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSearchPeopleAndOrgRequest(array $filters = [])
    {
        if (!isset($filters['q'])) {
            $filters['q'] = null;
        }
        if (!isset($filters['sort'])) {
            $filters['sort'] = null;
        }
        

        $resourcePath = '/search/people_and_orgs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        
        // query params
        if ($filters['q'] !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($filters['q']);
        }
        // query params
        if ($filters['sort'] !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($filters['sort']);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
