<?php

namespace pvc\interfaces\frmtr\object;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * @extends FrmtrGenericInterface<object>
 */
interface FrmtrObjectGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param object $value
     * @return string
     */
    public function format($value): string;

}