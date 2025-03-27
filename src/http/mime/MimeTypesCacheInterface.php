<?php

namespace pvc\interfaces\http\mime;

use DateInterval;

/**
 * use phpdocs to narrow the types via a static type checker.  This is just a small subset of the methods that are
 * part of PSR16.
 */
interface MimeTypesCacheInterface
{
    /**
     * @param string $key
     * @param mixed|null $default
     * @return array<string, MimeTypeInterface>
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * @param string $key
     * @param array<string, MimeTypeInterface> $value
     * @param int|DateInterval|null $ttl
     * @return bool
     */
    public function set(string $key, mixed $value, null|int|DateInterval $ttl = null): bool;
}