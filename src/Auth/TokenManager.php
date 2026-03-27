<?php
/**
 * Ask cache for token
 * ├── Cache returns null (no token yet)
 * │     └── fetch new token from auth server
 * │           └── store in cache
 * │                 └── return token
 * │
 * └── Cache returns a token string
 * └── decode JWT to get expiry
 * ├── still valid (exp - 30s > now)
 * │     └── return token as-is
 * │
 * └── expired or about to expire
 * └── fetch new token from auth server
 * └── store in cache
 * └── return token
 */


declare( strict_types = 1 );

namespace Ocolin\Plume\Auth;

use Ocolin\Plume\Config;
use GuzzleHttp\Client AS GuzzleClient;
use Ocolin\Plume\Exception\AuthException;
use GuzzleHttp\Exception\GuzzleException;

class TokenManager
{

    /**
     * @var GuzzleClient Guzzle client handler.
     */
    private GuzzleClient $http;


/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    public function __construct(
        readonly private Config $config,
        readonly private TokenCacheInterface $cache,
        ?GuzzleClient $http = null,
    ) {
        $this->http = $http ?? new GuzzleClient([ 'http_errors' => false ]);
    }



/* GET TOKEN
----------------------------------------------------------------------------- */

    /**
     * @return string Authentication token.
     * @throws AuthException
     * @throws GuzzleException
     */
    public function getToken(): string
    {
        $token = $this->cache->get();

        if( $token !== null && $this->isTokenValid( token: $token )) {
            return $token;
        }

        $token = $this->fetchToken();
        $this->cache->set( token: $token );
        return $token;
    }



/*
----------------------------------------------------------------------------- */

    /**
     * @return string Auth bearer string.
     * @throws AuthException
     * @throws GuzzleException
     */
    private function fetchToken() : string
    {
        $scope = 'partnerId:' . $this->config->partner_id . ' role:partnerIdAdmin';
        $body = http_build_query([
            'grant_type' => 'client_credentials',
            'scope'      => $scope
        ]);

        $request = $this->http->request(
             method: 'POST',
                uri: $this->config->auth_url,
            options: [
                'headers' => [
                    'Authorization' => 'Basic ' . $this->config->auth_hash,
                    'Content-Type'  => 'application/x-www-form-urlencoded; charset=utf-8',
                    'Cache-Control' => 'no-cache',
                ],
                'body' => $body,
            ]
        );

        $data = json_decode( json: $request->getBody()->getContents());

        // Check for auth server error response first
        if( is_object( $data ) && isset( $data->error )) {
            throw new AuthException(
                message: $data->error_description ?? $data->error
            );
        }

        // Then validate we got a usable token
        if(
            !is_object( $data ) OR
            !isset( $data->access_token ) OR
            !is_string( $data->access_token )
        ) {
            throw new AuthException(
                message: "Unable to get access token from server."
            );
        }

        return $data->access_token;
    }



/* IS TOKEN VALID CHECK
----------------------------------------------------------------------------- */

    /**
     * @param string $token Auth token to check.
     * @return bool Token is valid.
     */
    private function isTokenValid( string $token ): bool
    {
        $parts = explode( separator: '.', string: $token );
        if( count( $parts ) !== 3 ) { return false; }

        $payload = json_decode(
            json: base64_decode( string: $parts[1] ),
            associative: true
        );

        if(
            !is_array( $payload ) OR
            !isset( $payload['exp'] ) OR
            !is_numeric( $payload['exp'] )
        ) {
            return false;
        }

        return (int)$payload['exp'] - 30 > time();
    }
}

