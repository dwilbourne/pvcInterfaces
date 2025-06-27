<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomNodeInterface
{
    public function getName() : string;

    /**
     * @return TreenodeInterface<DomNodeInterface>
     */
    public function getContainingTreenode() : TreenodeInterface;

    public function canAcceptContent(DomNodeInterface $content): bool;

    public function getContentModel(): ContentModelInterface;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}