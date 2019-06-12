<?php

namespace Trafiklab\Common\Model\Exceptions;

use Exception;
use Throwable;

/**
 * Class TrafiklabSdkException
 *
 * Base exception for Trafiklab SDKs.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class TrafiklabSdkException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
