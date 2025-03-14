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
     * getFilePath
     * @return string|null
     */
    public function setFilePath(): ?string;
}
