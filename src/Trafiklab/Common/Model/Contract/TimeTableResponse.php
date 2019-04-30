<?php

namespace Trafiklab\Common\Model\Contract;

interface TimeTableResponse
{
    /**
     * @return TimeTableEntry[] The requested timetable as an array of timetable entries.
     */
    public function getTimetable(): array;

    /**
     * @return int The type of the stops in this timetable.
     */
    public function getType(): int;
}