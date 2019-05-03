<?php

namespace Trafiklab\Common\Model\Exceptions;
/**
 * Class RequestTimedOutException
 *
 * Thrown when a request to an API failed because the request timed out. This is a server-side exception unrelated to
 * client-side code, but should be handled for a good user experience.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class RequestTimedOutException extends ServiceUnavailableException
{
    public function __construct(string $url, int $timeoutSeconds)
    {
        parent::__construct("The request to $url timed out after $timeoutSeconds seconds.", 503, null);
    }
}
