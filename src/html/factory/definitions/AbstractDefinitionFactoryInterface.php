<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class AbstractDefinitionFactoryInterface
 * @template Definition
 *
 * DefinitionType is an enum of the kinds of definitions this library supports, @see DefinitionType.php
 *
 * @phpcs:ignore
 * @phpstan-type ElementDef array{'DefId':string,'DefType':string,'Name':string,'Comment':string,'Concrete':string,
 *     'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeDef array{'DefId':string,'DefType':string,'Name':string,'Concrete':string,
 *     'ValueTester':string,'CaseSensitive':bool,'Global':bool}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeValueTesterDef array{'DefId':string,'DefType':string,'Name':string,'Concrete':string,
 * 'TesterArg':string|array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type EventDef array{'DefId':string,'DefType':string,'Name':string, 'Concrete':string}
 *
 * @phpcs:ignore
 * @phpstan-type DefinitionFileNames array{'Attribute':string,'AttributeValueTester':string,'Element':string,'Event':string}
 */
interface AbstractDefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param ElementDef|AttributeDef|AttributeValueTesterDef|EventDef $def;
     * @return Definition
     */
    public function makeDefinition(array $def): mixed;
}
