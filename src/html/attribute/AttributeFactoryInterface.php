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
 * @template ValTesterType
 */
interface AttributeFactoryInterface
{
    /**
     * makeAttribute
     * @param string $attributeName
     * @return AttributeInterface<ValueType, ValTesterType>
     */
    public function makeAttribute(string $attributeName): AttributeInterface;

    /**
     * makeCustomData
     * @param string $name
     * @param ValTesterInterface<ValTesterType>|null $valueTester
     * @return AttributeInterface<ValueType, ValTesterType>
     */
    public function makeCustomData(
        string $name,
        ValTesterInterface $valueTester = null
    ): AttributeInterface;
}
