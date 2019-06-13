<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class InvalidStopLocationException
 *
 * Thrown when a request to an API contains an invalid stop location ID.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class InvalidStopLocationException extends InvalidRequestException
{
    public function __construct(array $parameters = [], Throwable $previous = null)
    {
        parent::__construct("One or more ids for stop locations are invalid.", $parameters, $previous);
    }
}
