<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class DefinitionFactoryInterface
 * @phpstan-import-type DefArray from AbstractDefinitionFactoryInterface
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
     * @param DefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeAttributeDefinition(array $definitionArray): mixed;

    /**
     * makeAttributeValueTesterDefinition
     * @param DefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeAttributeValueTesterDefinition(array $definitionArray): mixed;

    /**
     * makeElementDefinition
     * @param DefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeElementDefinition(array $definitionArray): mixed;

    /**
     * makeEventDefinition
     * @param DefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeEventDefinition(array $definitionArray): mixed;

    /**
     * makeOtherDefinition
     * @param DefArray $definitionArray
     * @return VendorSpecificDefinition
     */
    public function makeOtherDefinition(array $definitionArray): mixed;
}
