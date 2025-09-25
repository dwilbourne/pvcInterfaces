<?php

namespace pvc\interfaces\container;

interface DefBuilderInterface
{
    /**
     * build
     * @param  DefinitionInterface  $definition
     *
     * @return mixed
     */
    public function build(DefinitionInterface $definition);
}