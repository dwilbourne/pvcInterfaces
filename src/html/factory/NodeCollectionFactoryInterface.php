<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\html\dom\tree_impl\DomTreenodeCollectionInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @extends CollectionFactoryInterface<DomNodeInterface, DomTreenodeCollectionInterface>
 */
interface NodeCollectionFactoryInterface extends CollectionFactoryInterface
{

}