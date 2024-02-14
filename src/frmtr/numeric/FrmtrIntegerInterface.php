<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Interface FrmtrIntegerInterface
 * @extends FrmtrInterface<int>
 */
interface FrmtrIntegerInterface extends FrmtrInterface
{
    /**
     * format
     * @param int $value
     * @return string
     */
    public function format($value): string;
}
