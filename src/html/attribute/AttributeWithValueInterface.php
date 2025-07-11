<?php

namespace pvc\interfaces\html\attribute;

/**
 * @phpstan-type ValueType int|string
 */
interface AttributeWithValueInterface extends AttributeInterface
{
    /**
     * @param  ValueType  ...$values
     *
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * @return array<ValueType>|ValueType
     */
    public function getValue();

}