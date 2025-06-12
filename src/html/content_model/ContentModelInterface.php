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
     * @return int
     */
    public function getContentCategories(): int;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}