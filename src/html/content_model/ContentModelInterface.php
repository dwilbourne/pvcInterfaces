<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @param  ContentModelInterface  $child
     *
     * @return bool
     */
    public function canAcceptChild(ContentModelInterface $child): bool;
}