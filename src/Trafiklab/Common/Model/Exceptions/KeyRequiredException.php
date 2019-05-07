<?php

namespace Trafiklab\Common\Model\Exceptions;

/**
 * Class KeyRequiredException
 *
 * Thrown when a request to an API with key authentication was attempted without providing an API key.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class KeyRequiredException extends InvalidRequestException
{
    public function __construct(string $detail = "")
    {
        parent::__construct("An API key is required to make this request. $detail");
        $this->code = 401;
    }
}
