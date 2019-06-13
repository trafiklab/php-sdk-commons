<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

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