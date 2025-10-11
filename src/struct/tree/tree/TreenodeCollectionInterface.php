<?php

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template TreenodeType of TreenodeInterface
 * @extends CollectionInterface<non-negative-int, TreenodeType>
 */
interface TreenodeCollectionInterface extends CollectionInterface
{

}