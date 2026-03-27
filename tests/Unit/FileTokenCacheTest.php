<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Tests\Unit;

use Ocolin\Plume\Auth\FileTokenCache;
use Ocolin\Plume\Exception\CacheException;
use PHPUnit\Framework\TestCase;

class FileTokenCacheTest extends TestCase
{
    /**
     * @var string cache file path.
     */
    private string $path;


/* TEST THAT NULL IS RETURNED FOR NO EXISTING FILE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws CacheException
     */
    public function test_get_returns_null_when_file_does_not_exist() : void
    {
        $cache = new FileTokenCache( path: $this->path );

        $this->assertNull( $cache->get() );
    }


/* TEST THAT SET FUNCTION WRITES TO FILE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws CacheException
     */
    public function test_set_writes_token_to_file() : void
    {
        $cache = new FileTokenCache( path: $this->path );
        $cache->set( token: 'test_token' );

        $this->assertFileExists( $this->path );
        $this->assertSame( 'test_token', file_get_contents( $this->path ));
    }


/* TEST THAT TOKEN CAN BE RETURNED AFTER BEING SET
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws CacheException
     */
    public function test_get_returns_token_after_set() : void
    {
        $cache = new FileTokenCache( path: $this->path );
        $cache->set( token: 'test_token' );

        $this->assertSame( 'test_token', $cache->get() );
    }


/* TEST THAT CLEAR FUNCTION REMOVED CACHE FILE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws CacheException
     */
    public function test_clear_removes_cache_file() : void
    {
        $cache = new FileTokenCache( path: $this->path );
        $cache->set( token: 'test_token' );
        $cache->clear();

        $this->assertFileDoesNotExist( $this->path );
    }


/* TEST THAT CLEAR FUNCTION DOES NOT THROW ERROR IF THERE IS NO FILE
----------------------------------------------------------------------------- */

    /**
     * @return void
     * @throws CacheException
     */
    public function test_clear_does_not_throw_when_file_does_not_exist() : void
    {
        $cache = new FileTokenCache( path: $this->path );

        // no set() call - file doesn't exist
        // should complete without throwing
        $cache->clear();

        $this->expectNotToPerformAssertions();
    }


/* TEST THAT ERROR IS THROWN IF DIRECTORY DOES NOT EXIST.
----------------------------------------------------------------------------- */

    public function test_throws_when_directory_not_writable() : void
    {
        $this->expectException( CacheException::class );

        new FileTokenCache( path: '/nonexistent_directory/token.cache' );
    }


/* SETUP TEST
----------------------------------------------------------------------------- */

    protected function setUp(): void
    {
        $this->path = sys_get_temp_dir() . '/plume_test_token.cache';
    }

/* TEAR DOWN TEST
----------------------------------------------------------------------------- */

    protected function tearDown(): void
    {
        if( file_exists( $this->path )) { unlink( $this->path ); }
    }
}