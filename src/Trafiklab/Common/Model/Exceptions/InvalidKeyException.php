<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Exceptions;

/**
 * Class InvalidKeyException
 *
 * Thrown when the specified key is invalid for the used API.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class InvalidKeyException extends InvalidRequestException
{
    public function __construct(string $key, string $detail = "")
    {
        parent::__construct("The provided API key '$key' is invalid. $detail");
        $this->code = 401;
    }
}
