<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

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
