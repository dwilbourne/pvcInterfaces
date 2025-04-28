<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeSingleValueInterface
 */
interface AttributeSingleValueInterface extends AttributeInterface
{
    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;

    /**
     * getValue
     * @return string
     */
    public function getValue(): string;
}
