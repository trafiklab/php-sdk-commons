<?php

namespace Trafiklab\Common\Model\Exceptions;

class KeyRequiredException extends InvalidRequestException
{
    public function __construct(string $detail = "")
    {
        parent::__construct("An API key is required to make this request. $detail", null);
        $this->code = 401;
    }
}
