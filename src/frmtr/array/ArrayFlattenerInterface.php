<?php

namespace pvc\interfaces\frmtr\array;

interface ArrayFlattenerInterface
{
    /**
     * format
     * @param array<mixed>  $value
     * @return string
     * flattens (destructures) an array into a string.
     */
    public function format($value): string;

}