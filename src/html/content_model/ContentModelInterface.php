<?php

namespace pvc\interfaces\html\content_model;

interface ContentModelInterface
{
    public function canAddChild(ContentModelInterface $child): bool;
}