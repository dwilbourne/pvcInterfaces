<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\storage\filesys;

/**
 * Class FileEntryInterface
 *
 * One can imagine a lot of permutations of a file entry type of object, anything from the most bare-bones object
 * that just contains the filepath to something as extensive as splFileInfo or splFileObject.  This interface is
 * designed to mandate only the most basic of operations, ust setting and getting the filepath string itself.
 */
interface FileEntryInterface
{
    /**
     * getFilePath
     * @return string|null
     */
    public function getFilePath(): ?string;
}
