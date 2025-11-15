<?php

namespace pvc\interfaces\struct\treesearch;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeVisitableInterface
 * @template CollectionType of NodeVisitableCollectionInterface
 * @extends NodeSearchableCollectionInterface<NodeIdType, NodeType, CollectionType>
 */
interface NodeVisitableCollectionInterface extends NodeSearchableCollectionInterface
{

}