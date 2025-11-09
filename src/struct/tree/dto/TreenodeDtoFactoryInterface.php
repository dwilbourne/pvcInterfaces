<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 */
interface TreenodeDtoFactoryInterface
{
    /**
     * makeTreenodeDto
     *
     * @return TreenodeDtoInterface<NodeIdType, TreeIdType>
     */
    public function makeTreenodeDto(): TreenodeDtoInterface;
}