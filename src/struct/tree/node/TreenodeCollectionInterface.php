<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends CollectionInterface<NodeIdType, TreenodeInterface<NodeIdType, TreeIdType>>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}