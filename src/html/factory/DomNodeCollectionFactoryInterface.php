<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeCollectionInterface;
use pvc\interfaces\html\dom\node_types\DomNodeInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @extends CollectionFactoryInterface<DomNodeInterface, DomNodeCollectionInterface>
 */
interface DomNodeCollectionFactoryInterface extends CollectionFactoryInterface
{

}