<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomTreenodeInterface extends TreenodeInterface
{
    public function canAcceptContent(DomTreenodeInterface $domTreenode): bool;

    public function getDomNode(): DomNodeInterface;

    public function getParent(): ?DomTreenodeInterface;

}