<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;


interface DomNodeFactoryInterface
{
    public function makeElement(string $name): DomNodeInterface;

    public function makeComment(): DomNodeInterface;

    public function makeTextNode(): DomNodeInterface;
}