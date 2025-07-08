<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Ocolin\EasyEnv\LoadEnv;

class Plume
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
     * @var HTTP HTTP handler for API calls.
     */
    public HTTP $http;

    /**
     * @var string URI path sent to API server.
     */
    public string $path;

    /**
     * @var array<string, string> Array of parameters in URI.
     */
    public array $query = [];

    /**
     * @var array<string, mixed>|object Body of object being sent.
     */
    public array|object $body = [];

/*
----------------------------------------------------------------------------- */

    /**
     * @param string|null $api_url
     * @param string|null $auth_url
     * @param string|null $partner_id
     * @param string|null $group_id
     * @param string|null $auth_hash
     * @param bool $local
     * @throws Exception
     * @throws GuzzleException
     */
    public function __construct(
        ?string $api_url    = null,
        ?string $auth_url   = null,
        ?string $partner_id = null,
        ?string $group_id   = null,
        ?string $auth_hash  = null,
           bool $local      = false,
    )
    {
        if( $local === true ) {
            new LoadEnv( files: __DIR__ . '/../.env', append: true );
        }

        $this->api_url    = $api_url    ?? $_ENV['PLUME_API_URL'];
        $this->auth_url   = $auth_url   ?? $_ENV['PLUME_AUTH_URL'];
        $this->partner_id = $partner_id ?? $_ENV['PLUME_PARTNER_ID'];
        $this->group_id   = $group_id   ?? $_ENV['PLUME_GROUP_ID'];
        $this->auth_hash  = $auth_hash  ?? $_ENV['PLUME_AUTH_HASH'];

        $this->http = new HTTP(
               api_url: $this->api_url,
              auth_url: $this->auth_url,
            partner_id: $this->partner_id,
              group_id: $this->group_id,
             auth_hash: $this->auth_hash,
        );
    }



/*
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param string $method
     * @param array<string, string> $query
     * @param array<string, mixed>|object $body
     * @return Response
     * @throws GuzzleException
     */
    public function call(
              string $path,
              string $method = 'GET',
               array $query  = [],
        array|object $body   = [],
    ) : Response
    {
        $this->path   = $path;
        $this->query  = $query;
        $this->body   = $body;

        $this->insert_Path_Params();
        $this->insert_Body_Params();

        return $this->http->call(
              path: $this->path,
            method: $method,
             query: $this->query,
              body: $this->body,
        );
    }


/* GET
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param array<string, string> $query
     * @return object
     * @throws GuzzleException
     */
    public function get(
        string $path,
         array $query = []
    ) : object
    {
        $output = $this->call( path: $path, query: $query );

        return $output->body;
    }



/* POST
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param array<string, string> $query
     * @param array<string, mixed>|object $body
     * @return object
     * @throws GuzzleException
     */
    public function post(
              string $path,
               array $query = [],
        array|object $body  = [],
    ) : object
    {
        $output = $this->call(
              path: $path, method: 'POST', query: $query, body: $body
        );

        return $output->body;
    }


/* PATCH
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param array<string, string> $query
     * @param array<string, mixed>|object $body
     * @return object
     * @throws GuzzleException
     */
    public function patch(
              string $path, array $query = [], array|object $body  = []
    ) : object
    {
        $output = $this->call(
              path: $path,
            method: 'PATCH',
             query: $query,
              body: $body,
        );

        return $output->body;
    }



/* PUT
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param array<string, string> $query
     * @param array<string, mixed>|object $body
     * @return object
     * @throws GuzzleException
     */
    public function put(
              string $path, array $query = [], array|object $body  = [],
    ) : object
    {
        $output = $this->call(
              path: $path,
            method: 'PUT',
             query: $query,
              body: $body,
        );

        return $output->body;
    }



/* DELETE
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @param array<string, string> $query
     * @return object
     * @throws GuzzleException
     */
    public function delete( string $path, array $query = [] ) : object
    {
        $output = $this->call(
            path: $path, method: 'DELETE', query: $query
        );

        return $output->body;
    }


/* HEAD
----------------------------------------------------------------------------- */

    /**
     * @param string $path
     * @return object
     * @throws GuzzleException
     */
    public function head( string $path ) : object
    {
        $output = $this->call( path: $path, method: 'HEAD' );

        return $output->body;
    }



/*
----------------------------------------------------------------------------- */

    private function insert_Path_Params() : void
    {
        if( !str_contains( haystack: $this->path, needle: '{' )) {
            return;
        }

        $this->path = str_replace(
             search: '{groupId}',
            replace: $this->group_id,
            subject: $this->path
        );
        $this->path = str_replace(
             search: '{partnerId}',
            replace: $this->partner_id,
            subject: $this->path
        );

        if( $this->query ) {
            foreach ($this->query as $key => $value) {
                if (str_contains(haystack: $this->path, needle: '{' . $key . '}')) {
                    $this->path = str_replace(
                         search: '{' . $key . '}',
                        replace: $value,
                        subject: $this->path
                    );
                    unset($this->query[$key]);
                }
            }
        }
    }


/*
----------------------------------------------------------------------------- */

    private function insert_Body_Params() : void
    {
        if( is_array( $this->body )) {
            if( array_key_exists( key: 'partnerId', array: $this->body ) ) {
                $this->body['partnerId'] = $_ENV['PLUME_PARTNER_ID'];
            }

            if( array_key_exists( key: 'groupId', array: $this->body ) ) {
                $this->body['groupId'] = $_ENV['PLUME_GROUP_ID'];
            }

            return;
        }

        if( property_exists(
            object_or_class: $this->body, property: 'partnerId'
        )) {
            $this->body->partnerId = $_ENV['PLUME_PARTNER_ID'];
        }

        if( property_exists(
            object_or_class: $this->body, property: 'groupId'
        )) {
            $this->body->groupId = $_ENV['PLUME_GROUP_ID'];
        }
    }
}