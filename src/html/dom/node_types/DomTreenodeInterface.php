<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends TreenodeInterface<NodeIdType, TreeIdType, DomTreenodeInterface>
 */
interface DomTreenodeInterface extends TreenodeInterface
{
    public function getDomNode(): DomNodeInterface;
}