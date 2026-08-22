<?php

namespace pvc\interfaces\frmtr\array;

use pvc\interfaces\frmtr\FrmtrGenericInterface;


/**
 * converts an array to a string
 * @extends FrmtrGenericInterface<array<mixed>>
 */
interface FrmtrArrayInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param array<mixed>  $value
     * @return string
     * flattens (destructures) an array into a string.
     */
    public function format($value): string;
}