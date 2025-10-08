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
     * @return string
     * flattens (destructures) an array into a string
     */
    public function format(array $value): string;
}