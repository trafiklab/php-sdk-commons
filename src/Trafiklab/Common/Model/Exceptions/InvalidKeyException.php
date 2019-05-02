<?php

namespace Trafiklab\Common\Model\Exceptions;

class InvalidKeyException extends InvalidRequestException
{
    public function __construct(string $key)
    {
        parent::__construct(["Key"], "The provided API key '$key' is invalid", null);
        $this->code = 401;
    }
}
