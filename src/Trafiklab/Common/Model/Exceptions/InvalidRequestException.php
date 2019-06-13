<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Exceptions;

use Throwable;

/**
 * Class InvalidRequestException
 *
 * Thrown when a request failed because of invalid or missing parameters.
 *
 * @package Trafiklab\Common\Model\Exceptions
 */
class InvalidRequestException extends TrafiklabSdkException
{
    public function __construct(string $exception, array $parameters = [], Throwable $previous = null)
    {
        $message = "Failed to make an API call: the request is invalid. $exception";
        if (!empty($parameters)) {

            // Show url-encoded paraneters in a key-value pair.
            array_walk($parameters, function (&$value, $key) {
                $value = $key . '=' . urlencode($value);
            });

            $message .= " The following parameters were used:" . join(', ', $parameters) . ".";
        }

        parent::__construct($message, 400, $previous);
    }
}
