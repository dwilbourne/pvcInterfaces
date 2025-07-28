<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;

interface DomElementInterface
{
    public function getName() : string;

    public function getAttribute(string $name): ?AttributeInterface;

    public function render(): string;
}