<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeMultiValueInterface
 */
interface AttributeMultiValueInterface extends AttributeInterface
{
    /**
     * setValue
     * @param array<string> $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return array<string>
     */
    public function getValue(): array;
}
