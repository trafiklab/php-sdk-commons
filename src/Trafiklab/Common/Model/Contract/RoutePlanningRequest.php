<?php

namespace Trafiklab\Common\Model\Contract;


use DateTime;
use Trafiklab\Common\Model\Enum\RoutePlanningSearchType;

/**
 * A request for a route-planning. Implementing classes may provide more detailed functionality.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface RoutePlanningRequest
{
    public function getOriginStopId(): string;

    public function setOriginStopId(string $stopId): void;

    public function getViaStopId(): ?string;

    public function setViaStopId(?string $stopId): void;

    public function getDestinationStopId(): string;

    public function setDestinationStopId(string $stopId): void;

    /**
     * Get the type of time definition in this query. Either Arriving at a certain time, or departing at a certain time.
     *
     * @return int One of the constants defined in RoutePlanningSearchType
     *
     * @see RoutePlanningSearchType
     */
    public function getRoutePlanningSearchType(): int;

    /**
     * Set the type of time definition in this query. Either Arriving at a certain time, or departing at a certain time.
     *
     * @param int $routePlanningSearchType One of the constants defined in RoutePlanningSearchType
     *
     * @see RoutePlanningSearchType
     */
    public function setRoutePlanningSearchType(int $routePlanningSearchType): void;

    public function getDateTime(): DateTime;

    public function setDateTime(?DateTime $timeTableType): void;
}

