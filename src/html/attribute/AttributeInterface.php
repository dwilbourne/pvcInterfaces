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
     * @return DataType
     *
     */
    public function getDataType(): DataType;

    /**
     * @param  ValueType  ...$values
     *
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * @return array<ValueType>|ValueType
     */
    public function getValue(): array|bool|int|string;

    /**
     * render
     *
     * @return string
     */
    public function render(): string;
}
