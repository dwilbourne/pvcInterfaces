<?php

namespace pvc\interfaces\err;

interface XCodesInterface
{
    /**
     * @param  string  $namespace
     * @param  class-string  $className
     * @return int|false
     */
    public function getXCode(string $namespace, string $className): int|false;

}