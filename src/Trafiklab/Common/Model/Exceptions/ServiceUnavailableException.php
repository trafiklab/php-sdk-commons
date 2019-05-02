<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

class ServiceUnavailableException extends Exception
{
    public function __construct(string $url,
                                string $message = "The service is currently unavailable",
                                Throwable $previous = null)
    {
        parent::__construct("The request to $url failed: $message", 503, $previous);
    }
}
