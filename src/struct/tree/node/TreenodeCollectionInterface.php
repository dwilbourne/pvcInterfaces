<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeId
 * @template NodeType of TreenodeInterface
 * @extends CollectionInterface<NodeId, NodeType>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}