<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions;

/**
 * Class DefinitionInterface
 */
interface DefinitionInterface
{
    public function getDefId(): string;
    
    public function getDefType(): DefinitionType;
}
