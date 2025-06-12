<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
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