<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html;

use pvc\interfaces\displayable\DisplayableInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagInterface
 */
interface TagInterface extends DisplayableInterface
{
    public function display(): string;

    public function setAttribute(string $attributeName, string $value): void;

    public function setCustomData(string $attributeName, string $value, ValTesterInterface $tester = null): void;
}
