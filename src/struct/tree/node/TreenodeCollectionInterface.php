<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @extends CollectionInterface<NodeIdType, TreenodeInterface<NodeIdType, TreeIdType, NodeType>>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}