<?php

namespace pvc\interfaces\http\mime;

interface MimeTypesCacheInterface
{
    /**
     * @return array<string, MimeTypeInterface>
     */
    public function getMimeTypes(): array;
}