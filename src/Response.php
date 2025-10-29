<?php

declare( strict_types = 1 );

namespace Ocolin\Plume;

final class Response
{
    /**
     * @param int $status HTTP status code.
     * @param string $status_message HTTP status message.
     * @param array<string, string|array<string, string>> $headers HTTP response headers.
     * @param object $body HTTP response body.
     */
    public function __construct(
        public int     $status,
        public string  $status_message,
        public array   $headers,
        public object  $body,
    )
    {}
}