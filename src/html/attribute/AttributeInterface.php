<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 * @template ValueType
 * @extends AttributeAbstractInterface<ValueType>
 *
 * This interface is meant to distinguish between events and attributes.  Events inherit from AttributeAbstractInterface
 * as well.  All attributes inherit from this.  Attributes have values, events have scripts
 */
interface AttributeInterface extends AttributeAbstractInterface
{
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
