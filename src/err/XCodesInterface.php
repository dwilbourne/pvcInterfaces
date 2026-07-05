<?php

namespace pvc\interfaces\err;

interface XCodesInterface
{
    /**
     * @param  class-string  $classString
     * @return int|false
     */
    public static function getXCode(string $classString) : int|false;

}