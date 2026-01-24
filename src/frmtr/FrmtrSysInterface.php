<?php

namespace pvc\interfaces\frmtr;

/**
 * Interface FrmtrSysInterface
 * @template DataType
 *
 * no locale for the base formatter.  It is here so that we can write formatters
 * for internal (system) data.  Used, for example, in writing cookies and querystrings
 */

interface FrmtrSysInterface
{
    /**
     * format
     * @param DataType $value
     * @return string
     */
    public function format($value): string;
}