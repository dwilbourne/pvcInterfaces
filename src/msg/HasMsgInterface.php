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
     * setMsg
     * @param MsgInterface $msg
     */
    public function setMsg(MsgInterface $msg): void;

    /**
     * getMsg
     * @return MsgInterface
     */
    public function getMsg(): MsgInterface;
}
