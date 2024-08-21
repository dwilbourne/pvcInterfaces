<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute\factory;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\AttributeSingleValueInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeFactoryInterface
 * @template ValueType
 */
interface AttributeFactoryInterface
{
    /**
     * makeAttribute
     * This makes an empty attribute (no value)
     * @param string $attributeName
     * @return AttributeInterface<ValueType>|EventInterface
     */
    public function makeAttribute(string $attributeName): AttributeInterface|EventInterface;

    /**
     * makeCustomData
     * @param string $name
     * @param ValTesterInterface<string> $tester
     * @return AttributeSingleValueInterface
     */
    public function makeCustomData(
        string $name,
        ValTesterInterface $tester
    ): AttributeSingleValueInterface;
}
