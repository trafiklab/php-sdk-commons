<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

/**
 * Class QuotaExceededException
 *
 * Thrown when a request to an API was denied because of exceeded quota.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class QuotaExceededException extends Exception
{
    public function __construct(string $key, string $api, string $details = "", Throwable $previous = null)
    {
        parent::__construct("Key '$key' for '$api' has exceeded its quota. $details", 429, $previous);
    }
}
