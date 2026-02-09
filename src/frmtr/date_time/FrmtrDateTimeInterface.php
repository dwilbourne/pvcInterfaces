<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\date_time;

use DateTime;
use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * Interface FrmtrDateTimeInterface
 *
 * @extends FrmtrGenericInterface<DateTime>
 */
interface FrmtrDateTimeInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param DateTime $value
     * @return string
     */
    public function format($value): string;
}
