<?php

namespace Trafiklab\Common\Model\Contract;

/**
 * Interface RoutePlanningResponse
 *
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface RoutePlanningResponse
{


    /**
     * Get the original response from the API.
     *
     * @return WebResponse
     */
    public function getOriginalApiResponse(): WebResponse;


    /**
     *
     * @return Trip[]
     */
    public function getTrips(): array;
}