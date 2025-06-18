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
     * @return string
     */
    public function getName(): string;

    /**
     * @param  ValueType  ...$values
     *
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * getValue
     *
     * @return array<ValueType>
     */
    public function getValue();

    /**
     * render
     *
     * @return string
     */
    public function render(): string;
}
