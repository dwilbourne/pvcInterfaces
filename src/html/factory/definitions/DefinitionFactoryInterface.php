<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class DefinitionFactoryInterface
 * @template Definition
 *
 * @phpcs:ignore
 * @phpstan-type ElementDef array{'DefId':string,'DefType':string,'Name':string,'Comment':string,'Concrete':string,
 *      'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeDef array{'DefId':string,'DefType':string,'Name':string,'Concrete':string,
 *     'ValueTester':string,'CaseSensitive':bool,'Global':bool}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeValueTesterDef array{'DefId':string,'DefType':string,'Concrete':string,'Arg':string|array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type EventDef array{'DefId':string,'DefType':string,'Concrete':string}
 *
 * @phpcs:ignore
 * @phpstan-type OtherDef array{'DefId':string,'DefType':string,'Concrete':string,'Arg':string,'Shared':bool}
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface DefinitionFactoryInterface
{
    /**
     * makeAttributeDefinition
     * @param AttributeDef $attributeDef
     * @return Definition
     */
    public function makeAttributeDefinition(array $attributeDef): mixed;

    /**
     * makeAttributeValueTesterDefinition
     * @param AttributeValueTesterDef $attributeValueTesterDef
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

    /**
     * makeOtherSharedDefinition
     * @param OtherDef $otherDef
     * @return mixed
     */
    public function makeOtherDefinition(array $otherDef): mixed;
}
