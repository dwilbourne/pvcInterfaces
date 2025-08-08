<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomCommentInterface;
use pvc\interfaces\html\dom\node_types\DomElementInterface;
use pvc\interfaces\html\dom\node_types\DomTextInterface;
use pvc\interfaces\msg\MsgInterface;


interface DomNodeFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterface;

    public function makeDomText(string|MsgInterface $textMsg): DomTextInterface;

    public function makeDomComment(string $comment): DomCommentInterface;
}