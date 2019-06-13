<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class DateTimeOutOfRangeException
 *
 * Thrown when a request tries to load data for a data in which no data is available.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class DateTimeOutOfRangeException extends InvalidRequestException
{
    public function __construct(array $parameters, string $dateValue = "", Throwable $previous = null)
    {
        parent::__construct("The selected date '$dateValue' lies outside of the available timetables", $parameters,
            $previous);
    }
}
