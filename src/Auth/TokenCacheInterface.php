<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Auth;

interface TokenCacheInterface
{
    /**
     * @return ?string Return stored token or null.
     */
    public function get(): ?string;

    /**
     * Store a token.
     * @param string $token Token to store.
     * @return void
     */
    public function set( string $token ): void;

    /**
     * Clear/remove existing stored token.
     * @return void
     */
    public function clear(): void;
}