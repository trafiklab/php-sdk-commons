<?php

namespace Trafiklab\Common\Model\Contract;


use DateTime;

/**
 * A request for a timetable. Implementing classes may provide more detailed functionality.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface TimeTableRequest
{

    public function getStopId(): string;

    public function setStopId(string $stopId): void;

    public function getTimeTableType(): int;

    public function setTimeTableType(int $timeTableType): void;

    public function getDateTime(): ?DateTime;

    public function setDateTime(?DateTime $timeTableType): void;
}
