<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

class InvalidRequestException extends Exception
{
    public function __construct(string $exception, array $parameters = [], Throwable $previous = null)
    {
        $message = "Failed to make an API call: the request is invalid. $exception";
        if (!empty($parameters)) {

            // Show url-encoded paraneters in a key-value pair.
            array_walk($parameters, function (&$value, $key) {
                $value = $key . '=' . urlencode($value);
            });

            $message .= " The following parameters were used:" . join(', ', $parameters) . ".";
        }

        parent::__construct($message, 400, $previous);
    }
}
