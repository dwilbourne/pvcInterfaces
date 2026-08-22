<?php

namespace pvc\interfaces\frmtr\array;

/**
 * Interface ArrayFlattenerInterface
 */
interface ArrayFlattenerInterface
{
    /**
     * @param  array<string>  $array
     * @return string
     */
    public function flatten(array $array): string;
}