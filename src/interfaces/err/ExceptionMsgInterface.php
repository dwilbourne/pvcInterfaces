<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

/**
 * Interface ExceptionMsgInterface
 * @package pvc\interfaces\err
 */
interface ExceptionMsgInterface extends MsgInterface
{
    /**
     * getMsgId
     * @return string
     */
    public function getMsgId(): string;

    /**
     * getParameters
     * @return mixed[]
     */
    public function getParameters(): array;
}
