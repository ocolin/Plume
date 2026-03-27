<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Tests\Unit;

use Ocolin\Plume\Config;
use Ocolin\Plume\Exception\ConfigException;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /**
     * @var array<string, mixed>
     */
    private array $backup = [];

// HAPPY

/* TEST THAT EXPLICIT VALUES ARE STORED
----------------------------------------------------------------------------- */

    public function test_explicit_values_are_stored(): void
    {
        $config = new Config(
               api_url: 'https://api.example.com',
              auth_url: 'https://auth.example.com',
             auth_hash: 'testhash',
            partner_id: 'testpartner',
              group_id: 'testgroup'
        );

        $this->assertSame( 'https://api.example.com', $config->api_url );
        $this->assertSame( 'https://auth.example.com', $config->auth_url );
        $this->assertSame( 'testhash', $config->auth_hash );
        $this->assertSame( 'testpartner', $config->partner_id );
        $this->assertSame( 'testgroup', $config->group_id );
    }


/* TEST THAT ENVIRONMENT VARIABLES ARE USED AS FALLBACK
----------------------------------------------------------------------------- */

    public function test_env_values_are_used_as_fallback(): void
    {
        $config = new Config();

        $this->assertSame( $_ENV['PLUME_API_URL'],    $config->api_url );
        $this->assertSame( $_ENV['PLUME_AUTH_URL'],   $config->auth_url );
        $this->assertSame( $_ENV['PLUME_AUTH_HASH'],  $config->auth_hash );
        $this->assertSame( $_ENV['PLUME_PARTNER_ID'], $config->partner_id );
        $this->assertSame( $_ENV['PLUME_GROUP_ID'],   $config->group_id );
    }

/* TEXT MIXING OF EXPLICIT AND ENVIRONMENT VARIABLES
----------------------------------------------------------------------------- */

    public function test_mix_of_explicit_and_env_values(): void
    {
        $config = new Config( api_url: '' );

        $this->assertSame( $_ENV['PLUME_API_URL'], $config->api_url );
    }


// EXCEPTIONS

/* THROW WHEN API URL IS MISSING
----------------------------------------------------------------------------- */

    public function test_throws_when_api_url_missing(): void
    {
        unset( $_ENV['PLUME_API_URL'] );
        $this->expectException( ConfigException::class );

        new Config( api_url: '' );
    }


/* THROW WHEN AUTH_URL IS MISSING
----------------------------------------------------------------------------- */

    public function test_throws_when_auth_url_missing(): void
    {
        unset( $_ENV['PLUME_AUTH_URL'] );
        $this->expectException( ConfigException::class );

        new Config( auth_url: '' );
    }


/* THROW WHEN AUTH_HASH IS MISSING
----------------------------------------------------------------------------- */

    public function test_throws_when_auth_hash_missing(): void
    {
        unset( $_ENV['PLUME_AUTH_HASH'] );
        $this->expectException( ConfigException::class );

        new Config( auth_hash: '' );
    }


/* THROW WHEN PARTNER_ID IS MISSING
----------------------------------------------------------------------------- */

    public function test_throws_when_partner_id_missing(): void
    {
        unset( $_ENV['PLUME_PARTNER_ID'] );
        $this->expectException( ConfigException::class );

        new Config( partner_id: '' );
    }


/* THROW WHEN GROUP_ID IS MISSING
----------------------------------------------------------------------------- */

    public function test_throws_when_group_id_missing(): void
    {
        unset( $_ENV['PLUME_GROUP_ID'] );
        $this->expectException( ConfigException::class );

        new Config( group_id: '' );
    }

// EMPTY STRING

/* TEST WHEN EMPTY STRING FAILS BOTH IMPLICIT AND ENVIRONMENT
----------------------------------------------------------------------------- */

    public function test_empty_string_falls_through_to_env(): void
    {
        $config = new Config( api_url: '' );

        $this->assertSame( $_ENV['PLUME_API_URL'], $config->api_url );
    }


/* TEST THROW WHEN BOTH STRING AND ENVIRONMENT ARE MISSING
----------------------------------------------------------------------------- */

    public function test_empty_string_throws_when_env_also_missing(): void
    {
        unset( $_ENV['PLUME_API_URL'] );
        $this->expectException( ConfigException::class );

        new Config( api_url: '' );
    }


/* SETUP TEST
----------------------------------------------------------------------------- */

    protected function setUp(): void
    {
        // backup current env values
        $this->backup = [
            'PLUME_AUTH_URL'   => $_ENV['PLUME_AUTH_URL']   ?? null,
            'PLUME_AUTH_HASH'  => $_ENV['PLUME_AUTH_HASH']  ?? null,
            'PLUME_AUTH_SCOPE' => $_ENV['PLUME_AUTH_SCOPE'] ?? null,
            'PLUME_PARTNER_ID' => $_ENV['PLUME_PARTNER_ID'] ?? null,
            'PLUME_GROUP_ID'   => $_ENV['PLUME_GROUP_ID']   ?? null,
            'PLUME_API_URL'    => $_ENV['PLUME_API_URL']    ?? null,
        ];
    }


/* TEAR DOWN TEST
----------------------------------------------------------------------------- */

    protected function tearDown(): void
    {
        // restore env values after each test
        foreach( $this->backup as $key => $value ) {
            if( $value === null ) { unset( $_ENV[$key] ); }
            else {  $_ENV[$key] = $value; }
        }
    }

}