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
     * @param int $domain   Either the content categories to which I belong or
     *                      the content categories that my children must belong to
     * @return int
     */
    public function getContentCategories(int $domain): int;

    /**
     * @param  ContentCategory  $category
     *
     * @return bool
     */
    public function hasCategory(ContentCategory $category): bool;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}