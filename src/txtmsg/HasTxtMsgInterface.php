<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\txtmsg;

interface HasTxtMsgInterface
{
    public function getTxtMsg(): string;
}