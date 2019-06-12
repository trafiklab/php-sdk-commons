<?php


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
