<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrIntegerInterface extends FrmtrInterface
{
    public function format(int $value) : string;
}