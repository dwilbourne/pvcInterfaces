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
 * @phpstan-type ElementDef array{'DefId':string,'Name':string,'Comment':string,'Type':DefinitionType,'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeDef array{'DefId':string,'Name':string,'Type':DefinitionType,'ValueTester':string,'Global':bool,'CaseSensitive':bool}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeValueTesterDef array{'DefId':string,'Name':DefinitionType,'Type':string,'TesterArg':string|array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type EventDef array{'DefId':string, 'Name':string, 'Type':DefinitionType}
 *
 * @phpcs:ignore
 * @phpstan-type DefinitionFileNames array{'Attribute':string,'AttributeValueTester':string,'Element':string,'Event':string}
 */
interface AbstractDefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param array<ElementDef|AttributeDef|AttributeValueTesterDef|EventDef> $def;
     * @return Definition
     */
    public function makeDefinition(array $def): mixed;
}
