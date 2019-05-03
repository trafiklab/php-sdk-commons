<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

/**
 * Class ServiceUnavailableException
 *
 * Thrown when a request to an API failed because the server is unavailable. This is a server-side exception unrelated
 * to client-side code, but should be handled for a good user experience.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class ServiceUnavailableException extends Exception
{
    public function __construct(string $url,
                                string $message = "The service is currently unavailable",
                                Throwable $previous = null)
    {
        parent::__construct("The request to $url failed: $message", 503, $previous);
    }
}
