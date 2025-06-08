<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;

interface DomNodeInterface
{
    public function getContentModel(): ContentModelInterface;
}