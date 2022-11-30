<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrMsgInterface extends FrmtrInterface
{
    public function format(array $params): string;
}
