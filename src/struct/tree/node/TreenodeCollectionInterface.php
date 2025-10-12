<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @extends CollectionInterface<NodeIdType, NodeType>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}