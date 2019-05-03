<?php

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class InvalidStoplocationException
 *
 * Thrown when a request to an API contains an invalid stop location ID.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class InvalidStoplocationException extends InvalidRequestException
{
    public function __construct(string $detail = "", Throwable $previous = null)
    {
        parent::__construct("One or more ids for stop locations are invalid. $detail", $previous);
    }
}
