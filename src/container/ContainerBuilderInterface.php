<?php

namespace pvc\interfaces\container;

use Psr\Container\ContainerInterface;

/**
 * @phpstan-type DefArray array{'alias':string, 'class-string':string, 'args'?:array<mixed>}
 */
interface ContainerBuilderInterface
{
    /**
     * build
     *
     * @param  array<DefArray>  $pvcDefinitions
     *
     * @return ContainerInterface
     */
    public function build(array $pvcDefinitions): ContainerInterface;
}