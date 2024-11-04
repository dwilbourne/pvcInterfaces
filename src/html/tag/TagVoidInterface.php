<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\factory\HtmlFactoryInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagVoidInterface
 * @noinspection PhpCSValidationInspection
 */
interface TagVoidInterface
{
    /**
     * setDefId
     * @param string $defId
     * @return mixed
     */
    public function setDefId(string $defId);

    /**
     * getDefId
     * @return string
     */
    public function getDefId(): string;

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
     * setAllowedAttributeDefIds
     * @param array<string> $allowedAttributeDefIds
     */
    public function setAllowedAttributeDefIds(array $allowedAttributeDefIds): void;

    /**
     * getAllowedAttributeDefIds
     * @return array<string>
     */
    public function getAllowedAttributeDefIds(): array;

    /**
     * isAllowedAttributeDefId
     * @return bool
     */
    public function isAllowedAttributeDefId(): bool;

    /**
     * setAttribute
     * @param string|AttributeInterface $attribute
     * @param string ...$values
     * @return TagVoidInterface
     */
    public function setAttribute(string|AttributeInterface $attribute, ...$values): TagVoidInterface;

    /**
     * $attributeName
     * @param string $attributeName
     * @return AttributeInterface|null
     */
    public function getAttribute(string $attributeName): ?AttributeInterface;

    /**
     * setCustomData
     * @param string|AttributeCustomDataInterface $attribute
     * @param string|null $value
     * @param ValTesterInterface<string>|null $valTester
     * @return TagVoidInterface
     */
    public function setCustomData(
        string|AttributeCustomDataInterface $attribute,
        string $value = null,
        ValTesterInterface $valTester = null
    ): TagVoidInterface;

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
