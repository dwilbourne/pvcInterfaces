<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\bool;

use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrBooleanInterface extends FrmtrInterface
{
    public function format(bool $value) : string;
}