<?php

declare( strict_types = 1 );

namespace Ocolin\Plume\Exception;

class ApiException extends PlumeException
{
    public function __construct(
                        string $message,    // from error.message in response body
           public readonly int $statusCode, // HTTP status code
        public readonly string $plumeCode,  // e.g. "CUS00001", empty string if not present
    ) {
        parent::__construct( message: $message );
    }
}