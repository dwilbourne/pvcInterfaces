<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeVoidInterface;

/**
 * Class TagVoidInterface
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
     * setAttributeObject
     * @param AttributeVoidInterface $attribute
     * @return TagVoidInterface
     */
    public function setAttributeObject(AttributeVoidInterface $attribute): TagVoidInterface;

    /**
     * setAttribute
     * @param string $attributeName
     * @param array<string> $value
     * @return TagVoidInterface
     */
    public function setAttribute(string $attributeName, ...$values): TagVoidInterface;

    /**
     * getAttribute
     * @param string $name
     * @return AttributeVoidInterface|null
     */
    public function getAttribute(string $name): ?AttributeVoidInterface;

    /**
     * getAttributes
     * @param int $attributeTypes
     * @return array<AttributeVoidInterface>
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
