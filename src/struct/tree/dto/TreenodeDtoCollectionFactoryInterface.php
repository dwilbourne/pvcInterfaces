<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 */
interface TreenodeDtoCollectionFactoryInterface
{
    /**
     * makeTreenodeDtoCollection
     * @param array<non-negative-int, TreenodeDtoInterface<NodeIdType, TreeIdType>> $dtoArray
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function makeTreenodeDtoCollection(array $dtoArray = []) : TreenodeDtoCollectionInterface;
}