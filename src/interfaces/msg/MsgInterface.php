<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface MsgInterface
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
