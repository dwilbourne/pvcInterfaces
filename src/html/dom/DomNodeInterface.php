<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\dto\DtoInterface;

interface DomNodeInterface
{
    public function canAcceptChild(DtoInterface $dto): bool;
}