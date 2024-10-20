<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\attribute\AttributeVoidInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\tag\TagVoidInterface;

/**
 * Class HtmlFactoryInterface
 */
interface HtmlFactoryInterface
{
    /**
     * getDefinitionNames
     * @param string $definitionsFile
     * @return array<string>
     */
    public function getDefinitionNames(string $definitionsFile): array;

    /**
     * isAmbiguousName
     * @param string $name
     * @return bool
     */
    public function isAmbiguousName(string $name): bool;

    /**
     * canMakeAttribute
     * @param string $attributeName
     * @return bool
     */
    public function canMakeAttribute(string $attributeName): bool;

    /**
     * canMakeElement
     * @param string $elementName
     * @return bool
     */
    public function canMakeElement(string $elementName): bool;

    /**
     * canMakeEvent
     * @param string $eventName
     * @return bool
     */
    public function canMakeEvent(string $eventName): bool;

    /**
     * makeAttribute
     * @param string $attributeName
     * @return AttributeVoidInterface
     */
    public function makeAttribute(string $attributeName): AttributeVoidInterface;

    /**
     * makeElement
     * @param string $elementName
     * @return TagVoidInterface
     */
    public function makeElement(string $elementName): TagVoidInterface;

    /**
     * makeEvent
     * @param string $eventName
     * @return EventInterface
     */
    public function makeEvent(string $eventName): EventInterface;
}
