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
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function makeTreenodeDtoCollection() : TreenodeDtoCollectionInterface;
}