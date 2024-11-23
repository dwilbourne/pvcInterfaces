<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class AbstractDefinitionFactoryInterface
 *
 * @phpstan-type DefArray array{'defId':string,'defType':string}
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
