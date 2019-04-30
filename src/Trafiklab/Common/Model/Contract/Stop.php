<?php

namespace Trafiklab\Common\Model\Contract;

use DateTime;

interface Stop
{
    /**
     * The id for this stop area.
     *
     * @return string
     */
    public function getStopId(): string;

    /**
     * The name of this stop area.
     * @return string The name of this stop area.
     */
    public function getStopName(): string;

    /**
     * @return DateTime|null   The departure time at this stop. Null if there is no data about the departure time at
     *                         this stop area.
     */
    public function getScheduledDepartureTime(): ?DateTime;

    /**
     * The arrival time at this stop.
     * @return DateTime|null The arrival time at this stop. Null if there is no data about the arrival time at this
     *                       stop area.
     */
    public function getScheduledArrivalTime(): ?DateTime;

    /**
     * The platform at which the vehicle will stop.
     * @return null|string The platform at which the vehicle will stop. Null if no platform information is known.
     */
    public function getPlatform(): ?string;

    /**
     * The latitude component of this stop area's coordinates.
     * @return float
     */
    public function getLatitude(): float;

    /**
     * The longitude component of this stop area's coordinates.
     * @return float
     */
    public function getLongitude(): float;
}