<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\msg\MsgInterface;

interface FrmtrMsgInterface extends FrmtrInterface
{
    public function format(MsgInterface $msg) : string;
}