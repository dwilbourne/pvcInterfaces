<?php

namespace pvc\interfaces\struct\treesearch;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @template CollectionType of NodeSearchableCollectionInterface
 */
interface NodeSearchableCollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionType
     */
    public function makeCollection() : NodeSearchableCollectionInterface;
}