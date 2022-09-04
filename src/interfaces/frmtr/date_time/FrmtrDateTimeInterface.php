<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\date_time;

use DateTime;
use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrDateTimeInterface extends FrmtrInterface
{
    public function format(DateTime $value) : string;
}