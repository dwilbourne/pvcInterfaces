<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\text\TextElementInterface;

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
     * @return TextElementInterface
     */
    public function makeTextNode(): TextElementInterface;

}