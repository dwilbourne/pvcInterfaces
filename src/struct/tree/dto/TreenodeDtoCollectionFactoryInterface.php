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
     * @param ?array<NodeIdType, TreenodeDtoInterface<NodeIdType, TreeidType>> $treenodeDtoArray
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeidType>
     */
    public function makeTreenodeDtoCollection(?array $treenodeDtoArray = []) : TreenodeDtoCollectionInterface;
}