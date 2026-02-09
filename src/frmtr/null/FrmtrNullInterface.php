<?php

namespace pvc\interfaces\frmtr\null;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * @extends FrmtrGenericInterface<null>
 */
interface FrmtrNullInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param null $value
     *
     * @return string
     */
    public function format($value): string;
}