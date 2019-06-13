<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class QuotaExceededException
 *
 * Thrown when a request to an API was denied because of exceeded quota.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class QuotaExceededException extends TrafiklabSdkException
{
    public function __construct(string $key, string $api, string $details = "", Throwable $previous = null)
    {
        parent::__construct("Key '$key' for '$api' has exceeded its quota. $details", 429, $previous);
    }
}
