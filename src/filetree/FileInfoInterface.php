<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\filetree;

/**
 * Class FileInfoInterface
 */
interface FileInfoInterface
{
    /**
     * @return string
     * returns the full path and filename plus extension
     */
    public function getPathName(): string;
}
