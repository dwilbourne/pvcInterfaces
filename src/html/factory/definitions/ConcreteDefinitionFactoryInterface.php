<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class ConcreteDefinitionFactoryInterface
 * @template Definition
 *
 * @phpstan-import-type ElementDef from AbstractDefinitionFactoryInterface
 * @phpstan-import-type AttributeDef from AbstractDefinitionFactoryInterface
 * @phpstan-import-type EventDef from AbstractDefinitionFactoryInterface
 *
 * NONE of the definitions should be 'shared'.  When you request one of these definitions from the container, it
 * should always produce a new instance of the object.
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
