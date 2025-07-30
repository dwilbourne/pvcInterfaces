<?php

namespace pvc\interfaces\html\factory;

use pvc\interfaces\html\dom\node_types\DomCommentInterfaceDom;
use pvc\interfaces\html\dom\node_types\DomElementInterfaceDom;
use pvc\interfaces\html\dom\node_types\DomTextInterfaceDom;
use pvc\interfaces\intl\LocaleInterface;


interface NodeFactoryInterface
{
    public function makeDomElement(string $elementName): DomElementInterfaceDom;

    public function makeDomText(LocaleInterface $locale): DomTextInterfaceDom;

    public function makeDomComment(string $comment): DomCommentInterfaceDom;
}