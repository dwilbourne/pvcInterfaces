<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\element\ElementVoidInterface;
use pvc\interfaces\html\text\TextNodeInterface;
use pvc\interfaces\msg\MsgInterface;

interface HtmlFactoryInterface
{
    /**
     * makeElement
     * @param string $elementName
     * @return ElementVoidInterface|ElementInterface
     */
    public function makeElement(string $elementName): ElementVoidInterface|ElementInterface;

    /**
     * @param  string|MsgInterface  $text
     *
     * @return TextNodeInterface
     */
    public function makeTextNode(string|MsgInterface $text): TextNodeInterface;

}