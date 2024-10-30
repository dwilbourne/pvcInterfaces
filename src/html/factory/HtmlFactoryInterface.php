<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\tag\TagVoidInterface;

/**
 * Class HtmlFactoryInterface
 */
interface HtmlFactoryInterface
{
    /**
     * isAmbiguousName
     * @param string $name
     * @return bool
     */
    public function isAmbiguousName(string $name): bool;

    /**
     * canMakeElement
     * @param string $elementName
     * @return bool
     */
    public function canMakeElement(string $elementName): bool;

    /**
     * canMakeAttribute
     * @param string $attributeName
     * @return bool
     */
    public function canMakeAttribute(string $attributeName): bool;

    /**
     * canMakeEvent
     * @param string $eventName
     * @return bool
     */
    public function canMakeEvent(string $eventName): bool;

    /**
     * makeAttribute
     * @param string $attributeId
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeId): AttributeInterface;

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
