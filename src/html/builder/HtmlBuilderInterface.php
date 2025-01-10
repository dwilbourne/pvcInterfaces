<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\builder;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\builder\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\builder\definitions\DefinitionType;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\element\ElementVoidInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class HtmlBuilderInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 */
interface HtmlBuilderInterface
{
    /**
     * getDefinitionTypes
     * @param DefinitionType|null $typeFilter
     * @return array<string, DefinitionType>
     */
    public function getDefinitionTypes(DefinitionType $typeFilter = null): array;

    /**
     * getDefinitionType
     * @param string $defId
     * @return DefinitionType|null
     */
    public function getDefinitionType(string $defId): ?DefinitionType;

    /**
     * getDefinitionIds
     * @param DefinitionType|null $type
     * @return array<string>
     */
    public function getDefinitionIds(DefinitionType $type = null): array;

    /**
     * makeAttribute
     * @param string $attributeName
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeName): AttributeInterface;

    /**
     * makeElement
     * @param string $elementName
     * @return ElementVoidInterface<VendorSpecificDefinition>|ElementInterface<VendorSpecificDefinition>
     */
    public function makeElement(string $elementName): ElementVoidInterface|ElementInterface;

    /**
     * makeEvent
     * @param string $eventName
     * @return EventInterface
     */
    public function makeEvent(string $eventName): EventInterface;

    /**
     * makeCustomData
     * @param string $attributeName
     * @param string $value
     * @param ValTesterInterface<string>|null $valTester
     * @return AttributeCustomDataInterface
     */
    public function makeCustomData(
        string $attributeName,
        string $value,
        ValTesterInterface $valTester = null
    ): AttributeCustomDataInterface;
}
