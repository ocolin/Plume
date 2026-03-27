<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Tests\Integration;

use GuzzleHttp\Exception\GuzzleException;
use Ocolin\Plume\Exception\ApiException;
use Ocolin\Plume\Exception\AuthException;
use Ocolin\Plume\Plume;
use Ocolin\Plume\Response;
use PHPUnit\Framework\TestCase;

class PlumeTest extends TestCase
{
    private static ?string $customerId;

    private static Response $response;

    private static Plume $plume;


/* TEST CREATE CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_create_customer_good() : void
    {
        self::createCustomer();
        $this->assertObjectHasProperty( 'body', self::$response );
        $this->assertIsObject( self::$response->body );
        $this->assertObjectHasProperty( 'accountId', self::$response->body );
        $this->assertSame( 'PHPUnitTestCustomer', self::$response->body->accountId );
        $this->assertObjectHasProperty( 'id', self::$response->body );
        $this->assertSame( self::$customerId, self::$response->body->id );
    }


/* TEST PATCH CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_patch_customer_good() : void
    {
        $output = self::$plume->patch(
            endpoint: '/Customers/{id}',
                body: [ 'name' => 'PHPUnit Patch Update' ],
               query: [ 'id' => self::$customerId ],
        );
        $this->assertObjectHasProperty( 'body', $output );
        $this->assertIsObject( $output->body );
        $this->assertObjectHasProperty( 'name', $output->body );
        $this->assertSame( 'PHPUnit Patch Update', $output->body->name );
    }



/* TEST PUT CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_put_customer_good() : void
    {
        $output = self::$plume->put(
            endpoint: '/Customers/{id}',
            body: [ 'name' => 'PHPUnit Put Update' ],
            query: [ 'id' => self::$customerId ],
        );
        $this->assertObjectHasProperty( 'body', $output );
        $this->assertIsObject( $output->body );
        $this->assertObjectHasProperty( 'name', $output->body );
        $this->assertSame( 'PHPUnit Put Update', $output->body->name );
    }



/* GET GET CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_get_customer_good() : void
    {
        $output = self::$plume->get(
            endpoint: '/Customers/{id}', query: [ 'id' => self::$customerId ],
        );
        $this->assertObjectHasProperty( 'body', $output );
        $this->assertIsObject( $output->body );
        $this->assertObjectHasProperty( 'id', $output->body );
        $this->assertSame( self::$customerId, $output->body->id );
    }


/* TEST DELETING CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public function test_delete_customer_good() : void
    {
        $output = self::deleteCustomer( id: self::$customerId );
        $this->assertObjectHasProperty( 'body', $output );
        $this->assertIsObject( $output->body );
        $this->assertObjectHasProperty( 'count', $output->body );
        $this->assertSame( 1, $output->body->count );
    }


/* SETUP
----------------------------------------------------------------------------- */

    public static function setUpBeforeClass(): void
    {
        self::$plume = new Plume();
    }


/* TEAR DOWN
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    public static function tearDownAfterClass(): void
    {
        if( self::$customerId !== null ) {
            self::deleteCustomer( self::$customerId );
        }

        self::$customerId = null;
    }


/* CREATE NEW CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws ApiException
     * @throws AuthException
     * @throws GuzzleException
     */
    private static function createCustomer() : void
    {
        self::$response = self::$plume->post(
            endpoint: '/Customers/registerWithGroups',
            body: [
                'accountId' => 'PHPUnitTestCustomer',
                'name'      => 'PHPUnit Test Customer',
                'email'     => 'phpunittesting@cruzio.com',
                'partnerId' => ''
            ]
        );
        self::$customerId = self::$response->body->id;
    }


/* DELETE CUSTOMER
----------------------------------------------------------------------------- */

    /**
     * @param string $id
     * @return Response
     * @throws GuzzleException
     * @throws ApiException
     * @throws AuthException
     */
    private static function deleteCustomer( string $id ) : Response
    {
        return self::$plume->delete(
            endpoint: '/Customers/{id}',
            query: [ 'id' => $id ]
        );
    }
}
