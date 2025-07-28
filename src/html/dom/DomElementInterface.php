<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\content_model\ContentModelInterface;

interface DomElementInterface extends ContentModelInterface
{
    public function getName() : string;

    public function getAttribute(string $name): ?AttributeInterface;

    public function render(): string;
}