<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory;

/**
 * Class DefinitionFactoryInterface
 */
interface DefinitionFactoryInterface
{
    /**
     * makeElementDefinition
     * @return string
     */
    public function makeElementDefinition(): string;

    /**
     * makeAttributeDefinition
     * @return string
     */
    public function makeAttributeDefinition(): string;

    /**
     * makeEventDefinition
     * @return string
     */
    public function makeEventDefinition(): string;
}
