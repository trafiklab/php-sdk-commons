<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Contract;


/**
 * A Trip, often also called Journey, describes one possibility for travelling between two locations. A Trip can
 * consist of one or more legs. A leg is one part of a Trip, made with a single vehicle or on foot. In the case of
 * multiple legs, a transfer is required between two legs.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface Trip
{
    /**
     * A leg is one part of a Trip, made with a single vehicle or on foot. A Trip can consist of one or more
     * legs. In the case of multiple legs, a transfer is required between two legs.
     *
     * @return RoutePlanningLeg[] An array containing the legs in this Trip.
     */
    public function getLegs(): array;

    /**
     * Get the duration of this trip in seconds.
     *
     * @return int
     */
    public function getDuration(): int;

    /**
     * Get the departure for the first leg.
     *
     * @return VehicleStop
     */
    public function getDeparture(): VehicleStop;

    /**
     * Get the arrival for the last leg.
     *
     * @return VehicleStop
     */
    public function getArrival(): VehicleStop;

}