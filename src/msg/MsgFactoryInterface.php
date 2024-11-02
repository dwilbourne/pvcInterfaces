<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Class MsgFactoryInterface
 */
interface MsgFactoryInterface
{
    /**
     * makeMsg
     * @return MsgInterface
     */
    public function makeMsg(): MsgInterface;
}
