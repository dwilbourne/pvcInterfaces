<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\element\ElementVoidInterface;
use pvc\interfaces\validator\ValTesterInterface;

interface HtmlFactoryInterface
{
    /**
     * makeElement
     * @param string $elementName
     * @return ElementVoidInterface|ElementInterface
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
        ?ValTesterInterface $valTester = null
    ): AttributeCustomDataInterface;
}