<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\storage\filesys;

/**
 * Class FileInfoFactoryInterface
 */
interface FileInfoFactoryInterface
{
    /**
     * makeFileEntry
     * @return FileInfoInterface
     */
    public function makeFileInfo(): FileInfoInterface;
}
