<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\DomElementInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentModelInterface
{

    public function getDomElement(): DomElementInterface;

    public function getDomNode(): DomNodeInterface;

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
     * @param  array<ContentCategory>  $categories
     *
     * @return int
     */
    public static function coalesceContentCategories(array $categories): int;

    /**
     * @param  DomNodeInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(DomNodeInterface $content): bool;

}