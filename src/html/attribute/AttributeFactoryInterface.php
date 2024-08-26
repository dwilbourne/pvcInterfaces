<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeFactoryInterface
 * @template ValueType
 */
interface AttributeFactoryInterface
{
    /**
     * makeAttribute
     * @param string $attributeName
     * @return AttributeInterface<ValueType>
     */
    public function makeAttribute(string $attributeName): AttributeInterface;

    /**
     * makeCustomData
     * @param string $name
     * @param ValTesterInterface<ValueType> $valueTester
     * @return AttributeInterface<ValueType>
     */
    public function makeCustomData(
        string $name,
        ValTesterInterface $valueTester
    ): AttributeInterface;
}
