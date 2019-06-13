<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Contract;

use DateTime;

/**
 * A VehicleStop is the event of a vehicle stopping at a stop location, to pick up or drop off passengers.
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface VehicleStop
{
    /**
     * The id for this stop location.
     *
     * @return string
     */
    public function getStopId(): string;

    /**
     * The name of this stop location.
     *
     * @return string The name of this stop location.
     */
    public function getStopName(): string;

    /**
     * @return DateTime|null   The departure time at this stop. Null if there is no data about the departure time at
     *                         this stop location.
     */
    public function getScheduledDepartureTime(): ?DateTime;

    /**
     * The arrival time at this stop.
     *
     * @return DateTime|null The arrival time at this stop. Null if there is no data about the arrival time at this
     *                       stop location.
     */
    public function getScheduledArrivalTime(): ?DateTime;

    /**
     * The platform at which the vehicle will stop.
     *
     * @return null|string The platform at which the vehicle will stop. Null if no platform information is known.
     */
    public function getPlatform(): ?string;

    /**
     * The latitude component of this stop location's coordinates.
     *
     * @return float
     */
    public function getLatitude(): float;

    /**
     * The longitude component of this stop location's coordinates.
     *
     * @return float
     */
    public function getLongitude(): float;
}