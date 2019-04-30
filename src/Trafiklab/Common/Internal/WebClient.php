<?php


namespace Trafiklab\Common\Internal;


interface WebClient
{
    /**
     * @param string $endpoint   The URL of the resource to retrieve.
     * @param array  $parameters a key-value array containing the parameters to send along in the query string.
     *
     * @return WebResponse The response received from the web server.
     */
    function makeRequest(string $endpoint, array $parameters): WebResponse;
}