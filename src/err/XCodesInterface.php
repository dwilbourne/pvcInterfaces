<?php

namespace pvc\interfaces\err;

interface XCodesInterface
{
    /**
     * @param  class-string  $className
     * @return int|false
     */
    public static function getXCode(string $className): int|false;

}