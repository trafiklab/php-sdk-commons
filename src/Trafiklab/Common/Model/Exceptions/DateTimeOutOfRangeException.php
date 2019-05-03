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
    public function __construct(array $parameters, string $dateValue = "", Throwable $previous = null)
    {
        parent::__construct("The selected date '$dateValue' lies outside of the available timetables", $parameters,
            $previous);
    }
}
