<?php

namespace Trafiklab\Common\Model\Contract;

/**
 * Interface StopLocationLookupResponse
 *
 * @see     StopLocationLookupRequest
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface StopLocationLookupResponse
{


    /**
     * Get the original response from the API.
     *
     * @return WebResponse
     */
    public function getOriginalApiResponse(): WebResponse;


    /**
     * An array containing the stop locations which were found.
     *
     * @return StopLocationLookupEntry[]
     */
    public function getFoundStopLocations(): array;
}