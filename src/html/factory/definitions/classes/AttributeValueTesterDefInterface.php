<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions\classes;

/**
 * Class AttributeValueTesterDefInterface
 */
interface AttributeValueTesterDefInterface extends DefinitionInterface
{
    /**
     * getArg
     * @return string
     */
    public function getArg(): string;
}
