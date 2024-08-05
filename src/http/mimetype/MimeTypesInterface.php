<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mimetype;

/**
 * Class MimeTypesInterface
 */
interface MimeTypesInterface
{
    /**
     * getMimeType
     * @param string $fileExt
     * @return string
     */
    public function getMimeType(string $fileExt): string;

    /**
     * getExtensions
     * @param string $mimeType
     * @return array<string>
     */
    public function getExtensions(string $mimeType): array;
}
