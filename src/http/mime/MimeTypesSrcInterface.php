<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mime;

/**
 * Class MimeTypesSrcInterface
 */
interface MimeTypesSrcInterface
{
    /**
     * getMimeTypes
     * @return array<string, MimeTypeInterface>
     * the key in the array is the name of the mime type
     */
    public function getMimeTypes(): array;
}
