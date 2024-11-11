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
 * @phpstan-type ElementDef array{'DefId':string,'DefType':string,'Name':string,'Comment':string,'Concrete':string,
 *      'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpstan-type AttributeDef array{'DefId':string,'DefType':string,'Name':string,'Concrete':string,
 *     'ValueTester':string,'CaseSensitive':bool,'Global':bool}
 *
 * @phpstan-type AttributeValueTesterDef array{'DefId':string,'DefType':string,'Concrete':string,
 *     'Arg':string|array<string>}
 *
 * @phpstan-type EventDef array{'DefId':string,'DefType':string,'Concrete':string}
 *
 * @phpstan-type OtherDef array{'DefId':string,'DefType':string,'Concrete':string,'Arg':string,'Shared':bool}
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface DefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param array<mixed> $defArray
     * @return Definition
     */
    public function makeDefinition(array $defArray): mixed;
}
