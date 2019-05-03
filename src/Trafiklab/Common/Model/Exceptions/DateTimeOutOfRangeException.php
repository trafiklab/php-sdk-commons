<?php

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class DateTimeOutOfRangeException
 *
 * Thrown when a request tries to load data for a data in which no data is available.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class DateTimeOutOfRangeException extends InvalidRequestException
{
    public function __construct(string $parameter, string $value = "", Throwable $previous = null)
    {
        parent::__construct([$parameter], "The selected date '$value' lies outside of the available timetables",
            $previous);
    }
}
