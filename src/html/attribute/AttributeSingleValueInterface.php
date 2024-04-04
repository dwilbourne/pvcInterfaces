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
     * setValue
     * @param string $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return string|null
     */
    public function getValue(): mixed;
}
