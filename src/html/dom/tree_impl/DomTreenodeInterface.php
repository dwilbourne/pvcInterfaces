<?php

namespace pvc\interfaces\html\dom\tree_impl;

use pvc\interfaces\html\dom\DomNodeCollectionInterface;
use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @extends TreenodeInterface<DomTreeNodeInterface, DomTreenodeCollectionInterface, DomTreeInterface>
 */
interface DomTreenodeInterface extends TreenodeInterface
{
    public function getDomNode(): DomNodeInterface;

    public function getDomNodeCollection(): DomNodeCollectionInterface;
}