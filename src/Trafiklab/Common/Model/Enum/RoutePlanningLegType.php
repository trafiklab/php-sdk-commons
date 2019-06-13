<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

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
