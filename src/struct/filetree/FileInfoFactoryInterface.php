<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\filetree;

/**
 * Class FileInfoFactoryInterface
 */
interface FileInfoFactoryInterface
{
    /**
     * makeFileEntry
     * @return FileInfoInterface
     */
    public function makeFileInfo(string $pathName): FileInfoInterface;
}
