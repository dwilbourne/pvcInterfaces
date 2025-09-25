<?php

namespace pvc\interfaces\container;

/**
 * create vendor-neutral definitions to build objects
 */
interface DefinitionInterface
{
    /**
     * getAlias
     * @return string
     */
    public function getAlias() : string;

    /**
     * getClassString
     * @return class-string
     */
    public function getClassString() : string;

    /**
     * getArgs
     * @return array<mixed>
     */
    public function getArgs() : array;
}