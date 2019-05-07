<?php


namespace Trafiklab\Common\Model\Enum;

/**
 * Defines how the date/time parameters in an API query should be interpreted.
 *
 * @api
 * @package Trafiklab\Common\Model\Enum
 */
abstract class RoutePlanningSearchType
{
    /**
     * Depart at or after the specified time.
     */
    public const DEPART_AT_SPECIFIED_TIME = 0;

    /**
     * Arrive before or at the specified time.
     */
    public const ARRIVE_AT_SPECIFIED_TIME = 1;

}