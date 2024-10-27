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
     * makeAttribute
     * @param string $attributeName
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeName): AttributeInterface;

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
