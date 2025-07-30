<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomElementInterface;
use pvc\interfaces\html\element\TextInterface;

interface NodeFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterface;

    public function makeDomTextElement(): TextInterface;
}