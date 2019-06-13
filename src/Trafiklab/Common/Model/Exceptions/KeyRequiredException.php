<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

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
