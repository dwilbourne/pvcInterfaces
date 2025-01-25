<?php

namespace pvc\interfaces\struct\dto;

/**
 * @template DtoType of DtoFactoryAbstractInterface
 */
interface DtoFactoryInterface
{
    /**
     * @return DtoType
     */
    public function makeDto(): mixed;
}