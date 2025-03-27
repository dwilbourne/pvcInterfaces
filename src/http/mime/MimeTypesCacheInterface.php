<?php

namespace pvc\interfaces\http\mime;

use DateInterval;

interface MimeTypesCacheInterface
{
    /**
     * @return array<string, MimeTypeInterface>
     */
    public function getMimeTypes(): array;

    /**
     * @param array<string, MimeTypeInterface> $value
     * @param int|DateInterval|null $ttl
     * @return bool
     */
    public function setMimeTypes(array $value, null|int|DateInterval $ttl = null): bool;
}