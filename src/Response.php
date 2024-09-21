<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

final class Response
{
    /**
     * @param int $status
     * @param string $status_message
     * @param array<string, string|array<string, string>> $headers
     * @param object $body
     */
    public function __construct(
        public int     $status,
        public string  $status_message,
        public array   $headers,
        public object  $body,
    )
    {}
}