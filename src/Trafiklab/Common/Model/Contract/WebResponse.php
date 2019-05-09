<?php

namespace Trafiklab\Common\Model\Contract;

/**
 * A response from a webserver.
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface WebResponse
{
    /**
     * The HTTP body received from the server.
     *
     * @return mixed The HTTP response code received from the server.
     */
    public function getResponseBody();

    /**
     * The HTTP response code received from the server.
     *
     * @return int The HTTP response code received from the server.
     */
    public function getResponseCode(): int;

    /**
     * The request parameters which were used to make this request.
     *
     * @return array The request parameters which were used to make this request.
     */
    public function getRequestParameters(): array;

    /**
     * The URL to which the request was made.
     *
     * @return string The URL to which the request was made.
     */
    public function getRequestUrl(): string;

    /**
     * Whether or not this response is served from a local cache on the system that made the request.
     * If this is true, the request was never sent to the server.
     *
     * @return bool Whether or not this response is served from cache.
     */
    public function isFromLocalCache(): bool;

    /**
     * Retrieve one of the request parameters which were used to make this request.
     *
     * @param string $name The parameter to retrieve.
     *
     * @return mixed One of the request parameters which were used to make this request.
     */
    public function getRequestParameter(string $name);
}