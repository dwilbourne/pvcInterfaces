<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\DomElementInterface;
use pvc\interfaces\html\text\DomTextInterface;

interface HtmlFactoryInterface
{
    public function makeElement(string $elementName): DomElementInterface;

    public function makeTextNode(): DomTextInterface;

}