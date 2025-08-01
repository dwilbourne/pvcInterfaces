<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomCommentInterface;
use pvc\interfaces\html\dom\node_types\DomElementInterface;
use pvc\interfaces\html\dom\node_types\DomTextInterface;
use pvc\interfaces\intl\LocaleInterface;


interface DomNodeFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterface;

    public function makeDomText(LocaleInterface $locale): DomTextInterface;

    public function makeDomComment(string $comment): DomCommentInterface;
}