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
     * @return int
     * returns a bitmask of the content categories to which this model
     * belongs.
     */
    public function getCategories(): int;

    /**
     * @param  ContentCategory  $category
     *
     * @return bool
     */
    public function hasCategory(ContentCategory $category) : bool;



    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}