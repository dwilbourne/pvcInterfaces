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
 * creates a definition which is native to the container from a definition object (which was created from the json)
 *
 * Only the value tester definitions should be 'shared'.  E.g. When you request an attribute, element or event from the
 * container, it should produce a new instance of the object. Value Tester objects are stateless and can be shared.
 */
interface DefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @param DefinitionInterface $def
     * @return Definition
     */
    public function makeDefinition(DefinitionInterface $def): mixed;
}
