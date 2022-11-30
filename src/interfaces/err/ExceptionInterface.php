<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

/**
 * Interface ExceptionInterface
 * @package pvc\interfaces\err
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
