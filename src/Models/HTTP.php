<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Plume\Models;

use Exception;
use GuzzleHttp\Client;
//use GuzzleHttp\ClientTrait;
use GuzzleHttp\Exception\GuzzleException;
use \Ocolin\Env\EasyEnv;

class HTTP
{

    private Client $client;

    private string $base_uri;

    private string $token;

    private array $headers = [];
/*
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     * @throws GuzzleException
     */
    public function __construct(
        ?Client $client   = null,
        ?string $base_uri = null,
        ?string $token    = null
    )
    {
        EasyEnv::loadEnv(
            path: __DIR__ . '/../../.env',
            silent: true,
            append: true
        );
        $this->base_uri = $base_uri ?? $_ENV['PLUME_API_URL'];
        $this->token = $token ?? self::get_Token();
        $this->headers  = [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $this->token
        ];
        $this->client   = $client ?? new Client([
            'base_uri'    => $this->base_uri,
            'verify'      => false,
            'http_errors' => false,
            'headers'     => $this->headers
        ]);
    }

/*
----------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    private static function get_Token() : string
    {
        $body = http_build_query([
            'grant_type' => 'client_credentials',
            'scope'      => $_ENV['PLUME_AUTH_SCOPE']
        ]);

        $client = new Client([
            'base_uri'    => $_ENV['PLUME_AUTH_URL'],
            'verify'      => false,
            'http_errors' => false,
            'headers'     => [
                'Cache-Control' => 'no-cache',
                'Authorization' => $_ENV['PLUME_HASH'],
                'Content-Type'  => 'application/x-www-form-urlencoded; charset=utf-8'
            ],
            'body'  => $body
        ]);

        $request = $client->request( 'POST' );
        $data = json_decode( $request->getBody()->getContents() );

        return $data->access_token;
    }
}