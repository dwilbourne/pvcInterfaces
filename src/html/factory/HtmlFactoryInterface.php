<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;

interface HtmlFactoryInterface
{
    public function makeElement(string $elementName): ElementInterface;
}