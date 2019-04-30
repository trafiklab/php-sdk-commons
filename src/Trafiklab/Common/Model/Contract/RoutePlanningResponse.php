<?php

namespace Trafiklab\Common\Model\Contract;

interface RoutePlanningResponse
{
    /**
     * @return Trip[]
     */
    public function getTrips(): array;
}