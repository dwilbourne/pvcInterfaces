<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 * @template AttributeValueType
 */
interface AttributeInterface
{
    /**
     * @param  AttributeValueType  ...$values
     *
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * getValue
     *
     * @return AttributeValueType
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
