<?php

namespace Trafiklab\Common\Model\Contract;


use Trafiklab\Common\Model\Exceptions\InvalidKeyException;
use Trafiklab\Common\Model\Exceptions\InvalidRequestException;
use Trafiklab\Common\Model\Exceptions\InvalidStopLocationException;
use Trafiklab\Common\Model\Exceptions\KeyRequiredException;
use Trafiklab\Common\Model\Exceptions\QuotaExceededException;
use Trafiklab\Common\Model\Exceptions\RequestTimedOutException;
use Trafiklab\Common\Model\Exceptions\ServiceUnavailableException;

/**
 * A PublicTransportApiWrapper wraps one or more TrafikLab APIs to use them in our SDK.
 * These contracts define a small set of common features which should be interchangeable between wrappers and APIs.
 * Every wrapper may or may not expose more data through its own methods and responses.
 *
 * @api
 * @package Trafiklab\Common\Model
 */
interface PublicTransportApiWrapper
{

    /**
     * Set the user agent used when making requests.
     *
     * @param string $userAgent The user agent to send along with every request.
     */
    public function setUserAgent(string $userAgent): void;


    /**
     * Set the API key used for route-planning.
     *
     * @param string $apiKey The API key to use.
     */
    public function setRoutePlanningApiKey(string $apiKey): void;


    /**
     * Set the API key used for route-planning.
     *
     * @param string $apiKey The API key to use.
     */
    public function setTimeTablesApiKey(string $apiKey): void;

    /**
     * Set the API key used for finding stop locations.
     *
     * @param string $apiKey The API key to use.
     */
    public function setFindStopLocationApiKey(string $apiKey): void;

    /**
     * Get a timetable for a certain stop.
     *
     * @param TimeTableRequest $timeTableRequest The request object containing the query parameters.
     *
     * @return TimeTableResponse  The response from the API.
     * @throws InvalidKeyException
     * @throws InvalidRequestException
     * @throws InvalidStopLocationException
     * @throws KeyRequiredException
     * @throws QuotaExceededException
     * @throws RequestTimedOutException
     * @throws ServiceUnavailableException
     */
    public function getTimeTable(TimeTableRequest $timeTableRequest): TimeTableResponse;

    /**
     * Get a route-planning between two points.
     *
     * @param RoutePlanningRequest $routePlanningRequest The request object containing the query parameters.
     *
     * @return RoutePlanningResponse The response from the API.
     * @throws InvalidKeyException
     * @throws InvalidRequestException
     * @throws InvalidStopLocationException
     * @throws KeyRequiredException
     * @throws QuotaExceededException
     * @throws RequestTimedOutException
     * @throws ServiceUnavailableException
     */
    public function getRoutePlanning(RoutePlanningRequest $routePlanningRequest): RoutePlanningResponse;


    /**
     * Find a stop location based on (a part of) its name.
     *
     * @param FindStopLocationRequest $request The request object containing the query parameters.
     *
     * @return FindStopLocationResponse The response from the API.
     * @throws InvalidKeyException
     * @throws InvalidRequestException
     * @throws InvalidStopLocationException
     * @throws KeyRequiredException
     * @throws QuotaExceededException
     * @throws RequestTimedOutException
     * @throws ServiceUnavailableException
     */
    public function findStopLocation(FindStopLocationRequest $request): FindStopLocationResponse;
}
