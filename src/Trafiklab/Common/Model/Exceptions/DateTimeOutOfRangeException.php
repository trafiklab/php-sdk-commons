<?php

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

class DateTimeOutOfRangeException extends InvalidRequestException
{
    public function __construct(string $parameter, string $value = "", Throwable $previous = null)
    {
        parent::__construct([$parameter], "The selected date '$value' lies outside of the available timetables",
            $previous);
    }
}
