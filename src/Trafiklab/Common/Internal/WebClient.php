<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Internal;


use Trafiklab\Common\Model\Contract\WebResponse;
use Trafiklab\Common\Model\Exceptions\RequestTimedOutException;

/**
 * @internal
 * @package Trafiklab\Common\Internal
 */
interface WebClient
{
    /**
     * @param string $endpoint   The URL of the resource to retrieve.
     * @param array  $parameters a key-value array containing the parameters to send along in the query string.
     *
     * @return WebResponseImpl The response received from the web server.
     * @throws RequestTimedOutException
     */
    function makeRequest(string $endpoint, array $parameters): WebResponse;
}