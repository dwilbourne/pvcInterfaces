<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeSingleValueInterface
 * @extends AttributeNotVoidInterface<string>
 */
interface AttributeSingleValueInterface extends AttributeNotVoidInterface
{
    /**
     * setValue
     * @param string $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return string|null
     */
    public function getValue(): ?string;
}
