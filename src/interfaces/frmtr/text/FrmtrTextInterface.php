<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\text;

use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrTextInterface extends FrmtrInterface
{
    public function format(string $x) : string;
}