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
    public function getMimeTypeNameFromExtension(string $fileExt): ?string;

    /**
     * getExtensions
     * @param string $mimeTypeName
     * @return array<string>
     */
    public function getExtensionsFromMimeTypeName(string $mimeTypeName): array;

    /**
     * isValidMimeType
     * @param string $mimeType
     * @return bool
     */
    public function isValidMimeType(string $mimeType): bool;
}
