<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\filetree;

/**
 * Class FileInfoFactoryInterface
 */
interface FileInfoFactoryInterface
{
    /**
     * @return non-negative-int
     * when making FileInfo objects, this factory needs to be able to supply a unique node for the FileInfo object.
     */
    public static function getNextNodeId(): int;

    /**
     * makeFileInfoObject
     * @return FileInfoInterface
     */
    public static function makeFileInfo(string $fileId): FileInfoInterface;

    /**
     * @return bool
     */
    public function isFolder(string $fileId): bool;

    /**
     * @return bool
     */
    public function isReadable(string $fileId): bool;

    /**
     * @param string $fileId
     * @return array<FileInfoInterface>
     */
    public function getChildrenArray(string $fileId): array;
}
