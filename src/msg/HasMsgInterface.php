<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * HasMsgInterface defines the operations that objects must implement when they contain a Msg object.
 */
interface HasMsgInterface
{
    /**
     * getMsg
     * @return MsgInterface|null
     */
    public function getMsg(): ?MsgInterface;
}
