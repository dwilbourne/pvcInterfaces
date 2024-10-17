<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;

/**
 * Class TagVoidInterface
 * @template ValueType
 * @template ValTesterType
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
     * setAllowedAttributes
     * @param array<string> $allowedAttributes
     */
    public function setAllowedAttributes(array $allowedAttributes): void;

    /**
     * getAllowedAttributes
     * @return array<string>
     */
    public function getAllowedAttributes(): array;

    /**
     * setAttribute
     * @param AttributeInterface<ValueType, ValTesterType> $attribute
     * @return TagVoidInterface<ValueType, ValTesterType>
     */
    public function setAttribute(AttributeInterface $attribute): TagVoidInterface;

    /**
     * getAttribute
     * @param string $name
     * @return AttributeInterface<ValueType, ValTesterType>|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * getAttributes
     * @return array<AttributeInterface<ValueType, ValTesterType>>
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
