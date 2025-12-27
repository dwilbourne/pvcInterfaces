<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeIdType of array-key
 * @template TreeidType of array-key
 */
interface TreenodeDtoCollectionFactoryInterface
{
    /**
     * makeTreenodeDtoCollection
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeidType>
     */
    public function makeTreenodeDtoCollection() : TreenodeDtoCollectionInterface;
}