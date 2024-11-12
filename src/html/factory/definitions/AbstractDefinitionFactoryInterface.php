<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class AbstractDefinitionFactoryInterface
 * @template VendorSpecificDefinition
 */
interface AbstractDefinitionFactoryInterface
{
    /**
     * makeDefinition
     * @template DefinitionArrayType
     * @param array<DefinitionArrayType> $defArray
     * @return VendorSpecificDefinition
     */
    public function makeDefinition(array $defArray): mixed;
}
