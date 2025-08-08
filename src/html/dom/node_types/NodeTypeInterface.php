<?php

namespace pvc\interfaces\html\dom\node_types;

interface NodeTypeInterface
{
    public function getNodeType(): int;

    public function getName(): string;

}