<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mimetype;

/**
 * Class MimeTypeInterface
 */
interface MimeTypeInterface
{
    /**
     * getMimeType
     * @return string
     * full name of the mime type, e.g. 'application/javascript'
     */
    public function getMimeType(): string;

    /**
     * getExtensions
     * @return array<string>
     * an array of the file extensions associated with this mime type
     */
    public function getExtensions(): array;
}
