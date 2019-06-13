<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Enum;

/**
 * Used to distinguish the two different types of timetables, Departure board and Arrival board.
 *
 * @api
 * @package Trafiklab\Common\Model\Enum
 */
abstract class TimeTableType
{
    /**
     * Departures from a certain place.
     */
    public const DEPARTURES = 0;

    /**
     * Arrivals in a certain place.
     */
    public const ARRIVALS = 1;
}
