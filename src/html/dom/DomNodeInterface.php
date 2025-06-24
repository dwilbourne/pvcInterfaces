<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomNodeInterface extends TreenodeInterface
{
    public function getContainingDomTreenode() : DomTreenodeInterface;

    public function canAcceptContent(DomNodeInterface $content): bool;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}