<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mime;

/**
 * Class MimeTypesInterface
 */
interface MimeTypesInterface
{
    /**
     * @param string $mimeTypeName
     * @return MimeTypeInterface|null
     * returns a MimeType object from the corresponding name
     */
    public function getMimeType(string $mimeTypeName): ?MimeTypeInterface;

    /**
     * getMimeTypeNameFromFileExtension
     * @param string $fileExt
     * @return ?string
     */
    public function getMimeTypeNameFromFileExtension(string $fileExt): ?string;

    /**
     * getFileExtensionsFromMimeTypeName
     * @param string $mimeTypeName
     * @return array<string>
     */
    public function getFileExtensionsFromMimeTypeName(string $mimeTypeName): array;

    /**
     * isValidMimeTypeName
     * @param string $mimeTypeName
     * @return bool
     */
    public function isValidMimeTypeName(string $mimeTypeName): bool;

    /**
     * isValidMimeTypeFileExtension
     * @param string $fileExt
     * @return bool
     */
    public function isValidMimeTypeFileExtension(string $fileExt): bool;

    /**
     * @param string $filePath
     * @return MimeTypeInterface
     * detects the mime type based on the contents, the file extension or both
     */
    public function detect(string $filePath, int $detectionMethods): MimeTypeInterface;
}
