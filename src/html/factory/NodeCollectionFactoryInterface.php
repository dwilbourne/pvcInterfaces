<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\html\dom\tree_impl\DomTreeNodeCollectionInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @extends CollectionFactoryInterface<DomNodeInterface, DomTreeNodeCollectionInterface>
 */
interface NodeCollectionFactoryInterface extends CollectionFactoryInterface
{

}