<?php

namespace Trafiklab\Common\Model\Contract;

use DateTime;

interface StopWithRealtime extends Stop
{
    /**
     * @return DateTime|null   The estimated (real-time) departure time at this stop. Null if there is no data about
     *                         the departure time at this stop area.
     */
    public function getEstimatedDepartureTime(): ?DateTime;

    /**
     * The arrival time at this stop.
     * @return DateTime|null The estimated (real-time) arrival time at this stop. Null if there is no data about the
     *                       arrival time at this stop area.
     */
    public function getEstimatedArrivalTime(): ?DateTime;

    /**
     * Whether or not this vehicle's stop is cancelled.
     * @return bool
     */
    public function isCancelled(): bool;
}