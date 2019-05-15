<?php

namespace Trafiklab\Common\Model\Contract;

/**
 * A public transport vehicle.
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface Vehicle
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * The number of the vehicle, uniquely identifying the trip it makes on a given day. Example: 547.
     *
     * @return int
     */
    public function getNumber(): ?int;


    /**
     * The line number of the vehicle, identifying the line on which it runs. Example: 41X.
     *
     * @return string
     */
    public function getLineNumber(): ?string;

    /**
     * The type of vehicle. Example: "Snabbtåg".
     *
     * @return string
     */
    public function getType(): string;

    /**
     * The code for the operator who runs the vehicle. Example: 74.
     *
     * @return int
     */
    public function getOperatorCode(): int;

    /**
     * The URL for the operator whi runs the vehicle. Example: "http://www.sj.se"
     *
     * @return string
     */
    public function getOperatorUrl();

    /**
     * The name for the operator whi runs the vehicle. Example: "SJ"
     *
     * @return string
     */
    public function getOperatorName(): string;
}