<?php

namespace pvc\interfaces\struct\tree\node;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 */
interface ChildCollectionFactoryInterface
{
    /**
     * makeChildCollection
     * @return TreenodeCollectionInterface<NodeIdType, NodeType>
     */
    public function makeChildCollection(): TreenodeCollectionInterface;
}