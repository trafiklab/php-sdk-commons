<?php

namespace Trafiklab\Common\Model\Contract;

use Trafiklab\Common\Internal\WebResponseImpl;

/**
 * Interface FindStopLocationResponse
 *
 * @see     FindStopLocationRequest
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface FindStopLocationResponse
{


    /**
     * Get the original response from the API.
     *
     * @return WebResponse
     */
    public function getOriginalApiResponse(): WebResponse;


    /**
     * An array containing the stop areas which were found.
     *
     * @return FindStopLocationEntry[]
     */
    public function getFoundStopAreas(): array;
}