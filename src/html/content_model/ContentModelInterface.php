<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\DomElementInterface;

interface ContentModelInterface
{

    public const int IS_PERMITTED = 1;
    public const int IS_NOT_APPLICABLE = 0;
    public const int IS_NOT_PERMITTED = -1;

    /**
     * @return DomElementInterface
     */
    public function getContainingDomElement(): DomElementInterface;

    /**
     * @param  array<ContentCategory>  $categories
     *
     * @return int
     */
    public static function coalesceContentCategories(array $categories): int;

    /**
     * @return int
     * returns a bitmask of the content categories to which this model
     * belongs.
     */
    public function getCategories(): int;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;

    /**
     * @param  ContentCategory  $category
     *
     * @return bool
     */
    public function hasCategory(ContentCategory $category) : bool;

    public function hasAttribute(string $attributeName) : bool;

    public function hasName(string $name) : bool;


}