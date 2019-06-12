<?php


namespace Trafiklab\Common\Internal;

/**
 * @internal
 * @package Trafiklab\Common\Internal
 */
interface Cache
{
    /**
     * Check if the cache contains a certain key.
     *
     * @param string $key The key to check.
     *
     * @return bool True if the key is present in the cache.
     */
    function contains(string $key): bool;

    /**
     * Retrieve an object from cache.
     *
     * @param string $key The key for which data should be retrieved.
     *
     * @return bool|mixed The cached object. False if not found.
     */
    function get(string $key);

    /**
     * Store data in the cache.
     *
     * @param string $key   The key to store.
     * @param mixed  $value The data to store.
     * @param int    $ttl   How long the data can live in the cache, in seconds.
     */
    function put(string $key, $value, int $ttl): void;
}