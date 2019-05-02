<?php

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

class InvalidStoplocationException extends InvalidRequestException
{
    public function __construct(string $parameter, string $id = "", Throwable $previous = null)
    {
        parent::__construct([$parameter], "The id '$id' is invalid", $previous);
    }
}
