<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\factory\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\factory\HtmlFactoryInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagVoidInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
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
     * @param HtmlFactoryInterface<VendorSpecificDefinition> $htmlFactory
     */
    public function setHtmlFactory(HtmlFactoryInterface $htmlFactory): void;

    /**
     * getHtmlFactory
     * @return HtmlFactoryInterface<VendorSpecificDefinition>
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
     * isAllowedAttribute
     * @param AttributeInterface $attribute
     * @return bool
     *
     * it turns out to be easier to work with an actual attribute rather than a definition.  This is true for two
     * reasons: 1) there are global attributes which are always allowed and 2) the attribute could be an Event, which
     * is also always allowed.
     */
    public function isAllowedAttribute(AttributeInterface $attribute): bool;

    /**
     * setAttribute
     * @param string|AttributeInterface $attribute
     * @param string ...$values
     * @return TagVoidInterface<VendorSpecificDefinition>
     */
    public function setAttribute(string|AttributeInterface $attribute, ...$values): TagVoidInterface;

    /**
     * $defId
     * @param string $defId
     * @return AttributeInterface|null
     */
    public function getAttribute(string $defId): ?AttributeInterface;

    /**
     * setCustomData
     * @param string|AttributeCustomDataInterface $attribute
     * @param string $value
     * @param ValTesterInterface<string>|null $valTester
     * @return TagVoidInterface<VendorSpecificDefinition>
     */
    public function setCustomData(
        string|AttributeCustomDataInterface $attribute,
        string $value,
        ValTesterInterface $valTester = null
    ): TagVoidInterface;

    /**
     * setEvent
     * @param EventInterface $event
     * @return TagVoidInterface<VendorSpecificDefinition>
     */
    public function setEvent(EventInterface $event): TagVoidInterface;

    /**
     * getAttributes
     * @param int $attributeTypes
     * @return array<AttributeInterface>
     */
    public function getAttributes(int $attributeTypes): array;

    /**
     * removeAttribute
     * @param string $defId
     */
    public function removeAttribute(string $defId): void;

    /**
     * render
     * @return string
     */
    public function generateOpeningTag(): string;
}
