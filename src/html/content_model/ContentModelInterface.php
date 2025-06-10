<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @return array<string>
     */
    public function getContentCategories(): array;

    /**
     * @return array<string>
     */
    public function getChildContentCategories(): array;

    /**
     * @param  ContentModelInterface  $child
     *
     * @return bool
     */
    public function canAccept(ContentModelInterface $child): bool;
}