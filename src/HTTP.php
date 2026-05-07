<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

use GuzzleHttp\Exception\GuzzleException;
use Ocolin\Plume\Auth\TokenManager;
use GuzzleHttp\Client AS GuzzleClient;
use Ocolin\Plume\Exception\ApiException;
use Psr\Http\Message\ResponseInterface;

class HTTP
{
    /**
     * @var GuzzleClient Guzzle HTTP client.
     */
    private GuzzleClient $guzzleClient;

    private const array DEFAULT_OPTIONS = [
        'timeout'         => 30,
        'connect_timeout' => 10,
        'verify'          => true,
    ];

    private const array VALID_METHODS = [
        'GET',
        'POST',
        'PUT',
        'PATCH',
        'DELETE',
        'HEAD'
    ];


/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    /**
     * @param Config $config Object with configuration data.
     * @param TokenManager $tokenManager Manages getting an auth token.
     * @param array<string, string|int|float|bool> $options Guzzle client options.
     * @param GuzzleClient|null $guzzleClient Guzzle client for mocking.
     * @param bool $throwOnError
     */
    public function __construct(
        readonly private Config $config,
        readonly private TokenManager $tokenManager,
                        array $options = [],
                ?GuzzleClient $guzzleClient = null,
        readonly private bool $throwOnError = false
    )
    {
        $http_config = array_merge(
            self::DEFAULT_OPTIONS,
            $options,
            [
                'base_uri'    => rtrim( string: $this->config->api_url, characters: '/' ) . '/',
                'http_errors' => false,
            ]
        );
        $this->guzzleClient = $guzzleClient ?? new GuzzleClient( config: $http_config );
    }



/* HTTP REQUEST TO SERVER
----------------------------------------------------------------------------- */

    /**
     * @param string $path API end point path.
     * @param string $method HTTP method.
     * @param array<string, string|int|float|bool> $query HTTP GET query parameters.
     * @param array<string, mixed>|object $body HTTP body.
     * @param bool $formData Use formData in HTTP body.
     * @return Response Plume client response object.
     * @throws ApiException Error in API.
     * @throws Exception\AuthException Error authenticating.
     * @throws GuzzleException HTTP transport error.
     */
    public function request(
              string $path,
              string $method = 'GET',
               array $query  = [],
        array|object $body   = [],
                bool $formData = false
    ) : Response
    {
        $method = strtoupper( string: $method );
        if( !in_array( needle: $method, haystack: self::VALID_METHODS, strict: true )) {
            throw new ApiException(
                message:    "Invalid HTTP method: {$method}",
                statusCode: 0,
                plumeCode:  ''
            );
        }

        $body = (array)$body;
        $token = $this->tokenManager->getToken();
        $body = $this->fillBody( body: $body );
        $path = $this->substitutePath( path: $path, query: $query );
        $bodyType = $formData ? 'body' : 'json';

        $options = [
            'query'   => $query,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'User-Agent'    => 'Ocolin Plume PHP Client 2.0'
            ]
        ];

        if( $formData ) {
            $options['headers']['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if( !empty( $body )) { $options[ $bodyType ] = $body; }

        $response = self::buildResponse( response:
                $this->guzzleClient->request(
                 method: $method,
                    uri: $path,
                options: $options
            )
        );

        if( $this->throwOnError AND $response->status >= 400 ) {
            $this->parseError(
                status: $response->status,
                  body: $response->body
            );
        }

        return $response;
    }



/* SUBSTITUTE VARIABLES IN ENDPOINT PATH
----------------------------------------------------------------------------- */

    /**
     * @param string $path Original path.
     * @param array<string, string|int|float|bool> &$query GET query parameters.
     * @return string Interpolated path.
     */
    private function substitutePath( string $path, array &$query ) : string
    {
        $path = ltrim( string: $path, characters: '/' );
        if( !str_contains( haystack: $path, needle: '{' )) {
            return $path;
        }

        if( !array_key_exists( key: 'groupId', array: $query )) {
            $path = str_replace(
                 search: '{groupId}',
                replace: $this->config->group_id,
                subject: $path
            );
        }

        if( !array_key_exists( key: 'partnerId', array: $query )) {
            $path = str_replace(
                 search: '{partnerId}',
                replace: $this->config->partner_id,
                subject: $path
            );
        }

        foreach( $query as $key => $value )
        {
            if (str_contains(haystack: $path, needle: '{' . $key . '}')) {
                $path = str_replace(
                     search: '{' . $key . '}',
                    replace: (string)$value,
                    subject: $path
                );
                unset( $query[ $key ] );
            }
        }

        return $path;
    }



/* AUTO FILL SOME BODY PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @param array<string, mixed> $body HTTP body content.
     * @return array<string, mixed> HTTP interpolated body content.
     */
    private function fillBody( array $body ) : array
    {
        if(
            array_key_exists( key: 'partnerId', array: $body ) AND
            ( $body['partnerId'] === '' OR $body['partnerId'] === null )
        ) {
            $body['partnerId'] = $this->config->partner_id;
        }

        if(
            array_key_exists( key: 'groupId', array: $body ) AND
            ( $body['groupId'] === '' OR $body['groupId'] === null )
        ) {
            $body['groupId'] = $this->config->group_id;
        }

        return $body;
    }



/* BUILD PLUME CLIENT RESPONSE OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param ResponseInterface $response Guzzle HTTP response object.
     * @return Response Plume client response object.
     */
    private static function buildResponse( ResponseInterface $response ): Response
    {
        $contents = $response->getBody()->getContents();

        return new Response(
            status:         $response->getStatusCode(),
            status_message: $response->getReasonPhrase(),
            headers:        $response->getHeaders(),
            body:           $contents !== ''
                                ? json_decode( json: $contents )
                                : null
        );
    }



/* PARSE ERROR RESPONSE
----------------------------------------------------------------------------- */

    /**
     * @param int $status HTTP status code.
     * @param mixed $body API response body.
     * @return never
     * @throws ApiException
     */
    private function parseError( int $status, mixed $body ): never
    {
        // @phpstan-ignore-next-line
        $message = $body?->error->message ?? 'Unknown API error';
        // @phpstan-ignore-next-line
        $code    = $body?->error->code ?? '';

        throw new ApiException(
               message: $message,
            statusCode: $status,
             plumeCode: $code,
        );
    }
}