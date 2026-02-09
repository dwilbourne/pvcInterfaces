<?php

declare(strict_types=1);

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * @extends FrmtrGenericInterface<int|float>
 * numeric formatters (ints, floats, currency) can all take either ints or floats as arguments
 */
interface FrmtrNumberInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param int|float $value
     * @return string
     */
    public function format($value): string;

}