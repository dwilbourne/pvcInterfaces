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
     * getValue
     * @return array<string>
     */
    public function getValue(): array;

    /**
     * setValues
     * @param string ...$values
     */
    public function setValues(...$values): void;

    /**
     * getValues
     * @return array<string>
     */
    public function getValues(): array;
}
