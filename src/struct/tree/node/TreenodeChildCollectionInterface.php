<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;

/**
 * @template TreenodeType of TreenodeInterface
 * @extends CollectionOrderedInterface<TreenodeType>
 */
interface TreenodeChildCollectionInterface extends CollectionOrderedInterface
{

}