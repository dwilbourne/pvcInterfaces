<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

use pvc\interfaces\html\factory\definitions\classes\AttributeDefInterface;
use pvc\interfaces\html\factory\definitions\classes\AttributeValueTesterDefInterface;
use pvc\interfaces\html\factory\definitions\classes\ElementDefinterface;
use pvc\interfaces\html\factory\definitions\classes\EventDefInterface;
use pvc\interfaces\html\factory\definitions\classes\OtherDefinterface;

/**
 * Class DefinitionFactoryInterface
 * @template Definition
 *
 * creates a definition which is native to the container from a definition array which was created from the
 * Definitions.json file.
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface DefinitionFactoryInterface
{
    /**
     * makeAttributeDefinition
     * @param AttributeDefInterface $attributeDef
     * @return Definition
     */
    public function makeAttributeDefinition(AttributeDefInterface $attributeDef): mixed;

    /**
     * makeAttributeValueTesterDefinition
     * @param AttributeValueTesterDefInterface $attributeDef
     * @return Definition
     */
    public function makeAttributeValueTesterDefinition(AttributeValueTesterDefInterface $attributeDef): mixed;

    /**
     * makeElementDefinition
     * @param ElementDefinterface $elementDef
     * @return Definition
     */
    public function makeElementDefinition(ElementDefinterface $elementDef): mixed;

    /**
     * makeEventDefinition
     * @param EventDefInterface $eventDef
     * @return Definition
     */
    public function makeEventDefinition(EventDefInterface $eventDef): mixed;

    /**
     * makeOtherDefinition
     * @param OtherDefinterface $otherDef
     * @return Definition
     */
    public function makeOtherDefinition(OtherDefinterface $otherDef): mixed;
}
