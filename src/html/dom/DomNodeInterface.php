<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\tree_impl\DomNodeCollectionInterface;

interface DomNodeInterface extends ContentModelInterface
{
    public function getNodeType(): NodeType;
    public function getName(): string;

    public function getParent(): ?DomNodeInterface;

    public function getChildren() : DomNodeCollectionInterface;

    /**
     * @return DomNodeInterface
     */
    public function getFirstChild();

    /**
     * @return DomNodeInterface
     */
    public function getLastChild();

    /**
     * @return DomNodeInterface
     */
    public function getNthChild(int $n);

    /**
     * @return DomNodeCollectionInterface
     */
    public function getSiblings();

    public function render(): string;
}