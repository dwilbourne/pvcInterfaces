<?php

namespace pvc\interfaces\html\content_model;

use pvc\interfaces\html\dom\NodeInterface;

interface ContentModelInterface
{
    /**
     * @param  NodeInterface  $content
     *
     * @return bool
     */
    public function canAcceptContent(NodeInterface $content): bool;

}