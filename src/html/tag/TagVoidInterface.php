<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagVoidInterface
 * @template ValueType
 */
interface TagVoidInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setName
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);

    /**
     * setAttribute
     * @param AttributeInterface $attribute
     */
    public function setAttribute(AttributeInterface $attribute): void;

    /**
     * setCustomData
     * @param string $name
     * @param string $value
     * @param ValTesterInterface<string> $tester
     * @return mixed
     */
    public function setCustomData(string $name, string $value, ValTesterInterface $tester);

    /**
     * getAttribute
     * @param string $name
     * @return AttributeInterface<ValueType>|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * getAttributes
     * @return array<AttributeInterface<ValueType>>
     */
    public function getAttributes(int $attributeTypes): array;

    /**
     * removeAttribute
     * @param string $name
     */
    public function removeAttribute(string $name): void;

    /**
     * generateOpeningTag
     * @return string
     */
    public function generateOpeningTag(): string;
}
