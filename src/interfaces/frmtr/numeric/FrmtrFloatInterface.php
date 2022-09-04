<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrFloatInterface extends FrmtrInterface
{
    public function format(float $value) : string;
}