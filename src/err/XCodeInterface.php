<?php

namespace pvc\interfaces\err;

interface XCodeInterface
{
    /**
     * @param  string  $namespace
     * @param  class-string  $className
     * @return int
     */
    public function getXCode(string $namespace, string $className): int;
}