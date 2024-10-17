<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeMultiValueInterface
 */
interface AttributeMultiValueInterface extends AttributeWithValueInterface
{
    /**
     * setValues
     * @param array<string> $values
     */
    public function setValues(array $values): void;

    /**
     * getValues
     * @return array<string>
     */
    public function getValues(): array;
}
