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
     * @param string $elementDefId
     * @return bool
     */
    public function canMakeElement(string $elementDefId): bool;

    /**
     * canMakeAttribute
     * @param string $attributeDefId
     * @return bool
     */
    public function canMakeAttribute(string $attributeDefId): bool;

    /**
     * canMakeEvent
     * @param string $eventDefId
     * @return bool
     */
    public function canMakeEvent(string $eventDefId): bool;

    /**
     * makeAttribute
     * @param string $attributeDefId
     * @return AttributeInterface
     */
    public function makeAttribute(string $attributeDefId): AttributeInterface;

    /**
     * makeCustomData
     * @param string $attributeDefId
     * @param ValTesterInterface<string>|null $valTester
     * @return AttributeCustomDataInterface
     */
    public function makeCustomData(
        string $attributeDefId,
        ValTesterInterface $valTester = null
    ): AttributeCustomDataInterface;

    /**
     * makeElement
     * @param string $elementDefId
     * @return TagVoidInterface
     */
    public function makeElement(string $elementDefId): TagVoidInterface;

    /**
     * makeEvent
     * @param string $eventDefId
     * @return EventInterface
     */
    public function makeEvent(string $eventDefId): EventInterface;
}
