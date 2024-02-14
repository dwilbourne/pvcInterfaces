<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\date_time;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Class FrmtrTimestampInterface
 * @extends FrmtrInterface<float|int>
 */
interface FrmtrTimestampInterface extends FrmtrInterface
{
    /**
     * format
     * @param float|int $value
     * @return string
     */
    public function format($value): string;
}
