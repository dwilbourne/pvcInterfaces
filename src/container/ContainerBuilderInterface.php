<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

/**
 * @phpstan-import-type DefinitionsArray from DefinitionInterface
 */
interface ContainerBuilderInterface
{
    /**
     * build
     *
     * @param  DefinitionsArray  $definitions
     *
     * @return ContainerInterface
     */
    public function build(array $definitions): ContainerInterface;
}