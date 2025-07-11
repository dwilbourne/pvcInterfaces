<?php

namespace pvc\interfaces\html\attribute;

/**
 * @phpstan-type ValueType int|string|bool
 */
interface AttributeSingleValueInterface extends AttributeInterface
{
    /**
     * getValue
     *
     * @return ValueType
     */
    public function getValue();
}