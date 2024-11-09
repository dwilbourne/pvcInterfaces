<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\html\factory\definitions\AbstractDefinitionFactoryInterface;
use pvc\interfaces\html\tag\TagVoidInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class HtmlFactoryInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 * @phpstan-import-type  DefinitionFileNames from AbstractDefinitionFactoryInterface
 */
interface HtmlFactoryInterface
{
    /**
     * setDefinitionFactory
     * @param AbstractDefinitionFactoryInterface<Definition> $definitionFactory
     * @return void
     */
    public function setDefinitionFactory(AbstractDefinitionFactoryInterface $definitionFactory): void;

    /**
     * getDefinitionFactory
     * @return AbstractDefinitionFactoryInterface<Definition>
     */
    public function getDefinitionFactory(): AbstractDefinitionFactoryInterface;

    /**
     * setDefinitionsFile
     * @param string $dir
     */
    public function setDefinitionsFile(string $dir): void;

    /**
     * getDefinitionsFile
     * @return string
     */
    public function getDefinitionsFile(): string;

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
     * @param string $value
     * @param ValTesterInterface<string>|null $valTester
     * @return AttributeCustomDataInterface
     */
    public function makeCustomData(
        string $attributeDefId,
        string $value,
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
