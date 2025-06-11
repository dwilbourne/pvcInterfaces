<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\dto\DtoInterface;

interface DomNodeInterface
{
    public function canAccept(DtoInterface $dto): bool;

    public function render(): string;
}