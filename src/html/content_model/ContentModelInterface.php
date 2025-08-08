<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\node_types\DomNodeInterface;

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

}