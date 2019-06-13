<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Contract;

/**
 * Interface RoutePlanningResponse
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface RoutePlanningResponse
{


    /**
     * Get the original response from the API.
     *
     * @return WebResponse
     */
    public function getOriginalApiResponse(): WebResponse;


    /**
     *
     * @return Trip[]
     */
    public function getTrips(): array;
}