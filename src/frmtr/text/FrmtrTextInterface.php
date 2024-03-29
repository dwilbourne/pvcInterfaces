<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\text;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Interface FrmtrTextInterface
 * @extends FrmtrInterface<string>
 */
interface FrmtrTextInterface extends FrmtrInterface
{
    /**
     * format
     * @param string $value
     * @return string
     */
    public function format($value): string;
}
