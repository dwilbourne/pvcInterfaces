<?php

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface NodeSearchableCollectionInterface extends Iterator
{

}