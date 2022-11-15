<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface MsgInterface
{
    public function getMsgId(): string;

    public function getParameters(): array;
}
