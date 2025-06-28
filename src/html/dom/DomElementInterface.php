<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomElementInterface
{
    public function getName() : string;

    /**
     * @return TreenodeInterface<DomElementInterface>
     */
    public function getContainingTreenode() : TreenodeInterface;

    public function canAcceptContent(DomElementInterface $domNode): bool;

    public function getContentModel(): ContentModelInterface;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}