<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\DomNodeInterface;

interface ContentModelInterface
{
    /**
     * @param  DomNodeInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(DomNodeInterface $content): bool;

    /**
     * getCategories
     * @return int
     * bitmask of the content categories to which this node belongs
     */
    public function getCategories(): int;

    /**
     * getChildCategories
     * @return int
     * bitmask of the permitted content categories for children
     */
    public function getChildCategories(): int;

}