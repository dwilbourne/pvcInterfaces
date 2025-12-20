<?php

namespace pvc\interfaces\struct\treesearch;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 */
interface NodeSearchableCollectionFactoryInterface
{
    /**
     * makeCollection
     * @return NodeSearchableCollectionInterface<NodeIdType, NodeType>
     */
    public function makeCollection() : NodeSearchableCollectionInterface;
}