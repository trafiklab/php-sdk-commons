<?php


namespace Trafiklab\Common\Internal;


use Cache\Adapter\PHPArray\ArrayCachePool;

/**
 * This caching class provides an abstraction layer on top of the PSR-6 cache implementations loaded via composer.
 * This abstraction layer allows to automatically determine the best available caching method, which allows the code to
 * work optimal on a wider variety of systems.
 *
 * @internal
 * @package Trafiklab\Common\Internal
 */
class CacheImpl implements Cache
{

    private const PREFIX = "TL_common_sdk_";
    private const DEFAULT_CACHE_TTL = 15;

    private static $_instance;
    /**
     * @var $cache Cache\Adapter\Common\AbstractCachePool cache pool which will be used.
     */
    private $cache;

    private function __construct()
    {
        // Hide constructor
    }

    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new CacheImpl();
        }
        return self::$_instance;
    }

    /**
     * Check if the cache contains a certain key.
     *
     * @param string $key The key to check.
     *
     * @return bool True if the key is present in the cache.
     */
    public function contains(string $key): bool
    {
        $key = $this->getPrefixedAndHashedKey($key);
        $this->createCachePool();
        return $this->cache->hasItem($key);
    }


    /**
     * Retrieve an object from cache.
     *
     * @param string $key The key for which data should be retrieved.
     *
     * @return bool|mixed The cached object. False if not found.
     */
    public function get(string $key)
    {
        $key = $this->getPrefixedAndHashedKey($key);
        $this->createCachePool();
        if ($this->cache->hasItem($key)) {
            return unserialize($this->cache->getItem($key)->get());
        } else {
            return false;
        }
    }


    /**
     * Store data in the cache.
     *
     * @param string $key   The key to store.
     * @param mixed  $value The data to store.
     * @param int    $ttl   How long the data can live in the cache, in seconds.
     */
    public function put(string $key, $value, int $ttl = self::DEFAULT_CACHE_TTL): void
    {
        $key = $this->getPrefixedAndHashedKey($key);
        $this->createCachePool();

        $item = $this->cache->getItem($key);
        $item->set(serialize($value));
        if ($ttl > 0) {
            $item->expiresAfter($ttl);
        }
        $this->cache->save($item);
    }

    /**
     * Create a new cache pool
     *
     * @return \Cache\Adapter\Common\AbstractCachePool the cachePool for this application
     */
    private function createCachePool()
    {
        if ($this->cache == null) {
            // Try to use APC when available
            if (extension_loaded('apc')) {
                $this->cache = new \Cache\Adapter\Apcu\ApcuCachePool();
            } else {
                // Fall back to array cache
                $this->cache = new ArrayCachePool();
            }
        }
        return $this->cache;
    }

    /**
     * Get a hashed key, prefixed by the constant prefix defined in this class.
     *
     * @param string $key The key to hash and prefix
     *
     * @return string The hashed and prefixed key.
     */
    private function getPrefixedAndHashedKey(string $key): string
    {
        return self::PREFIX . md5($key);
    }


}