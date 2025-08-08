<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;
use pvc\interfaces\struct\collection\CollectionOrderedByIndexInterface;

/**
 * @extends CollectionOrderedByIndexInterface<DomNodeInterface>
 */
interface DomNodeChildCollectionInterface extends CollectionOrderedByIndexInterface
{

}