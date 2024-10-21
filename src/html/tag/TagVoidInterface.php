<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;

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
     * @param AttributeInterface $attribute
     * @return TagVoidInterface
     */
    public function setAttributeObject(AttributeInterface $attribute): TagVoidInterface;

    /**
     * setAttribute
     * @param string $attributeName
     * @param array<string> $values
     * @return TagVoidInterface
     */
    public function setAttribute(string $attributeName, ...$values): TagVoidInterface;

    /**
     * getAttribute
     * @param string $name
     * @return AttributeInterface|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * getAttributes
     * @param int $attributeTypes
     * @return array<AttributeInterface>
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
