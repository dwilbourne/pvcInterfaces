<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeChildIndexedCollectionInterface;

interface DomNodeChildCollectionFactoryInterface
{
    public function makeDomNodeChildCollection(): DomNodeChildIndexedCollectionInterface;
}