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
 * @phpcs:ignore
 * @phpstan-type ElementDef array{'DefId':string,'Name':string,'Comment':string,'Type':string,'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeDef array{'DefId':string,'Name':string,'Type':string,'ValueTester':string,'Global':bool,'CaseSensitive':bool}
 *
 * @phpcs:ignore
 * @phpstan-type AttributeValueTesterDef array{'DefId':string,'Name':string,'Type':string,'TesterArg':string|array<string>}
 *
 * @phpcs:ignore
 * @phpstan-type EventDef array{'DefId':string, 'Name':string, 'Type':string}
 */
interface AbstractDefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param array<mixed> $def;
     * @return Definition
     */
    public function makeDefinition(array $def): mixed;
}
