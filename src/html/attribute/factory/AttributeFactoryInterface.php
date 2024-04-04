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
 * @template ValueType of AttributeInterface
 */
interface AttributeFactoryInterface
{
    /**
     * makeAttribute
     * This makes an empty attribute (no value))
     * @param string $attributeName
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeName): AttributeInterface;

    /**
     * makeCustomDataAttribute
     * @param string $name
     * @param mixed $value
     * @param ValTesterInterface<string> $tester
     * @return AttributeSingleValueInterface
     */
    public function makeCustomDataAttribute(
        string $name,
        mixed $value,
        ValTesterInterface $tester
    ): AttributeSingleValueInterface;

    /**
     * makeEvent
     * @param string $eventName
     * @return EventInterface
     */
    public function makeEvent(string $eventName): EventInterface;
}
