<?php

namespace pvc\interfaces\frmtr\array;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * @extends FrmtrInterface<array<mixed>>
 */
interface FrmtrArrayInterface extends FrmtrInterface
{
    /**
     * format
     * @param array<mixed> $value
     *
     * @return string
     */
    public function format($value): string;
}