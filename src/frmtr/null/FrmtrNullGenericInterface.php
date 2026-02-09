<?php

namespace pvc\interfaces\frmtr\null;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * @extends FrmtrGenericInterface<null>
 */
interface FrmtrNullGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param null $value
     *
     * @return string
     */
    public function format($value): string;
}