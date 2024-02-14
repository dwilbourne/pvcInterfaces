<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\date_time;

use DateTime;
use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Interface FrmtrDateTimeInterface
 * @extends FrmtrInterface<DateTime>
 */
interface FrmtrDateTimeInterface extends FrmtrInterface
{
    /**
     * format
     * @param DateTime $value
     * @return string
     */
    public function format($value): string;
}
