<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\file;

/**
 * Class FileFilterInterface
 */
interface FileFilterInterface
{
    /**
     * processFile
     * @param string $filePath
     * @return bool
     * returns true if you should include the file in the search results / set of files to process
     */
    public function processFile(string $filePath): bool;
}
