<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\factory\HtmlFactoryInterface;

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
     * setHtmlFactory
     * @param HtmlFactoryInterface $htmlFactory
     */
    public function setHtmlFactory(HtmlFactoryInterface $htmlFactory): void;

    /**
     * getHtmlFactory
     * @return HtmlFactoryInterface
     */
    public function getHtmlFactory(): HtmlFactoryInterface;

    /**
     * setAllowedAttributes
     * @param array<string> $allowedAttributeIds
     */
    public function setAllowedAttributeIds(array $allowedAttributeIds): void;

    /**
     * getAllowedAttributes
     * @return array<string>
     */
    public function getAllowedAttributeIds(): array;

    /**
     * setAttribute
     * @param string|AttributeInterface $attributeId
     * @param string ...$values
     * @return TagVoidInterface
     */
    public function setAttribute(string|AttributeInterface $attributeId, ...$values): TagVoidInterface;

    /**
     * getAttribute
     * @param string $attributeId
     * @return AttributeInterface|null
     */
    public function getAttribute(string $attributeId): ?AttributeInterface;

    /**
     * setCustomData
     * @param string|AttributeInterface $attribute
     * @return TagVoidInterface
     */
    public function setCustomData(string|AttributeInterface $attribute): TagVoidInterface;

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
     * render
     * @return string
     */
    public function generateOpeningTag(): string;
}
