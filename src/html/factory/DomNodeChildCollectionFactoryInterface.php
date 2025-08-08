<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeChildCollectionInterface;

interface DomNodeChildCollectionFactoryInterface
{
    public function makeDomNodeChildCollection(): DomNodeChildCollectionInterface;
}