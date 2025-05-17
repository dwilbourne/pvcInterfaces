<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\element\ElementVoidInterface;

interface HtmlFactoryInterface
{
    /**
     * makeElement
     * @param string $elementName
     * @return ElementVoidInterface|ElementInterface
     */
    public function makeElement(string $elementName): ElementVoidInterface|ElementInterface;

}