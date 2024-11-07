<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\tag\TagVoidInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class HtmlFactoryInterface
 */
interface HtmlFactoryInterface
{
    /**
     * canMakeElement
     * @param string $elementName
     * @return bool
     */
    public function canMakeElement(string $elementName): bool;

    /**
     * canMakeAttribute
     * @param string $attributeId
     * @return bool
     */
    public function canMakeAttribute(string $attributeId): bool;

    /**
     * canMakeEvent
     * @param string $eventId
     * @return bool
     */
    public function canMakeEvent(string $eventId): bool;

    /**
     * makeAttribute
     * @param string $attributeId
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeId): AttributeInterface;

    /**
     * makeCustomData
     * @param string $attributeId
     * @param ValTesterInterface<string>|null $valTester
     * @return AttributeCustomDataInterface
     */
    public function makeCustomData(
        string $attributeId,
        ValTesterInterface $valTester = null
    ): AttributeCustomDataInterface;

    /**
     * makeElement
     * @param string $elementName
     * @return TagVoidInterface
     */
    public function makeElement(string $elementName): TagVoidInterface;

    /**
     * makeEvent
     * @param string $eventId
     * @return EventInterface
     */
    public function makeEvent(string $eventId): EventInterface;
}
