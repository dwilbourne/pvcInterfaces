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

    /**
     * @param  ?string  $namespace
     * @return array<string, int>
     */
    public function getXCodes(?string $namespace = null): array;
}