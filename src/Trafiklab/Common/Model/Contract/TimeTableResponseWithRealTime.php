<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

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