<?php

namespace Trafiklab\Common\Model\Contract;

/***
 * Identical to TimeTableResponse, but returns TimeTableEntryWithRealTime instead of normal TimeTableEntry.
 *
 * @see     TimeTableResponse
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface TimeTableResponseWithRealTime extends TimeTableResponse
{

    /**
     * @return TimeTableEntryWithRealTime[] The requested timetable as an array of timetable entries.
     */
    public function getTimetable(): array;

    /**
     * @return int The type of the stops in this timetable.
     */
    public function getType(): int;
}