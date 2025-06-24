<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomTreenodeInterface extends TreenodeInterface
{
    public function canAcceptContent(DomNodeInterface $domNode): bool;

    public function getDomNode(): DomNodeInterface;

    public function setDomNode(DomNodeInterface $domNode): void;

    public function getParent(): ?DomTreenodeInterface;

}