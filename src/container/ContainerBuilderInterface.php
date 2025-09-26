<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

interface ContainerBuilderInterface
{
    /**
     * build
     * @param  array<DefinitionInterface>  $definitions
     *
     * @return ContainerInterface
     */
    public function build(array $definitions): ContainerInterface;
}