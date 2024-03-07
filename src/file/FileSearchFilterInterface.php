<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\file;

/**
 * Class FileSearchFilterInterface
 */
interface FileSearchFilterInterface
{
    /**
     * skipFile
     * @param string $filePath
     * @return bool
     * returns true if you are NOT to include the file in the search
     */
    public function skipFile(string $filePath): bool;
}
