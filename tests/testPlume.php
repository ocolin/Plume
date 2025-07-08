<?php

declare( strict_types = 1 );

namespace Tests;

use Ocolin\Plume\Plume;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;

class testPlume extends TestCase
{
    public static Plume $plume;


/* TEST CREATE ACCOUNT - POST
----------------------------------------------------------------------------- */

    public function testCreate() : string
    {

        $response = self::$plume->post(
            path: '/Customers/registerWithGroups',
            body: [
                'email' => 'devnull@staff.cruzio.com',
                'accountId' => '777777',
                'name' => 'PHPUnit Test Create Account',
                'partnerId' => ''
            ]
        );

        $this->assertIsObject( actual: $response );
        $this->assertObjectHasProperty( propertyName: 'id', object: $response );
        $this->assertEquals( expected: '777777', actual: $response->accountId );

        return $response->id;
    }



/* TEST UPDATE ACCOUNT - PUT
----------------------------------------------------------------------------- */

    #[Depends('testCreate')]
    public function testPut( string $id ) : void
    {
        $response = self::$plume->put(
            path: '/Customers/{id}',
            query: [ 'id' => $id ],
            body: [ 'name' => 'PHPUnit Test Put' ]
        );

        $this->assertIsObject( actual: $response );
        $this->assertObjectHasProperty( propertyName: 'id', object: $response );
        $this->assertEquals( expected: '777777', actual: $response->accountId );
        $this->assertEquals( expected: 'PHPUnit Test Put', actual: $response->name );
    }


/* TEST UPDATE ACCOUNT - PATCH
----------------------------------------------------------------------------- */

    #[Depends('testCreate')]
    public function testPatch( string $id ) : void
    {
        $response = self::$plume->patch(
            path: '/Customers/{id}',
            query: [ 'id' => $id ],
            body: [ 'name' => 'PHPUnit Test Patch' ]
        );

        $this->assertIsObject( actual: $response );
        $this->assertObjectHasProperty( propertyName: 'id', object: $response );
        $this->assertEquals( expected: '777777', actual: $response->accountId );
        $this->assertEquals( expected: 'PHPUnit Test Patch', actual: $response->name );
    }



/* TEST DELETE ACCOUNT - DELETE
----------------------------------------------------------------------------- */

    #[Depends('testCreate')]
    public function testDelete( string $id ) : void
    {
        $response = self::$plume->delete(
             path: '/Customers/{id}',
            query: [ 'id' => $id ]
        );

        $this->assertIsObject( actual: $response );
        $this->assertObjectHasProperty( propertyName: 'count', object: $response );
        $this->assertEquals( expected: 1, actual: $response->count );
    }



/* SET UP PLUME CLIENT BEFORE TESTING
----------------------------------------------------------------------------- */

    public static function setUpBeforeClass(): void
    {
        self::$plume = new Plume( local: true );
    }
}