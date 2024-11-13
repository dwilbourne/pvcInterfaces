<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class AbstractDefinitionFactoryInterface
 *
 * @phpstan-type DefArray array{'DefId':string,'DefType':string,'Concrete':class-string,'Comment':string,
 *     'Name':string, 'ValTester':class-string,'CaseSensitive':bool,'Global':bool,'Arg':class-string|null,
 *     'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 * @template VendorSpecificDefinition
 */
interface AbstractDefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param DefArray $defArray
     * @return VendorSpecificDefinition
     */
    public function makeDefinition(array $defArray): mixed;
}
