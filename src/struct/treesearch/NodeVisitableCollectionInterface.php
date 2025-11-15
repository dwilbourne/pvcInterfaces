<?php

namespace pvc\interfaces\struct\treesearch;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeVisitableInterface
 * @extends NodeSearchableCollectionInterface<NodeIdType, NodeType>
 */
interface NodeVisitableCollectionInterface extends NodeSearchableCollectionInterface
{

}