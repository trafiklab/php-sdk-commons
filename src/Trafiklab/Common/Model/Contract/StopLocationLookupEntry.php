<?php

namespace Trafiklab\Common\Model\Contract;

use Trafiklab\Common\Model\Enum\TransportType;

/**
 * A stop location found by a StopLocationLookupRequest.
 *
 * @see     StopLocationLookupRequest
 * @see     StopLocationLookupResponse
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface StopLocationLookupEntry
{
    /**
     * Get the id of this stop location.
     *
     * @return string The id of this stop location.
     */
    public function getId(): string;

    /**
     * Get the name of this stop location.
     *
     * @return string The name of this stop location.
     */
    public function getName(): string;

    /**
     * The longitude of this stop location.
     *
     * @return float The longitude of this stop location.
     */
    public function getLongitude(): float;

    /**
     * The latitude of this stop location.
     *
     * @return float The latitude of this stop location.
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
     * @param string $transportType The type of transport, one of the constants in TransportType
     *
     * @return bool Whether or not the specified type of traffic can stop in this point. In case an API doesn't provide
     *              this information, it will always return true.
     *
     * @see TransportType
     */
    public function isStopLocationForTransportType(string $transportType): bool;
}