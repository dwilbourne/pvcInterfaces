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
     * @return array
     */
    public function getChhildrenArray(string $fileId): array;
}