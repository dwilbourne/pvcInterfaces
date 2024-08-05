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
     * @return ?string
     */
    public function getMimeTypeFromExtension(string $fileExt): ?string;

    /**
     * getExtensions
     * @param string $mimeType
     * @return array<string>
     */
    public function getExtensionsFromMimeType(string $mimeType): array;

    /**
     * isValidMimeType
     * @param string $mimeType
     * @return bool
     */
    public function isValidMimeType(string $mimeType): bool;
}
