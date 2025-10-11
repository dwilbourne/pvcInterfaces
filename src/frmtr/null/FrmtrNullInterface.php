<?php

namespace pvc\interfaces\frmtr\null;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * @extends FrmtrInterface<null>
 */
interface FrmtrNullInterface extends FrmtrInterface
{
    /**
     * format
     * @param null $value
     *
     * @return string
     */
    public function format($value): string;
}