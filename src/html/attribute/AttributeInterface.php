<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeInterface
 * @template ValueType
 * @template ValTesterType
 *
 * ValueType and ValTesterType would be the same, but multivalued attributes store values as an array and
 * so in that case the tester type is for an element of the array and the value type is the array
 */
interface AttributeInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setName
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * setTester
     * @param ValTesterInterface<ValTesterType> $tester
     */
    public function setTester(ValTesterInterface $tester): void;

    /**
     * getTester
     * @return ValTesterInterface<ValTesterType>|null
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

    /**
     * render
     * @return string
     */
    public function render(): string;
}
