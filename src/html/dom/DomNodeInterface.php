<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomNodeInterface
{
    /**
     * @return TreenodeInterface<DomNodeInterface>
     */
    public function getContainingTreenode(): TreenodeInterface;

    public function getContentModel(): ContentModelInterface;

    public function canAcceptChild(DomNodeInterface $child): bool;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}