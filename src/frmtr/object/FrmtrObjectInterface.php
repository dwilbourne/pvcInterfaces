<?php

namespace pvc\interfaces\frmtr\object;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * @extends FrmtrInterface<object>
 */
interface FrmtrObjectInterface extends FrmtrInterface
{
    /**
     * format
     * @param object $value
     * @return string
     */
    public function format($value): string;

}