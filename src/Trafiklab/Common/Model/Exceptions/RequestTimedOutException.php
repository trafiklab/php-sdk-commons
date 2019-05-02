<?php

namespace Trafiklab\Common\Model\Exceptions;

class RequestTimedOutException extends ServiceUnavailableException
{
    public function __construct(string $url, int $timeoutSeconds)
    {
        parent::__construct("The request to $url timed out after $timeoutSeconds seconds.", 503, null);
    }
}
