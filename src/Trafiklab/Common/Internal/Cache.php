<?php


namespace Trafiklab\Common\Internal;


interface Cache
{
    function contains(string $key): bool;

    function get(string $key);

    function put(string $key, $value, $ttl): void;
}