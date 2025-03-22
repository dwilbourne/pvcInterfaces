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
     * @param int $mimeTypeDetection
     * @return void
     * gives you control over whether you want to inspect the contents of the file, simply use the file extension,
     * or both.  If both, throws an exception if the file extension does not match what is detected in the contents.
     */
    public function setMimeTypeDetection(int $mimeTypeDetection): void;

    /**
     * @param string $filePath
     * @return string
     * detects the mime type based on the contents, the file extension or both
     */
    public function detect(string $filePath): string;
}
