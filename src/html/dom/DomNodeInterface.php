<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\struct\dto\DtoInterface;

interface DomNodeInterface
{
    public function getContentModel(): ContentModelInterface;

    public function canAcceptChild(DtoInterface $dto): bool;
}