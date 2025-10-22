<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

/**
 * @phpstan-import-type ContainerDefArray from DefinitionInterface
 */
interface ContainerBuilderInterface
{
    /**
     * build
     *
     * @param  array<ContainerDefArray>  $definitions
     *
     * @return ContainerInterface
     */
    public function build(array $definitions): ContainerInterface;
}