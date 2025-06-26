<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentModelInterface
{
    /**
     * @return DomNodeInterface
     */
    public function getContainingDomNode(): DomNodeInterface;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}