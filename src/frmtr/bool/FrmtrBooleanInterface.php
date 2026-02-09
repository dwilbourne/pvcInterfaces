<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\bool;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * Interface FrmtrBooleanInterface
 *
 * @extends FrmtrGenericInterface<bool>
 */
interface FrmtrBooleanInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param bool $value
     * @return string
     */
    public function format($value): string;
}
