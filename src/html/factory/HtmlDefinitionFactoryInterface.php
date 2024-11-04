<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

/**
 * Class HtmlDefinitionFactoryInterface
 * @template Definition
 *
 * @phpcs:ignore
 * @phpstan-type ElementDef array{'DefId':string,'Name':string,'TagType':string,'AllowedAttributes':array<string>,'AllowedSubTags':array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeDef array{'DefId':string,'Name':string,'AttributeType':string,'ValueTester':string,'Global':bool,'CaseSensitive':bool}
 *
 * @phpstan-type AttributeValueTesterDef array{'Name':string,'TesterType':string,'TesterArg':string|array<string>}
 *
 * @phpstan-type EventDef array{'DefId':string, 'Name':string}
 *
 * NONE of the definitions should be 'shared'.  When you request one of these definitions from the container, it
 * should always produce a new instance of the object.
 */
interface HtmlDefinitionFactoryInterface
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
