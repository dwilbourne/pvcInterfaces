<?php

namespace pvc\interfaces\err;

interface AllocatorInterface
{
    /**
     * @param  XCodePrefixType  $dataType
     * @return int
     *
     * return a new prefix for the specified prefix type
     */
    public function allocatePrefix(XCodePrefixType $dataType): int;

    /**
     * @param  string  $namespace
     * @return int
     *
     * return a new exception code for the specified namespace
     */
    public function allocateCode(string $namespace): int;
}