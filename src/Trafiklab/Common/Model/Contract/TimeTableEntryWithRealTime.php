<?php

namespace Trafiklab\Common\Model\Contract;


use DateTime;

/**
 * An entry in a timetable, describing a single departure or arrival of a vehicle at a stop area.
 *
 * @package Trafiklab\Common\Model
 */
interface TimeTableEntryWithRealTime extends TimeTableEntry
{

    /**
     * The estimated time at which the vehicle will arrive at the stop area.
     * @return DateTime
     */
    public function getEstimatedStopTime(): DateTime;

    /**
     * Whether or not this vehicle's stop is cancelled.
     * @return bool
     */
    public function isCancelled(): bool;
}