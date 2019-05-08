<?php


namespace Trafiklab\Common\Model\Contract;

/**
 * A FindStopLocationRequest is a request to find a certain stop area by (a part of) its name. This way a stop area ID
 * can obtained. These APIs are called "Platsupplag" on trafiklab.se.
 *
 * @see     FindStopLocationResponse
 * @api
 * @package Trafiklab\Common\Model\Contract
 */
interface FindStopLocationRequest
{
    /**
     * Set the station name to search after. The maximum length might be limited based on the implementation.
     * If the input is too long, only the first X characters will be used.
     *
     * @param string $searchQuery (A part of) the station name to search after.
     */
    function setSearchQuery(string $searchQuery): void;

    /**
     * Get the station name to search after.
     *
     * @return string The station name to search after.
     */
    function getSearchQuery(): string;

    /**
     * Set the language which is used in the response.
     *
     * @param string $language The language which is used in the response.
     */
    function setLanguage(string $language): void;

    /**
     * Get the language which is used in the response.
     *
     * @return string The language which is used in the response.
     */
    function getLanguage(): string;

    /**
     * Set the maximum number of results. The response might contain fewer results, but never more.
     *
     * @param int $maximumNumberOfResults The maximum number of results.
     */
    function setMaxNumberOfResults(int $maximumNumberOfResults): void;

    /**
     * Get the maximum number of results. The response might contain fewer results, but never more.
     *
     * @return int The maximum number of results.
     */
    function getMaxNumberOfResults(): int;
}