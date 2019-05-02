<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

class InvalidRequestException extends Exception
{
    public function __construct(array $parameters, string $details = "", Throwable $previous = null)
    {
        parent::__construct("Failed to make an API call: the request is invalid.
         Please review the following parameters:" . join(',', $parameters) . ' ' . $details,
            400, $previous);
    }
}
