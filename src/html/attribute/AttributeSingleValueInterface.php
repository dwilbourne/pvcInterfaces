<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeSingleValueInterface
 */
interface AttributeSingleValueInterface extends AttributeWithValueInterface
{
    /**
     * getValue
     * @return string
     */
    public function getValue(): string;
}
