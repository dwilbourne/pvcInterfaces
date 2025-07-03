<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * @template PayloadType
 * @template TreenodeType of TreenodeInterface
 * @template TreeType of TreeInterface
 * @template CollectionType of CollectionInterface
 * @extends TreenodeInterface<PayloadType, TreenodeType, TreeType, CollectionType>
 *
 */
interface TreenodeOrderedInterface extends TreenodeInterface, IndexedElementInterface
{
}