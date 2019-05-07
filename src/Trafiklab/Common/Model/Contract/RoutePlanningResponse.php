<?php

namespace Trafiklab\Common\Model\Contract;

use Trafiklab\Common\Internal\WebResponseImpl;

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
     * @return WebResponseImpl
     */
    public function getOriginalApiResponse(): WebResponse;


    /**
     *
     * @return Trip[]
     */
    public function getTrips(): array;
}