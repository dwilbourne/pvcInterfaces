<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\DomElementInterface;

interface ContentModelInterface
{
    /**
     * @return DomElementInterface
     */
    public function getContainingDomElement(): DomElementInterface;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}