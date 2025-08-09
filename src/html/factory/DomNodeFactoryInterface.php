<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;


interface DomNodeFactoryInterface
{
    public function createElement(string $name): DomNodeInterface;

    public function createComment(): DomNodeInterface;

    public function createTextNode(): DomNodeInterface;
}