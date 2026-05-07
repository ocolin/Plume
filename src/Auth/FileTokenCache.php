<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Auth;

use Ocolin\Plume\Exception\CacheException;

class FileTokenCache implements TokenCacheInterface
{
    /**
     * @var string Path to token.
     */
    private string $path;

/* CONSTRUCTOR
----------------------------------------------------------------------------- */

    /**
     * @param string $path Path to token file.
     * @throws CacheException Error caching token.
     */
    public function __construct( string $path = '' )
    {
        $this->path = $path !== ''
            ? $path
            : sys_get_temp_dir() . '/.plume_token.cache';

        $check = file_exists( filename: $this->path )
            ? $this->path
            : dirname( path: $this->path );

        if( !is_writable( filename: $check )) {
            throw new CacheException(
                message: "Unable to write to cache file: {$this->path}."
            );
        }
    }



/* GET TOKEN
----------------------------------------------------------------------------- */

    /**
     * @return ?string Return file content or null.
     */
    public function get(): ?string
    {
        if( !file_exists( filename: $this->path )) { return null; }

        $content = file_get_contents( filename: $this->path );
        if( $content === false ) { return null; }

        return $content;
    }

    /**
     * @param string $token Authentication token to store.
     * @return void
     * @throws CacheException Error setting token.
     */
    public function set( string $token ): void
    {
        $handle = fopen( filename: $this->path, mode: 'w' );
        if( $handle === false ) {
            throw new CacheException(
                message: "Unable to open cache file for writing: {$this->path}."
            );
        }
        flock( stream: $handle, operation: LOCK_EX ); // LOCK BEFORE WRITING

        try {
            fwrite(stream: $handle, data: $token);
        }
        finally {
            flock( stream: $handle, operation: LOCK_UN ); // UNLOCK AFTER WRITING
            fclose( stream: $handle );
        }
    }


/* CLEAR TOKENS
----------------------------------------------------------------------------- */

    /**
     * Remove the cache file.
     *
     * @return void
     * @throws CacheException Error clearing token cache.
     */
    public function clear(): void
    {
        if( !file_exists( $this->path )) { return; }

        $result = unlink( $this->path );
        if( $result === false ) {
            throw new CacheException( message: "Unable to remove cache file: {$this->path}." );
        }
    }
}