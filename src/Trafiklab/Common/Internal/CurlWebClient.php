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
class CurlWebClient implements WebClient
{
    private const CACHE_TTL_SECONDS = 15;  // Cache validity in seconds
    private const CURL_TIMEOUT_SECONDS = 10;

    private $_userAgent;
    private $_cache;

    public function __construct($userAgent = '')
    {
        $this->_userAgent = $userAgent;
        $this->_cache = CacheImpl::getInstance();
    }

    /**
     * Make a request to an HTTP server.
     *
     * @param string $endpoint   The URL to make the request to.
     * @param array  $parameters An associative array of parameters to send along as Query parameters.
     *
     * @return WebResponse Object containing information on both the request and the response.
     * @throws RequestTimedOutException Thrown when the server does not answer within 10 seconds.
     */
    function makeRequest(string $endpoint, array $parameters): WebResponse
    {
        // Url-encode parameters
        $urlEncodedKeyValueStrings = [];
        foreach ($parameters as $key => $value) {
            $urlEncodedKeyValueStrings[] = $key . '=' . urlencode($value);
        }

        // Construct the URL
        $url = $endpoint;
        if (!empty($urlEncodedKeyValueStrings)) {
            $url .= '?' . join('&', $urlEncodedKeyValueStrings);
        }

        // Check if the url is cached.
        if ($this->_cache->contains($url)) {
            $webResponse = $this->_cache->get($url);
            $webResponse->setIsFromLocalCache(true);
            return $webResponse;
        }

        // Create curl resource
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_USERAGENT, $this->_userAgent);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        // Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Limit the timeout
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::CURL_TIMEOUT_SECONDS); //timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, self::CURL_TIMEOUT_SECONDS); //timeout in seconds

        // $output contains the output string
        $output = curl_exec($ch);

        // Check the exit status of CURL.
        $curlErrorCode = curl_errno($ch);
        switch ($curlErrorCode) {
            // The request timed out
            case CURLE_OPERATION_TIMEDOUT:
                throw new RequestTimedOutException($url, self::CURL_TIMEOUT_SECONDS);
                break;

            // More exception/error cases should be handled here.

            // In case there were no errors:
            case 0:
            default:
                // Get the HTTP response code and create the response object.
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                $response = new WebResponseImpl($url, $parameters, $this->_userAgent, $httpCode, $output);

                // close curl resource to free up system resources
                curl_close($ch);

                // Cache the response
                $this->_cache->put($url, $response, self::CACHE_TTL_SECONDS);
                return $response;
        }
    }

    /**
     * Set the user agent string to use when making web requests.
     *
     * @param string $userAgent The user agent to use.
     */
    function setUserAgent(string $userAgent): void
    {
        $this->_userAgent = $userAgent;
    }
}