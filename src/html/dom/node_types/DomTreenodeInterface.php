<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @extends TreenodeInterface<DomTreenodeInterface>
 */
interface DomTreenodeInterface extends TreenodeInterface
{
    public function getDomNode(): DomNodeInterface;
}