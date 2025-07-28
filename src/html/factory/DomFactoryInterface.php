<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomElementInterface;
use pvc\interfaces\html\dom\DomTextElementInterface;

interface DomFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterface;

    public function makeDomTextElement(): DomTextElementInterface;
}