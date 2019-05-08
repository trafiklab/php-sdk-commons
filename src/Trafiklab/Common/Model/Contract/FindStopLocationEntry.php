<?php

namespace Trafiklab\Common\Model\Contract;

use Trafiklab\Common\Model\Enum\TransportType;

/**
 * A stop location found by a FindStopLocationRequest.
 *
 * @see FindStopLocationRequest
 * @see FindStopLocationResponse
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface FindStopLocationEntry
{
    /**
     * Get the id of this stop area.
     *
     * @return string The id of this stop area.
     */
    public function getId(): string;

    /**
     * Get the name of this stop area.
     *
     * @return string The name of this stop area.
     */
    public function getName(): string;

    /**
     * The longitude of this stop area.
     *
     * @return float The longitude of this stop area.
     */
    public function getLongitude(): float;

    /**
     * The latitude of this stop area.
     *
     * @return float The latitude of this stop area.
     */
    public function getLatitude(): float;

    /**
     * The sorting weight for this station. This can be determined by the number of vehicles stopping there, the
     * number of passengers, ...
     *
     * @return int The sorting weight for this station.
     */
    public function getWeight(): int;

    /**
     * Check if a certain mode of transport stops at this stop location.
     *
     * @param int $transportType The type of transport, one of the constants in TransportType
     *
     * @return bool Whether or not the specified type of traffic can stop in this point. In case an API doesn't provide
     *              this information, it will always return true.
     *
     * @see TransportType
     */
    public function isStopAreaForTransportType(int $transportType): bool;
}