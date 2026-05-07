<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

use Ocolin\GlobalType\ENV;
use Ocolin\Plume\Exception\ConfigException;

readonly class Config
{
    /**
     * @var string The URL to the Plume API server.
     */
    public string $api_url;

    /**
     * @var string The URL to the Plume Auth server.
     */
    public string $auth_url;

    /**
     * @var string Plume Authentication has that encodes user information.
     */
    public string $auth_hash;

    /**
     * @var string Plume Partner ID to identify which Plume partner you are.
     */
    public string $partner_id;

    /**
     * @var string Plume Group ID to identify which group your partnership is in.
     */
    public  string $group_id;


/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    /**
     * @param ?string $api_url URL to API server.
     * @param ?string $auth_url URL to Authentication server.
     * @param ?string $auth_hash Authentication hash.
     * @param ?string $partner_id Partner ID.
     * @param ?string $group_id Group ID.
     * @throws ConfigException Error configurint settings.
     */
    public function __construct(
        ?string $api_url    = null,
        ?string $auth_url   = null,
        ?string $auth_hash  = null,
        ?string $partner_id = null,
        ?string $group_id   = null,
    )
    {
        $this->api_url = self::resolve(
                   value: $api_url,
                  envKey: 'PLUME_API_URL',
            errorMessage: 'Missing Plume API URL'
        );

        $this->auth_url = self::resolve(
                   value: $auth_url,
                  envKey: 'PLUME_AUTH_URL',
            errorMessage: 'Missing Plume Auth URL'
        );

        $this->auth_hash = self::resolve(
                   value: $auth_hash,
                  envKey: 'PLUME_AUTH_HASH',
            errorMessage: 'Missing Plume Auth Hash'
        );

        $this->partner_id = self::resolve(
                   value: $partner_id,
                  envKey: 'PLUME_PARTNER_ID',
            errorMessage: 'Missing Plume Partner ID'
        );

        $this->group_id = self::resolve(
                   value: $group_id,
                  envKey: 'PLUME_GROUP_ID',
            errorMessage: 'Missing Plume Group ID'
        );
    }



/* RESOLVE CONFIG VARIABLE
----------------------------------------------------------------------------- */

    /**
     * @param ?string $value Name of config value.
     * @param string $envKey Name of Environment variable.
     * @param string $errorMessage Error message if missing.
     * @return string Variable value.
     * @throws ConfigException Error configuring settings.
     */
    private static function resolve(
        ?string $value,
         string $envKey,
         string $errorMessage
    ) : string
    {
        return ( $value !== null && $value !== '' )
            ? $value
            : ( ENV::getStringNull( name: $envKey )
                ?? throw new ConfigException( message: $errorMessage ));
    }
}