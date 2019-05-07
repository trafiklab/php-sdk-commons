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
     * Check if an item is present in the cache.
     *
     * @param string $key The key to search for.
     *
     * @return bool Whether or not the key is present in the cache.
     */
    public function contains(string $key): bool
    {
        $key = $this->getPrefixedAndHashedKey($key);
        $this->createCachePool();
        return $this->cache->hasItem($key);
    }

    /**
     * Get an item from the cache.
     *
     * @param string $key The key to search for.
     *
     * @return bool|mixed The cached object if found. If not found, false.
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
     * Store an item in the cache.
     *
     * @param string              $key   The key to store the object under.
     * @param object|array|string $value The object to store.
     * @param int                 $ttl   The number of seconds to keep this in cache.
     */
    public function put(string $key, $value, $ttl = self::DEFAULT_CACHE_TTL): void
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

    private function getPrefixedAndHashedKey($key): string
    {
        return self::PREFIX . md5($key);
    }


}