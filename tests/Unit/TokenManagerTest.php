<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Tests\Unit;

use GuzzleHttp\Exception\GuzzleException;
use Ocolin\Plume\Auth\TokenCacheInterface;
use GuzzleHttp\Client;
use Ocolin\Plume\Auth\TokenManager;
use Ocolin\Plume\Config;
use Ocolin\Plume\Exception\AuthException;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class TokenManagerTest extends TestCase
{

    private TokenCacheInterface $cache;
    private Client              $guzzle;
    private Config              $config;


/* TEST THAT TOKEN IS VALID
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_returns_cached_token_when_valid() : void
    {
        $payload = base64_encode( json_encode([ 'exp' => time() + 3600 ]));
        $token = 'header.' . $payload . '.signature';

        $this->cache
            ->method( 'get' )
            ->willReturn( $token );

        $manager = new TokenManager(
            config: $this->config,
             cache: $this->cache,
              http: $this->guzzle
        );

        $this->assertSame( $token, $manager->getToken() );
    }


/* TEST THAT NEW TOKEN IS FETCHED WHEN CACHE EMPTY
----------------------------------------------------------------------------- */

    public function test_fetches_new_token_when_cache_empty() : void
    {
        $response = $this->createStub( ResponseInterface::class );
        $stream   = $this->createStub( StreamInterface::class );

        $stream->method( 'getContents' )->willReturn( json_encode([
            'access_token' => 'new_token',
            'expires_in'   => 600,
            'token_type'   => 'Bearer'
        ]));

        $response->method( 'getBody' )->willReturn( $stream );
        $this->guzzle->method( 'request' )->willReturn( $response );
        $this->cache->method( 'get' )->willReturn( null );

        $manager = new TokenManager(
            config: $this->config,
             cache: $this->cache,
              http: $this->guzzle
        );

        $this->assertSame( 'new_token', $manager->getToken() );
    }


/* TEST NEW TOKEN FETCHED WHEN EXPIRED
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_fetches_new_token_when_token_expired() : void
    {
        $payload = base64_encode( json_encode([ 'exp' => time() - 3600 ]));
        $expiredToken = 'header.' . $payload . '.signature';

        $this->cache
            ->method( 'get' )
            ->willReturn( $expiredToken );

        $stream = $this->createStub( StreamInterface::class );
        $stream->method( 'getContents')->willReturn( json_encode([
            'access_token' => 'new_token',
            'expires_in'   => 600,
            'token_type'   => 'Bearer'
        ]));

        $response = $this->createStub( ResponseInterface::class );
        $response->method( 'getBody')->willReturn( $stream );

        $this->guzzle->method( 'request')->willReturn( $response );

        $manager = new TokenManager(
            config: $this->config,
             cache: $this->cache,
              http: $this->guzzle
        );

        $this->assertSame( 'new_token', $manager->getToken() );
    }


/* TEST NEW TOKEN STORED IN CACHE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_stores_new_token_in_cache() : void
    {
        $cache = $this->createMock( TokenCacheInterface::class );
        $cache->method( 'get' )->willReturn( null );

        $cache->expects( $this->once() )
            ->method( 'set' )
            ->with( 'new_token' );

        $stream = $this->createStub( StreamInterface::class );
        $stream->method( 'getContents')->willReturn( json_encode([
            'access_token' => 'new_token',
            'expires_in'   => 600,
            'token_type'   => 'Bearer'
        ]));

        $response = $this->createStub( ResponseInterface::class );
        $response->method( 'getBody')->willReturn( $stream );

        $this->guzzle->method( 'request')->willReturn( $response );

        $manager = new TokenManager(
            config: $this->config,
             cache: $cache,
              http: $this->guzzle
        );

        $this->assertSame( 'new_token', $manager->getToken() );
    }


/* TEST THAT ERROR IS THROWN IN ERROR RESPONSE FROM SERVER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws AuthException
     * @throws GuzzleException
     * @throws Exception
     */
    public function test_throws_auth_exception_on_error_response() : void
    {
        $this->cache->method( 'get' )->willReturn( null );

        $stream = $this->createStub( StreamInterface::class );
        $stream->method( 'getContents' )->willReturn( json_encode([
            'error'             => 'invalid_client',
            'error_description' => 'No client credentials found.'
        ]));

        $response = $this->createStub( ResponseInterface::class );
        $response->method( 'getBody' )->willReturn( $stream );

        $this->guzzle->method( 'request' )->willReturn( $response );

        $manager = new TokenManager(
            config: $this->config,
             cache: $this->cache,
              http: $this->guzzle
        );

        $this->expectException( AuthException::class );
        $this->expectExceptionMessage( 'No client credentials found.' );

        $manager->getToken();
    }


/* TEST EXCEPTION ON INVALID AUTH RESPONSE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_throws_auth_exception_on_invalid_response()
    : void
    {
        $this->cache->method(  'get' )->willReturn( null );

        $stream = $this->createStub( StreamInterface::class );
        $stream->method( 'getContents' )->willReturn( 'not json at all' );

        $response = $this->createStub( ResponseInterface::class );
        $response->method( 'getBody' )->willReturn( $stream );

        $manager = new TokenManager(
            config: $this->config,
             cache: $this->cache,
              http: $this->guzzle
        );

        $this->expectException( AuthException::class );
        $this->expectExceptionMessage( 'Unable to get access token from server.' );

        $manager->getToken();
    }


/* SETUP
----------------------------------------------------------------------------- */

    protected function setUp(): void
    {
        $this->cache  = $this->createStub( TokenCacheInterface::class );
        $this->guzzle = $this->createStub( Client::class );
        $this->config = new Config(
               api_url: 'https://api.example.com',
              auth_url: 'https://auth.example.com',
             auth_hash: 'testhash',
            partner_id: 'testpartner',
              group_id: 'testgroup'
        );
    }
}