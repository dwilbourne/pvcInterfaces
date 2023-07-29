<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\regex;

use pvc\interfaces\msg\HasMsgInterface;

interface RegexInterface extends HasMsgInterface
{
    public function getPattern(): string;

    public function getLabel(): string;

    public function match(string $subject, bool $matchAll = false): bool;
}