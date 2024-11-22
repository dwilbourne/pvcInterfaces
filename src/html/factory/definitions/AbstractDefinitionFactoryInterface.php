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
 * If we could use templates to describe the array shapes, we could use @template-contravariant in the declaration of
 * the generic.  But we need array shapes, not templates, in order to let phpstan now that the various array indices
 * exist.
 *
 * @phpstan-type DefArray array{'defId':string,'defType':string,'concrete':class-string,'comment':string,
 *     'name':string, 'valTester':class-string,'caseSensitive':bool,'global':bool,'arg':class-string|null,
 *     'allowedAttributeDefIds':array<string>, 'allowedChildDefIds':array<string>}
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
