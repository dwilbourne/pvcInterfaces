<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface DomNodeInterface
{
    public function getContainingTreeNode(): TreenodeInterface;

    public function getContentModel(): ContentModelInterface;

    public function canAcceptChild(DtoInterface $dto): bool;
}