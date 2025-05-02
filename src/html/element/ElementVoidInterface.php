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

/**
 * Class ElementVoidInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 * @noinspection PhpCSValidationInspection
 */
interface ElementVoidInterface
{
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
     * setAttribute
     * @param string $name
     * @param string ...$values
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setAttribute(string $name, ...$values): ElementVoidInterface;

    /**
     * @param string $name
     * @return AttributeInterface
     * returns the attribute object backing the attribute name
     */
    public function getAttribute(string $name): AttributeInterface;

    /**
     * setCustomData
     * @param AttributeCustomDataInterface $attribute
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setCustomData(
        AttributeCustomDataInterface $attribute
    ): ElementVoidInterface;

    /**
     * @param  ?string  $customAttributeName
     * @return AttributeCustomDataInterface|array<AttributeCustomDataInterface>
     */
    public function getCustomData(?string $customAttributeName): array|AttributeCustomDataInterface;

    /**
     * setEvent
     * @param EventInterface $event
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setEvent(EventInterface $event): ElementVoidInterface;

    /**
     * @param  string  $eventName
     * @return EventInterface
     */
    public function getEvent(string $eventName): EventInterface;
    /**
     * getAttributes
     * @return array<string, AttributeInterface>
     */
    public function getAttributes(): array;

    /**
     * @return array<string, EventInterface>
     */
    public function getEvents(): array;

    /**
     * removeAttribute
     * @param string $attributeName
     */
    public function removeAttribute(string $attributeName): void;

    /**
     * @param  string  $eventName
     * @return void
     */
    public function removeEvent(string $eventName): void;

    /**
     * @param  string  $customAttributeName
     * @return void
     */
    public function removeCustomData(string $customAttributeName): void;

    /**
     * render
     * @return string
     */
    public function generateOpeningTag(): string;
}
