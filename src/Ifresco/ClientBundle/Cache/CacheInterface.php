<?php

namespace Ifresco\ClientBundle\Cache;

interface CacheInterface
{
    /**
     * Checks if the cache has a value for a key.
     *
     * @param string $key A unique key
     *
     * @return Boolean Whether the cache has a value for this key
     */
    function has($key);

    /**
     * Returns the value for a key.
     *
     * @param string $key A unique key
     *
     * @return string|null The value in the cache or null if not found
     */
    function get($key);

    /**
     * Sets a value in the cache.
     *
     * @param string $key   A unique key
     * @param string $value The value to cache
     */
    function set($key, $value);

    /**
     * Removes a value from the cache.
     *
     * @param string $key A unique key
     */
    function remove($key);
}