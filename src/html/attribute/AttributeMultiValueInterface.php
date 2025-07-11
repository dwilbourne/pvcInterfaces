<?php

namespace pvc\interfaces\html\attribute;

/**
 * @phpstan-type ValueType int|string|bool
 */
interface AttributeMultiValueInterface extends AttributeInterface
{
    /**
     * getValues
     *
     * @return array<ValueType>
     */
    public function getValues(): array;

}