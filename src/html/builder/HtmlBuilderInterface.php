<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\builder;

use pvc\interfaces\html\builder\definitions\DefinitionFactoryInterface;
use pvc\interfaces\html\builder\definitions\DefinitionType;

/**
 * Class HtmlBuilderInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 */
interface HtmlBuilderInterface
{
    /**
     * getDefinitionTypes
     * @param DefinitionType|null $typeFilter
     * @return array<string, DefinitionType>
     */
    public function getDefinitionTypes(?DefinitionType $typeFilter = null): array;

    /**
     * getDefinitionType
     * @param string $defId
     * @return DefinitionType|null
     */
    public function getDefinitionType(string $defId): ?DefinitionType;

    /**
     * getDefinitionIds
     * @param DefinitionType|null $type
     * @return array<string>
     */
    public function getDefinitionIds(?DefinitionType $type = null): array;

}
