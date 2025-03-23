<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mime;

/**
 * Class MimeTypeInterface
 */
interface MimeTypeInterface
{
    /**
     * setMimeTypeName
     * @param string $mimeTypeName
     */
    public function setMimeTypeName(string $mimeTypeName): void;

    /**
     * getMimeTypeName
     * @return string|null
     * full name of the mime type, e.g. 'application/javascript'
     */
    public function getMimeTypeName(): ?string;

    /**
     * setFileExtensions
     * @param array<string> $fileExtensions
     */
    public function setFileExtensions(array $fileExtensions): void;

    /**
     * getFileExtensions
     * @return array<string>
     * an array of the file extensions associated with this mime type
     */
    public function getFileExtensions(): array;

    /**
     * @param string $filePath
     * @return string
     * detects the mime type based on the contents, the file extension or both
     */
    public function detect(string $filePath, int $detectionMethods): string;
}
