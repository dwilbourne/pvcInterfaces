<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template TreenodeType of TreenodeInterface
 * @extends CollectionInterface<non-negative-int, TreenodeType>
 */
interface TreenodeChildCollectionInterface extends CollectionInterface
{

}