<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\frmtr\FrmtrGenericInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Interface FrmtrMsgInterface
 *
 * @extends FrmtrGenericInterface<MsgInterface>
 */
interface FrmtrMsgGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param MsgInterface $value
     * @return string
     */
    public function format($value): string;
}
