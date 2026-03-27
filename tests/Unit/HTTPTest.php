<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Tests\Unit;

use GuzzleHttp\Exception\GuzzleException;
use Ocolin\Plume\Auth\TokenManager;
use Ocolin\Plume\Config;
use Ocolin\Plume\Exception\ApiException;
use Ocolin\Plume\Exception\AuthException;
use Ocolin\Plume\HTTP;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client AS GuzzleClient;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class HTTPTest extends TestCase
{
    private TokenManager $tokenManager;

    private Config              $config;


/* TEST THAT GET REQUEST RETURNS A RESPONSE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws GuzzleException
     * @throws AuthException
     * @throws Exception
     */
    public function test_get_request_returns_response() : void
    {
        $guzzle = $this->createStub( GuzzleClient::class );
        $guzzle->method( 'request')->willReturn(
            $this->buildResponse( 200, '{"id":"123"}' )
        );

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle
        );

        $response = $http->request( '/api/customers' );
        $this->assertSame( 200, $response->status );
        $this->assertSame( '123', $response->body->id );
    }



/* TEST THAT POST REQUEST SENDS BODY
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_post_request_sends_body() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );

        $guzzle->expects( $this->once() )
            ->method( 'request')
            ->with(
                'POST',        // first arg - method
                'api/customers',          // second arg - path
                $this->callback( function( array $options ) {
                    return isset( $options['json'] ) AND
                        $options['json']['email'] === 'test@example.com';
                })
            )
            ->willReturn( $this->buildResponse() );

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle
        );

        $http->request(
              path: '/api/customers',
            method: 'POST',
              body: [ 'email' => 'test@example.com' ],
        );
    }


/* TEST THAT PATH VARIABLES ARE SUBSTITUTED
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_path_variables_are_substituted() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );

        $guzzle->expects( $this->once() )
            ->method( 'request')
            ->with(
                'GET',
                'api/customers/abc123',
                $this->anything()
            )
            ->willReturn( $this->buildResponse());

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle
        );

        $http->request(
             path: '/api/customers/{id}',
            query: [ 'id' => 'abc123' ]
        );
    }


/* TEST THAT PARTNER ID IS FILLED IN BODY
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_partner_id_auto_filled_in_body() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );

        $guzzle->expects( $this->once() )
            ->method( 'request')
            ->with(
                'POST',
                'api/customers',
                $this->callback( function( array $options ) {
                    return isset( $options['json']['partnerId'] ) AND
                        $options['json']['partnerId'] === 'testpartner';
                })
            )
            ->willReturn( $this->buildResponse() );

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle
        );

        $http->request(
              path: '/api/customers',
            method: 'POST',
              body: [
                'email'     => 'test@example.com',
                'partnerId' => ''   // empty - should get filled
            ]
        );
    }


/* TEST THAT GROUP ID IS AUTO-FILLED IN BODY
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_group_id_auto_filled_in_body() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );

        $guzzle->expects( $this->once() )
            ->method( 'request')
            ->with(
                'POST',
                'api/customers',
                $this->callback( function( array $options ) {
                    return isset( $options['json']['groupId'] ) AND
                        $options['json']['groupId'] === 'testgroup';
                })
            )
            ->willReturn( $this->buildResponse());

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle
        );

        $http->request(
              path: '/api/customers',
            method: 'POST',
              body: [
                'email'     => 'test@example.com',
                'groupId' => ''   // empty - should get filled
            ]
        );
    }



/* TEST THAT API THROWS AN EXCEPTION WHEN EXCEPTION ENABLED
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_throws_api_exception_when_throw_on_error_true() : void
    {
        $this->expectException( ApiException::class );
        $this->expectExceptionMessage( 'Something went wrong' );

        $guzzle = $this->createMock( GuzzleClient::class );
        $response = $this->buildResponse(
            status: 422,
              body:   json_encode([
                'error' => [
                    'status'     => 422,
                    'statusCode' => 422,
                    'message'    => 'Something went wrong',
                    'code'       => 'CUS00001'
                ]
            ])
        );

        $guzzle->expects( $this->once() )
            ->method( 'request' )
            ->willReturn( $response );

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle,
            throwOnError: true
        );

        $http->request(
              path: '/api/customers',
            method: 'POST',
              body: [
                'email'     => 'test@example.com',
                'groupId' => ''   // empty - should get filled
            ]
        );
    }


/* TEST THAT ERROR NOT THROWN WHEN UNSET
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_does_not_throw_when_throw_on_error_false() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );
        $response = $this->buildResponse(
            status: 422,
              body:   json_encode([
                'error' => [
                    'status'     => 422,
                    'statusCode' => 422,
                    'message'    => 'Something went wrong',
                    'code'       => 'CUS00001'
                ]
            ])
        );

        $guzzle->expects( $this->once() )
            ->method( 'request' )
            ->willReturn( $response );

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle,
            throwOnError: false
        );

        $response = $http->request( '/api/customers' );
        $this->assertSame( 422, $response->status );
    }


/* TEST FORM DATA SETTING USES CORRECT SETTING
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws Exception
     * @throws GuzzleException
     */
    public function test_form_data_sets_correct_content_type() : void
    {
        $guzzle = $this->createMock( GuzzleClient::class );
        $guzzle->expects( $this->once() )
            ->method( 'request')
            ->with(
                'POST',
                'api/customers',
                $this->callback( function( array $options ) {
                    return isset( $options['headers']['Content-Type'] ) AND
                    $options['headers']['Content-Type']
                        === 'application/x-www-form-urlencoded' AND
                    isset( $options['body'] ) AND
                    !isset( $options['json'] );
                })
            )
            ->willReturn( $this->buildResponse());

        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
            guzzleClient: $guzzle,
            throwOnError: false
        );

        $http->request(
                path: '/api/customers',
              method: 'POST',
                body: [ 'email' => 'test@example.com' ],
            formData: true
        );
    }


/* TEST THAT API THROWS ERROR ON INVALID METHOD
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_throws_on_invalid_method(): void
    {
        $http = new HTTP(
                  config: $this->config,
            tokenManager: $this->tokenManager,
        );

        $this->expectException( ApiException::class );
        $this->expectExceptionMessage( 'Invalid HTTP method: INVALID' );

        $http->request( path: '/api/customers', method: 'INVALID' );
    }


/* SETUP
----------------------------------------------------------------------------- */

    protected function setUp(): void
    {
        $this->config = new Config(
               api_url: 'https://api.example.com/',
              auth_url: 'https://auth.example.com/',
             auth_hash: 'testhash',
            partner_id: 'testpartner',
              group_id: 'testgroup'
        );

        $this->tokenManager = $this->createStub( TokenManager::class );
        $this->tokenManager->method( 'getToken')->willReturn( 'fake_token');
    }



/* HELPER - BUILD MOCK RESPONSE
----------------------------------------------------------------------------- */

    /**
     * @param int $status
     * @param string $body
     * @return ResponseInterface
     * @throws Exception
     */
    private function buildResponse(
        int    $status  = 200,
        string $body    = '{}',
    ): ResponseInterface
    {
        $stream = $this->createStub( StreamInterface::class );
        $stream->method( 'getContents')->willReturn( $body );

        $response = $this->createStub( ResponseInterface::class );
        $response->method( 'getBody')->willReturn( $stream );
        $response->method( 'getStatusCode')->willReturn( $status );
        $response->method( 'getReasonPhrase')->willReturn( 'OK' );
        $response->method( 'getHeaders')->willReturn( [] );

        return $response;
    }
}