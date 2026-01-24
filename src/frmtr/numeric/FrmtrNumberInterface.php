<?php

declare(strict_types=1);

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * @extends FrmtrInterface<int|float>
 * numeric formatters (ints, floats, currency) can all take either ints or floats as arguments
 */
interface FrmtrNumberInterface extends FrmtrInterface
{
    /**
     * format
     * @param int|float $value
     * @return string
     */
    public function format($value): string;

}