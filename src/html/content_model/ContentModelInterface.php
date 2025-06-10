<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    /**
     * @param  ContentModelInterface  $child
     *
     * @return bool
     */
    public function canAccept(ContentModelInterface $child): bool;
}