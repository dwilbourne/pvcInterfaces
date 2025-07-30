<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\NodeCollectionInterface;
use pvc\interfaces\html\dom\NodeInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @extends CollectionFactoryInterface<NodeInterface, NodeCollectionInterface>
 */
interface NodeCollectionFactoryInterface extends CollectionFactoryInterface
{

}