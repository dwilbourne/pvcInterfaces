<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @param  ContentModelInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(ContentModelInterface $content): bool;
}