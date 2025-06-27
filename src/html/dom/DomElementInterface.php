<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface DomElementInterface
{
    public function getName() : string;

    /**
     * @return DomNodeInterface
     */
    public function getContainingTreenode() : DomNodeInterface;

    public function canAcceptContent(DomElementInterface $domNode): bool;

    public function getContentModel(): ContentModelInterface;

    public function renderFirstVisit(): string;

    public function renderLastVisit(): string;
}