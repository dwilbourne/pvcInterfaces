<?php

namespace pvc\interfaces\filetree;

interface FileSrcInterface
{
    /**
     * @return bool
     */
    public function isFolder(string $fileId): bool;

    /**
     * @param string $fileId
     * @return array<FileInfoInterface>
     */
    public function getChildrenArray(string $fileId): array;
}