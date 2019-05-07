<?php


namespace Trafiklab\Common\Model\Enum;

use Trafiklab\Common\Model\Contract\RoutePlanningLeg;

/**
 * Used to distinguish different kinds of RoutePlanningLeg.
 *
 * @api
 * @see     RoutePlanningLeg
 * @package Trafiklab\Common\Model\Enum
 */
abstract class RoutePlanningLegType
{
    /**
     * A leg travelled with a public transport vehicle, a journey between two points.
     */
    public const VEHICLE_JOURNEY = "JNY";
    /**
     * A walking transfer between two public transport stops.
     */
    public const WALKING = "WALK";
}
