<?php

namespace pvc\interfaces\html\dom;

interface NodeInterface
{
    public function getNodeType(): NodeType;
    public function getName(): string;

    public function getParent(): ?NodeInterface;

    public function render(): string;
}