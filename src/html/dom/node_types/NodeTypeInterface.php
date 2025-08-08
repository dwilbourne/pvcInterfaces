<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\struct\collection\IndexedElementInterface;

interface NodeTypeInterface extends IndexedElementInterface
{
    public function getNodeType(): int;

    public function getName(): string;

}