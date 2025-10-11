<?php

namespace pvc\interfaces\frmtr\resource;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * @extends FrmtrInterface<resource>
 */
interface FrmtrResourceInterface extends FrmtrInterface
{
    /**
     * format
     * @param resource $value
     * @return string
     */
    public function format($value): string;
}