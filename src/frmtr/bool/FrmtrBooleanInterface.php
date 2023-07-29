<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\bool;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Interface FrmtrBooleanInterface
 */
interface FrmtrBooleanInterface extends FrmtrInterface
{
    /**
     * format
     * @param bool $value
     * @return string
     */
    public function format(bool $value): string;
}
