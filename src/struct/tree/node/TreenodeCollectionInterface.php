<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @template PayloadType
 * @extends CollectionInterface<NodeIdType, TreenodeInterface<NodeIdType, TreeIdType, PayloadType>>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}