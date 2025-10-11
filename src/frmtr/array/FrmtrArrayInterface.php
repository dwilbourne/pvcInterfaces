<?php

namespace pvc\interfaces\frmtr\array;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * converts an array to a string
 * @extends FrmtrInterface<array>
 */
interface FrmtrArrayInterface extends FrmtrInterface
{
    /**
     * format
     *
     * @param array<mixed>  $value
     *
     * @return string
     * flattens (destructures) an array into a string
     */
    public function format($value): string;
}