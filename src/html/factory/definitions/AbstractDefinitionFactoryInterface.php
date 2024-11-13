<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class AbstractDefinitionFactoryInterface
 *
 * OK, so this is something of a hack, but the idea is to create a theoretical array shape that is contravariant to
 * all the definition array shapes.  Doing so gets rid of the liskov problem when we pass an array of this shape
 * in as a parameter to the specific factory methods defined in DefinitionFactoryInterface.
 *
 * If we were using templates to describe the array shapes, we could use @template-contravariant in the declaration of
 * the generic.  But we need array shapes, not templates, in order to let phpstan now that the various array indices
 * exist.
 *
 * @phpstan-type DefArray array{'DefId':string,'DefType':string,'Concrete':class-string,'Comment':string,
 *     'Name':string, 'ValTester':class-string,'CaseSensitive':bool,'Global':bool,'Arg':class-string|null,
 *     'AllowedAttributeDefIds':array<string>, 'AllowedChildDefIds':array<string>}
 *
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
