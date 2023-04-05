<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\regex;

use pvc\interfaces\msg\HasMsgInterface;

interface RegexInterface extends HasMsgInterface
{
    public function match(string $subject, bool $matchAll = false): bool;
}