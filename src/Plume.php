<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

use GuzzleHttp\Exception\GuzzleException;
use Ocolin\Plume\Auth\TokenManager;
use Ocolin\Plume\Auth\FileTokenCache;
use Ocolin\Plume\Auth\TokenCacheInterface as TokenCache;
use Ocolin\Plume\Exception\ApiException;
use Ocolin\Plume\Exception\AuthException;

class Plume
{
    /**
     * @var HTTP Guzzle HTTP client.
     */
    private HTTP $http;

    /**
     * @var Config API config data object.
     */
    private Config $config;


/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    /**
     * @param ?Config $config Configuration data object.
     * @param array<string, string|int|float|bool> $options Guzzle HTTP options.
     * @param ?HTTP $http Guzzle HTTP client for mocking.
     * @param ?TokenCache $cache Token management for mocking.
     * @param bool $throwOnError Throw a PHP error if API returns an error message.
     */
    public function __construct(
             ?Config $config  = null,
               array $options = [],
               ?HTTP $http    = null,
         ?TokenCache $cache   = null,
         bool $throwOnError   = false
    )
    {
        $this->config = $config ?? new Config();
        $this->http = $http   ?? new HTTP(
                  config: $this->config,
            tokenManager: new TokenManager(
                config: $this->config,
                cache: $cache ?? new FileTokenCache()
            ),
                 options: $options,
            throwOnError: $throwOnError
        );
    }



/* GET
----------------------------------------------------------------------------- */

    /**
     * Send HTTP GET request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function get( string $endpoint, array|object $query = [] ) : Response
    {
        return $this->http->request( path: $endpoint, query: (array)$query );
    }


/* POST
----------------------------------------------------------------------------- */

    /**
     * Send HTTP POST request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, mixed>|object $body HTTP body content.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @param bool $formData HTTP Body in x-www-form instead of JSON.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function post(
              string $endpoint,
        array|object $body     = [],
        array|object $query    = [],
                bool $formData = false
    ) : Response
    {
        return $this->http->request(
                path: $endpoint,
              method: 'POST',
               query: (array)$query,
                body: $body,
            formData: $formData
        );
    }



/* PUT
----------------------------------------------------------------------------- */

    /**
     * Send HTTP PUT request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, mixed>|object $body HTTP body content.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @param bool $formData HTTP Body in x-www-form instead of JSON.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function put(
              string $endpoint,
        array|object $body     = [],
        array|object $query    = [],
                bool $formData = false
    ) : Response
    {
        return $this->http->request(
                path: $endpoint,
              method: 'PUT',
               query: (array)$query,
                body: $body,
            formData: $formData
        );
    }



/* PATCH
----------------------------------------------------------------------------- */

    /**
     * Send HTTP PATCH request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, mixed>|object $body HTTP body content.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @param bool $formData HTTP Body in x-www-form instead of JSON.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function patch(
              string $endpoint,
        array|object $body     = [],
        array|object $query    = [],
                bool $formData = false
    ) : Response
    {
        return $this->http->request(
                path: $endpoint,
              method: 'PATCH',
               query: (array)$query,
                body: $body,
            formData: $formData
        );
    }



/* DELETE
----------------------------------------------------------------------------- */

    /**
     * Send HTTP DELETE request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function delete( string $endpoint, array|object $query = [] ) : Response
    {
        return $this->http->request(
            path: $endpoint, method: 'DELETE', query: (array)$query
        );
    }



/* HEAD
----------------------------------------------------------------------------- */

    /**
     * Send HTTP HEAD request.
     *
     * @param string $endpoint API server endpoint.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function head( string $endpoint, array|object $query = [] ) : Response
    {
        return $this->http->request(
            path: $endpoint, method: 'HEAD', query: (array)$query
        );
    }



/* REQUEST
----------------------------------------------------------------------------- */

    /**
     * Make a generic API request.
     *
     * @param string $endpoint API server endpoint.
     * @param string $method HTTP method.
     * @param array<string, string|int|float|bool>|object $query HTTP GET query parameters.
     * @param array<string, mixed>|object $body HTTP body content.
     * @param bool $formData HTTP Body in x-www-form instead of JSON.
     * @return Response Plume client response object.
     * @throws ApiException API Client throws an error.
     * @throws AuthException Error initiating authentication.
     * @throws GuzzleException Guzzle throwing a web client error.
     */
    public function request(
              string $endpoint,
              string $method   = 'GET',
        array|object $query    = [],
        array|object $body     = [],
                bool $formData = false
    ) : Response
    {
        return $this->http->request(
                path: $endpoint,
              method: $method,
               query: (array)$query,
                body: $body,
            formData: $formData
        );
    }
}