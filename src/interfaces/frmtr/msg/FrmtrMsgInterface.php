<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Interface FrmtrMsgInterface
 */
interface FrmtrMsgInterface extends FrmtrInterface
{
    /**
     * format
     * @param MsgInterface $msg
     * @return string
     */
    public function format(MsgInterface $msg): string;
}
