<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\text\DomTextInterface;

interface HtmlFactoryInterface
{
    /**
     * makeElement
     *
     * @param string $elementName
     *
     * @return ElementInterface
     */
    public function makeElement(string $elementName): ElementInterface;

    /**
     *
     * @return DomTextInterface
     */
    public function makeTextNode(): DomTextInterface;

}