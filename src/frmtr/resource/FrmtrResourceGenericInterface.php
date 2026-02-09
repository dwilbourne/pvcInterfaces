<?php

namespace pvc\interfaces\frmtr\resource;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * @extends FrmtrGenericInterface<resource>
 */
interface FrmtrResourceGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param resource $value
     * @return string
     */
    public function format($value): string;
}