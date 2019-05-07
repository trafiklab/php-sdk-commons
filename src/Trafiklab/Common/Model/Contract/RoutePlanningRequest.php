<?php

namespace Trafiklab\Common\Model\Contract;


use DateTime;

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

    public function getViaStopId(): string;

    public function setViaStopId(string $stopId): void;

    public function getDestinationStopId(): string;

    public function setDestinationStopId(string $stopId): void;

    public function getTimeTableType(): int;

    public function setTimeTableType(int $timeTableType): void;

    public function getRoutePlanningSearchType(): int;

    public function setRoutePlanningSearchType(int $timeTableType): void;

    public function getDateTime(): DateTime;

    public function setDateTime(DateTime $timeTableType): void;
}

