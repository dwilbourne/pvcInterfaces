<?php

namespace pvc\interfaces\err;

interface XCodeAllocatorInterface
{
    /**
     * @param  array<mixed, int>  $existing
     * @return int
     */
    public function allocate(array $existing): int;
}