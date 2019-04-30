<?php

namespace Trafiklab\Common\Model\Contract;


/**
 * A leg is one part of a journey, made with a single vehicle or on foot. A journey can consist of one or more legs. In
 * the case of multiple legs, a transfer is required between two legs.
 * @package Trafiklab\Common\Model
 */
interface RoutePlanningLeg
{
    /**
     * The origin of this leg.
     * @return Stop The stoplocation at which this leg starts.
     */
    public function getOrigin(): Stop;

    /**
     * The destination of this leg.
     * @return Stop The stoplocation at which this leg ends.
     */
    public function getDestination(): Stop;

    /**
     * Remarks about this leg, for example describing facilities on board of a train, or possible disturbances on the
     * route.
     * @return string[]
     */
    public function getNotes(): array;

    /**
     * The vehicle which is used to travel from the origin to the destination of this leg, if any. Can be null in case
     * of a walk between two stop locations.
     * @return Vehicle|null The vehicle used on this leg, or null in case of a walking transfer.
     */
    public function getVehicle(): ?Vehicle;

    /**
     * Intermediary stops made by the vehicle on this leg.
     * @return Stop[] Stops between the origin and destination, excluding the origin and destination.
     */
    public function getIntermediaryStops(): array;

    /**
     * The direction of the vehicle on this leg. Can be null in case
     * of a walk between two stop locations.
     * @return string|null The direction of the vehicle used on this leg, or null in case of a walking transfer.
     */
    public function getDirection(): ?string;

    /**
     * One of RoutePlanningLegType's constants, indicates if a vehicle is used, or if it is a walking interchange.
     * @return string
     */
    public function getType(): string;
}