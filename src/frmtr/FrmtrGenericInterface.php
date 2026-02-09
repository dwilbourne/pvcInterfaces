<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr;

use pvc\interfaces\html\attribute\DataType;

/**
 * Interface FrmtrInterface
 * @template DataType
 */
interface FrmtrGenericInterface extends FrmtrInterface
{
    /**
     * format
     * @param DataType $value
     * @return string
     */
    public function format($value): string;
}
