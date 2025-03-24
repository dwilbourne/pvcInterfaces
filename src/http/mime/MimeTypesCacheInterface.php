<?php

namespace pvc\interfaces\http\mime;

use DateInterval;
use Psr\SimpleCache\CacheInterface;

/**
 * use phpdocs to narrow the types via a static type checker
 */
interface MimeTypesCacheInterface extends CacheInterface
{
    /**
     * @param string $key
     * @param mixed|null $default
     * @return MimeTypeInterface|null
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