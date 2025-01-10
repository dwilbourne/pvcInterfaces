<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\builder\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\builder\HtmlBuilderInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ElementVoidInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 * @noinspection PhpCSValidationInspection
 */
interface ElementVoidInterface
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
     * setHtmlBuilder
     * @param HtmlBuilderInterface<VendorSpecificDefinition> $htmlBuilder
     */
    public function setHtmlBuilder(HtmlBuilderInterface $htmlBuilder): void;

    /**
     * getHtmlBuilder
     * @return HtmlBuilderInterface<VendorSpecificDefinition>
     */
    public function getHtmlBuilder(): HtmlBuilderInterface;

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
     * getGlobalAttributeDefIds
     * @return array<string>
     */
    public function getGlobalAttributeDefIds(): array;

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
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setAttribute(string|AttributeInterface $attribute, ...$values): ElementVoidInterface;

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
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setCustomData(
        string|AttributeCustomDataInterface $attribute,
        string $value,
        ValTesterInterface $valTester = null
    ): ElementVoidInterface;

    /**
     * setEvent
     * @param EventInterface $event
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setEvent(EventInterface $event): ElementVoidInterface;

    /**
     * getAttributes
     * @param int $defTypeMask
     * @return array<AttributeInterface>
     */
    public function getAttributes(int $defTypeMask): array;

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
