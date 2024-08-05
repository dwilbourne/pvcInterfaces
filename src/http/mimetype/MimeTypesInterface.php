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
     * getMimeTypeName
     * @param string $fileExt
     * @return ?string
     */
    public function getMimeTypeNameFromFileExtension(string $fileExt): ?string;

    /**
     * getFileExtensions
     * @param string $mimeTypeName
     * @return array<string>
     */
    public function getFileExtensionsFromMimeTypeName(string $mimeTypeName): array;

    /**
     * isValidMimeType
     * @param string $mimeTypeName
     * @return bool
     */
    public function isValidMimeTypeName(string $mimeTypeName): bool;
}
