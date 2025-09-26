<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

interface ContainerBuilderInterface
{
    /**
     * build
     *
     * @param  array<DefinitionInterface>  $pvcDefinitions
     *
     * @return ContainerInterface
     */
    public function build(array $pvcDefinitions): ContainerInterface;
}