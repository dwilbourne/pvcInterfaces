<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class DefinitionFactoryInterface
 *
 * @phpstan-type AttributeDefArray array{'DefId':string, 'DefType':string, 'Concrete':class-string, 'Name':string,
 * 'ValTester':class-string, 'CaseSensitive':bool, 'Global':bool}
 *
 * @phpstan-type AttributeValTesterDefArray array{'DefId':string, 'DefType':string, 'Concrete':class-string,
 *     'Arg':class-string|null}
 *
 * @phpstan-type ElementDefArray array{'DefId':string, 'DefType':string, 'Concrete':class-string, 'Name':string,
 *     'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
 * @phpstan-type EventDefArray array{'DefId':string, 'DefType':string, 'Concrete':class-string}
 *
 * @phpstan-type OtherDefArray array{'DefId':string, 'DefType':string, 'Concrete':class-string,'Arg':class-string|null}
 *
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
     * makeAttributeDefinition
     * @param AttributeDefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeAttributeDefinition(array $definitionArray): mixed;

    /**
     * makeAttributeValueTesterDefinition
     * @param AttributeValTesterDefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeAttributeValueTesterDefinition(array $definitionArray): mixed;

    /**
     * makeElementDefinition
     * @param ElementDefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeElementDefinition(array $definitionArray): mixed;

    /**
     * makeEventDefinition
     * @param EventDefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeEventDefinition(array $definitionArray): mixed;

    /**
     * makeOtherDefinition
     * @param OtherDefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeOtherDefinition(array $definitionArray): mixed;
}
