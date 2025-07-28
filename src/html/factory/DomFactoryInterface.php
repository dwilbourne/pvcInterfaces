<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomElementInterface;

interface DomFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterface;
}