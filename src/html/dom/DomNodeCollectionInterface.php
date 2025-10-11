<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;
use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @extends CollectionInterface<non-negative-int, DomNodeInterface>
 */
interface DomNodeCollectionInterface extends CollectionInterface
{

}