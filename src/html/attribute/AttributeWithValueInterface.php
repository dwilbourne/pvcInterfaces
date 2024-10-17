<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeWithValueInterface
 * @template ValueType
 *
 * ValueType and ValTesterType would be the same, but multivalued attributes store values as an array and
 * so in that case the tester type is for an element of the array and the value type is the array.
 *
 * There are no publicly available setters for the name or the value tester of the attribute.  This interface
 * presumes they are set at construction and are immutable since changing one without the other could lead to
 * an invalid object state.
 */
interface AttributeWithValueInterface extends AttributeVoidInterface
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

    /**
     * getValue
     * @return ValueType
     */
    public function getValue(): mixed;

    /**
     * setValue
     * @param  ValueType $value
     */
    public function setValue(mixed $value): void;
}
