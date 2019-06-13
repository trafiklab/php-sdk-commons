<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 */

namespace Trafiklab\Common\Model\Enum;

/**
 * Used to distinguish different types of transport
 *
 * @api
 * @package Trafiklab\Common\Model\Enum
 */
abstract class TransportType
{
    public const BUS = "BUS";
    public const METRO = "SUBWAY";
    public const TRAM = "TRAM";
    public const TRAIN = "TRAIN";
    public const SHIP = "SHIP";
}
