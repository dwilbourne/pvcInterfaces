<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\date_time;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * Class FrmtrTimestampInterface
 *
 * @extends FrmtrGenericInterface<float|int>
 */
interface FrmtrTimestampGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param float|int $value
     * @return string
     */
    public function format($value): string;
}
