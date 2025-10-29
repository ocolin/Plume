<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use stdClass;

class HTTP
{
    /**
     * @var string URL used to access Plume API.
     */
    public string $api_url;

    /**
     * @var string URL used for authorization of API.
     */
    public string $auth_url;

    /**
     * @var string Plume API Partner ID.
     */
    public string $partner_id;

    /**
     * @var string Plume API Group ID.
     */
    public string $group_id;

    /**
     * @var string Authentication header hash token.
     */
    public string $auth_hash;


    /**
     * @var Client HTTP Client for making HTTP Requests.
     */
    public Client $client;

    /**
     * @var array<string, string> Headers to send with requests.
     */
    public array $headers;

/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    /**
     * @param string|null $api_url URL endpoint of API.
     * @param string|null $auth_url URL of authentication endpoint.
     * @param string|null $partner_id API account Partner ID.
     * @param string|null $group_id API account Group ID.
     * @param string|null $auth_hash Authentication hash.
     * @throws Exception
     * @throws GuzzleException
     */
    public function __construct(
        ?string $api_url    = null,
        ?string $auth_url   = null,
        ?string $partner_id = null,
        ?string $group_id   = null,
        ?string $auth_hash  = null,
    )
    {
        $this->auth_url   = $auth_url   ?? $_ENV['PLUME_AUTH_URL'];
        $this->api_url    = $api_url    ?? $_ENV['PLUME_API_URL'];
        $this->partner_id = $partner_id ?? $_ENV['PLUME_PARTNER_ID'];
        $this->group_id   = $group_id   ?? $_ENV['PLUME_GROUP_ID'];
        $this->auth_hash  = $auth_hash  ?? $_ENV['PLUME_AUTH_HASH'];

        self::check_Token();

        $this->headers  = [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $_ENV['PLUME_TOKEN_CACHE']->access_token
        ];

        $this->client = new Client([
            'base_uri'      => $this->api_url,
            'verify'        => false,
            'http_errors'   => false,
            'headers'       => $this->headers
        ]);
    }



/* CALL API
----------------------------------------------------------------------------- */

    /**
     * @param string $path API endpoint URI path.
     * @param string $method HTTP method to use.
     * @param array<string, string> $query URI parameters.
     * @param array<string, mixed>|object $body Body parameters.
     * @return Response Response object.
     * @throws GuzzleException
     */
    public function call(
              string $path,
              string $method,
               array $query = [],
        array|object $body  = [],
    ) : Response
    {
        $path   = ltrim( string: $path, characters: '/' );
        $method = strtoupper( string: $method );

        switch( $method ) {
            case 'GET':
                $output = $this->read(
                    path: $path, method: 'GET',  query: $query
                );
                break;
            case 'POST':
                $output = $this->write(
                    path: $path, method: 'POST', query: $query, body: $body
                );
                break;
            case 'DELETE':
                $output = $this->read(
                    path: $path, method: 'DELETE',  query: $query
                );
                break;
            case 'PATCH':
                $output = $this->write(
                    path: $path, method: 'PATCH', query: $query, body: $body
                );
                break;
            case 'HEAD':
                $output = $this->read( path: $path, method: 'HEAD' );
                break;
            case 'PUT':
                $output = $this->write(
                    path: $path, method: 'PUT', query: $query, body: $body
                );
                break;
            default:
                return new Response(
                            status: 404,
                    status_message: "Method '$method' not found.",
                           headers: [],
                              body: new stdClass()
                );
        }

        return new Response(
                  status: $output->getStatusCode(),
          status_message: $output->getReasonPhrase(),
                 headers: $output->getHeaders(),
                    body: (object)json_decode( $output->getBody()->getContents())
        );
    }



/* API READ REQUEST
----------------------------------------------------------------------------- */

    /**
     * @param string $path API endpoint pth.
     * @param string $method HTTP method to use.
     * @param array<string, string> $query URI parameters.
     * @return ResponseInterface Response object.
     * @throws GuzzleException
     */
    public function read(
        string $path,
        string $method,
         array $query = []
    ) : ResponseInterface
    {
        return $this->client->request(
             method: $method,
                uri: $path,
            options: [ 'query' => $query ]
        );
    }



/* API WRITE REQUEST
----------------------------------------------------------------------------- */

    /**
     * @param string $path API endpoint path.
     * @param string $method HTTP method.
     * @param array<string, string> $query URI parameters.
     * @param array<string, mixed>|object $body Bpd parameters.
     * @return ResponseInterface Response object.
     * @throws GuzzleException
     */
    public function write(
              string $path,
              string $method,
               array $query = [],
        array|object $body = [],
    ) : ResponseInterface
    {
        $body = json_encode( $body );

        return $this->client->request(
             method: $method,
                uri: $path,
            options: [ 'query' => $query, 'body'  => $body ]
        );
    }



/* CHECK TOKEN
----------------------------------------------------------------------------- */

    /**
     * First check to see if Token is in Env and not expired.
     * Otherwise, load from file and see if token is expired
     * Otherwise, get a new Token from Plume
     *
     * @throws GuzzleException
     */
    public static function check_Token() : void
    {
        if(
            isset( $_ENV['PLUME_TOKEN_CACHE']) AND
            time() <= $_ENV['PLUME_TOKEN_CACHE']->expire_time
        )
        {  return; }

        self::get_Token_From_File();

        if( time() <= $_ENV['PLUME_TOKEN_CACHE']->expire_time ) {
            return;
        }

        self::get_Token();
    }



/* GET ACCESS TOKEN FROM CLOUD
----------------------------------------------------------------------------- */

    /**
     *  Get a new Bearer authentication token from the Plume cloud
     *
     * @throws GuzzleException
     * @throws Exception
     */
    public static function get_Token() : void
    {
        $scope =
            'partnerId:' . $_ENV['PLUME_PARTNER_ID'] . ' role:partnerIdAdmin';

        $body = http_build_query([
            'grant_type' => 'client_credentials',
            'scope'      => $scope
        ]);

        $client = new Client([
            'base_uri'    => $_ENV['PLUME_AUTH_URL'],
            'verify'      => false,
            'http_errors' => false,
            'headers'     => [
                'Cache-Control' => 'no-cache',
                'Authorization' => 'Basic ' . $_ENV['PLUME_AUTH_HASH'],
                'Content-Type'  => 'application/x-www-form-urlencoded; charset=utf-8'
            ],
            'body'  => $body
        ]);

        $request = $client->request( method: 'POST' );

        $data = (object)json_decode( json: $request->getBody()->getContents());
        $data->expire_time = time() + ( $data->expires_in - 10 );

        $_ENV['PLUME_TOKEN_CACHE'] = $data;
        self::write_Token_To_File(
            token: (string)json_encode(
                value: $data,
                flags: JSON_PRETTY_PRINT
            )
        );
    }



/* STORE AUTH TOKEN IN CACHE FILE
----------------------------------------------------------------------------- */

    /**
     * @param string|false $token Authentication token to store.
     * @return void
     */
    public static function write_Token_To_File( string|false $token ) : void
    {
        file_put_contents( filename: __DIR__ . '/.token.cache', data: $token );
    }



/* LOAD AUTH TOKEN FROM CACHE FILE
----------------------------------------------------------------------------- */

    /**
     * If no cache file exists, get token from Plume and store in cache file.
     * Otherwise, load auth token data from cache file.
     *
     * @throws GuzzleException
     */
    public static function get_Token_From_File() : void
    {
        $file = __DIR__ . '/.token.cache';
        if( !file_exists( filename: $file )) {
            self::get_Token();
            return;
        }

        $_ENV['PLUME_TOKEN_CACHE'] = json_decode(
            (string)file_get_contents( filename: __DIR__ . '/.token.cache' )
        );
    }
}