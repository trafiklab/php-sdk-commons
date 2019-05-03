<?php

namespace Trafiklab\Common\Model\Exceptions;

class InvalidKeyException extends InvalidRequestException
{
    public function __construct(string $key, string $detail = "")
    {
        parent::__construct("The provided API key '$key' is invalid. $detail");
        $this->code = 401;
    }
}
