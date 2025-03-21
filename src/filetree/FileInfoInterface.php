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
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * @return string
     */
    public function getFileId(): string;
}
