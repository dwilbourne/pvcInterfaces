<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\builder\definitions\classes;

use pvc\interfaces\html\builder\definitions\DefinitionType;

/**
 * Class DefinitionInterface
 */
interface DefinitionInterface
{
    /**
     * getDefId
     * @return string
     */
    public function getDefId(): string;

    /**
     * getDefType
     * @return DefinitionType
     */
    public function getDefType(): DefinitionType;

    /**
     * getConcrete
     * @return class-string
     */
    public function getConcrete(): string;
}
