<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\storage\filesys;

/**
 * Class FileFilterInterface
 */
interface FileFilterInterface
{
    /**
     * testFile
     * @param string $fileName
     * @return bool
     *
     * return true if the file should be included in the result set.
     */
    public function testFile(string $fileName): bool;
}
