<?php

namespace pvc\interfaces\err;

interface AllocatorInterface
{
    /**
     * @param  XCodeDataType  $dataType
     * @return int
     *
     * given an array of existing integer values, return a new integer value that does
     * not already exist in the array
     */
    public function allocate(XCodeDataType $dataType): int;
}