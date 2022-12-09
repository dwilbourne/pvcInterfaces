<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

/**
 * Interface ExceptionInterface
 */
interface ExceptionInterface
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
