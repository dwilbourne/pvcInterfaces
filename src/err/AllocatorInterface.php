<?php

namespace pvc\interfaces\err;

interface AllocatorInterface
{
    /**
     * @param  array<mixed, int>  $existing
     * @return int
     *
     * given an array of existing integer values, return a new integer value that does
     * not already exist in the array
     */
    public function allocate(array $existing): int;
}