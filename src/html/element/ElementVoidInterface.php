<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\builder\definitions\DefinitionFactoryInterface;
use pvc\interfaces\validator\ValTesterInterface;

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
     * @param string|AttributeInterface $attribute
     * @param string ...$values
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setAttribute(string|AttributeInterface $attribute, ...$values): ElementVoidInterface;

    /**
     * @param string $name
     * @return array<string>|string|bool|null
     * returns the value of the attribute
     */
    public function getAttribute(string $name): array|string|bool|null;

    /**
     * setCustomData
     * @param string $customAttributeName
     * @param string $value
     * @param ValTesterInterface<string>|null $valTester
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setCustomData(
        string $customAttributeName,
        string $value,
        ?ValTesterInterface $valTester = null
    ): ElementVoidInterface;

    /**
     * setEvent
     * @param EventInterface $event
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setEvent(EventInterface $event): ElementVoidInterface;

    /**
     * getAttributes
     * @return array<string, array<string>|string|bool>
     */
    public function getAttributes(): array;

    /**
     * @return array<string, string>
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
     * render
     * @return string
     */
    public function generateOpeningTag(): string;
}
