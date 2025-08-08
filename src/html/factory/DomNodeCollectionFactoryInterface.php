<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomNodeCollectionInterface;

interface DomNodeCollectionFactoryInterface
{
    public function makeDomNodeCollection() : DomNodeCollectionInterface;
}