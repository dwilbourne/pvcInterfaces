<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @return array<ContentCategory>
     */
    public function getContentCategories(): array;
    public function canAddChild(ContentModelInterface $child): bool;
}