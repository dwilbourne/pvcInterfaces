<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;
use pvc\interfaces\struct\collection\IndexedCollectionInterface;

/**
 * @extends IndexedCollectionInterface<non-negative-int, DomNodeInterface>
 */
interface DomNodeChildIndexedCollectionInterface extends IndexedCollectionInterface
{

}