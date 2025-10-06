<?php

namespace pvc\interfaces\frmtr\array;

/**
 * converts an array to a string
 */

interface FrmtrArrayInterface
{
    /**
     * format
     * @param array<mixed> $value
     *
     * @return string
     */
    public function format($value): string;
}