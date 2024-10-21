<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeWithValueInterface
 *
 * There are no publicly available setters for the name or the value tester of the attribute.  This interface
 * presumes they are set at construction and are immutable since changing one without the other could lead to
 * an invalid object state.
 */
interface AttributeWithValueInterface extends AttributeInterface
{
    /**
     * setCaseSensitive
     * @param bool $isCaseSensitive
     * @return void
     */
    public function setCaseSensitive(bool $isCaseSensitive): void;

    /**
     * isCaseSensitive
     * @return bool
     */
    public function isCaseSensitive(): bool;

    /**
     * getTester
     * @return ValTesterInterface<string>|null
     */
    public function getTester(): ?ValTesterInterface;
}
