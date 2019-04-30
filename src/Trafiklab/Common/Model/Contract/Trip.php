<?php

namespace Trafiklab\Common\Model\Contract;


/**
 * A Trip, often also called Journey, describes one possibility for travelling between two locations. A Trip can
 * consist of one or more legs. A leg is one part of a Trip, made with a single vehicle or on foot. In the case of
 * multiple legs, a transfer is required between two legs.
 * @package Trafiklab\Common\Model
 */
interface Trip
{
    /**
     * A leg is one part of a Trip, made with a single vehicle or on foot. A Trip can consist of one or more
     * legs. In the case of multiple legs, a transfer is required between two legs.
     *
     * @return RoutePlanningLeg[] An array containing the legs in this Trip.
     */
    public function getLegs(): array;
}