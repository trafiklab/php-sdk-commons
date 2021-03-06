<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Contract;


use DateTime;

/**
 * An entry in a timetable, describing a single departure or arrival of a vehicle at a stoplocation.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface TimeTableEntry
{
    /**
     * The direction of the vehicle stopping at this time at this stop location. In case of a vehicle departing, this
     * is the destination of the vehicle. In case of a vehicle arriving, this is the origin of the vehicle.
     *
     * @return string
     */
    public function getDirection(): string;

    /**
     * The time at which the vehicle will arrive at the stop location. This can be an interval (5 min) or a time
     * (18:00) depending on the operator and data source.
     *
     * @return string
     */
    public function getDisplayTime(): string;

    /**
     * The name of the line on which the vehicle is driving.
     *
     * @return string
     */
    public function getLineName(): string;

    /**
     * The number of the line on which the vehicle is driving.
     *
     * @return string
     */
    public function getLineNumber(): string;

    /**
     * The operator of the vehicle.
     *
     * @return string
     */
    public function getOperator(): string;

    /**
     * The time at which the vehicle stops at the stop location, including possible delays.
     *
     * @return DateTime
     */
    public function getScheduledStopTime(): DateTime;

    /**
     * The Id for the stop location.
     *
     * @return string
     */
    public function getStopId(): string;

    /**
     * The name of the stop at which the vehicle stops.
     *
     * @return string
     */
    public function getStopName(): string;


    /**
     * The track or platform where the vehicle will halt.
     *
     * @return String
     */
    public function getPlatform(): ?string;

    /**
     * The type of timetable in which this entry resides, either arrivals or departures.
     *
     * @return int
     */
    public function getTimeTableType(): int;

    /**
     * Get the number of the vehicle.
     *
     * @return string
     */
    public function getTripNumber(): ?string;

    /**
     * The type of transport.
     *
     * @return string TransportType indicating the type of transport.
     */
    public function getTransportType(): string;


    /**
     * The estimated time at which the vehicle will arrive at the stop location.
     *
     * @return DateTime
     */
    public function getEstimatedStopTime(): ?DateTime;

    /**
     * Whether or not this vehicle's stop is cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool;
}