<?php

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

class InvalidStoplocationException extends InvalidRequestException
{
    public function __construct(string $invalidIds = "", Throwable $previous = null)
    {
        parent::__construct("One or more ids for stop locations are invalid. '$invalidIds'.", $previous);
    }
}
