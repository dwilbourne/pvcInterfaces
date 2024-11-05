<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class ConcreteDefinitionFactoryInterface
 * @template Definition of AbstractDefinitionFactoryInterface
 *
 * @phpstan-import-type ElementDef from AbstractDefinitionFactoryInterface
 * @phpstan-import-type AttributeDef from AbstractDefinitionFactoryInterface
 * @phpstan-import-type AttributeValueTesterDef from AbstractDefinitionFactoryInterface
 * @phpstan-import-type EventDef from AbstractDefinitionFactoryInterface
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface ConcreteDefinitionFactoryInterface
{
    /**
     * makeAttributeDefinition
     * @param AttributeDef $attributeDef
     * @return Definition
     */
    public function makeAttributeDefinition(array $attributeDef): mixed;

    /**
     * makeAttributeValueTesterDefinition
     * @param array<AttributeValueTesterDef> $attributeValueTesterDef
     * @return mixed
     */
    public function makeAttributeValueTesterDefinition(array $attributeValueTesterDef): mixed;

    /**
     * makeElementDefinition
     * @param ElementDef $elementDef
     * @return Definition
     */
    public function makeElementDefinition(array $elementDef): mixed;

    /**
     * makeEventDefinition
     * @param EventDef $eventDef
     * @return Definition
     */
    public function makeEventDefinition(array $eventDef): mixed;
}
