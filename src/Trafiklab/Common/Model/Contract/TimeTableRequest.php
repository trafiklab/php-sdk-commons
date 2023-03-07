<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Contract;


use DateTime;
use Trafiklab\Common\Model\Enum\TimeTableType;

/**
 * A request for a timetable. Implementing classes may provide more detailed functionality.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface TimeTableRequest
{

    public function getStopId(): string;

    public function setStopId(string $stopId): void;

    /**
     * Get the type of the TimeTable, either the constant defined in TimeTableType for departures or for arrivals.
     *
     * @see TimeTableType
     *
     * @return int $timeTableType the type of the TimeTable, either the constant defined in TimeTableType
     *                            for departures or for arrivals.
     */
    public function getTimeTableType(): int;

    /**
     * Set the type of the TimeTable, either the constant defined in TimeTableType for departures or for arrivals.
     *
     * @see TimeTableType
     *
     * @param int $timeTableType the type of the TimeTable, either the constant defined in TimeTableType
     *                           for departures or for arrivals.
     */
    public function setTimeTableType(int $timeTableType): void;

    public function getDateTime(): DateTime;

    public function setDateTime(?DateTime $timeTableType): void;

    public function getLanguage(): string;

    public function setLanguage(string $lang): void;
}
