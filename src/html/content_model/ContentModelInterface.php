<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @return array<int>
     */
    public function getContentCategories(): array;

    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}