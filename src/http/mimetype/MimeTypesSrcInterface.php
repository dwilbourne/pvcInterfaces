<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mimetype;

/**
 * Class MimeTypesSrcInterface
 */
interface MimeTypesSrcInterface
{
    /**
     * getMimeTypeData
     */
    public function getMimeTypeData(): void;

    /**
     * getMimeTypes
     * @return array<string, MimeTypeInterface>
     * the key in the array is the name of the mime type
     */
    public function getMimeTypes(): array;
}
