<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\html\text\TextNodeInterface;
use pvc\interfaces\msg\MsgInterface;

interface HtmlFactoryInterface
{
    /**
     * makeElement
     *
     * @param string $elementName
     *
     * @return ElementInterface|ElementInterface
     */
    public function makeElement(string $elementName): ElementInterface|ElementInterface;

    /**
     * @param  string|MsgInterface  $text
     *
     * @return TextNodeInterface
     */
    public function makeTextNode(string|MsgInterface $text): TextNodeInterface;

}