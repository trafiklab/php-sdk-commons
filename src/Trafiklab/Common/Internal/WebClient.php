<?php


namespace Trafiklab\Common\Internal;


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
    function makeRequest(string $endpoint, array $parameters): WebResponseImpl;
}