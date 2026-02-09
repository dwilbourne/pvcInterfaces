<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\text;

use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * Interface FrmtrTextInterface
 *
 * @extends FrmtrGenericInterface<string>
 */
interface FrmtrTextInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param string $value
     * @return string
     */
    public function format($value): string;
}
