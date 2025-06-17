<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 * @phpstan-type ValueType int|string|bool
 */
interface AttributeInterface
{
    /**
     * @param  ValueType  ...$values
     *
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * getValue
     *
     * @return ValueType
     */
    public function getValue();

    /**
     * @return void
     */
    public function unsetValue(): void;

    /**
     * render
     *
     * @return string
     */
    public function render(): string;
}
