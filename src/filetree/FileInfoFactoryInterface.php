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
    public static function makeFileInfo(): FileInfoInterface;
}
