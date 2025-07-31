<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\html\dom\tree_impl\DomNodeCollectionInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @extends CollectionFactoryInterface<DomNodeInterface, DomNodeCollectionInterface>
 */
interface NodeCollectionFactoryInterface extends CollectionFactoryInterface
{

}