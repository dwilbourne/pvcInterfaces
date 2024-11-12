<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class DefinitionFactoryInterface
 *
 * @phpstan-type AttributeDefArray array{'DefId':string, 'DefType':string, 'Concrete':string, 'Name':string,
 * 'ValTester':string, 'CaseSensitive':bool, 'Global':bool}
 *
 * @template DefinitionType
 * @template VendorSpecificDefinition
 *
 * creates a definition which is native to the container from a definition array which was created from the
 * appropriate json file.
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface DefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param array<DefinitionType> $defArray
     * @return VendorSpecificDefinition
     */
    public function makeDefinition(array $defArray): mixed;
}
