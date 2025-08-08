<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomNodeChildCollectionInterface;

/**
 * all DomNodes implement ContentModelInterface
 */
interface DomNodeInterface extends NodeTypeInterface, ContentModelInterface
{

    /**
     * tree-related methods
     */
    public function getParent(): ?DomNodeInterface;

    public function getChildren() : DomNodeChildCollectionInterface;

    /**
     * @return ?DomNodeInterface
     */
    public function getFirstChild(): ?DomNodeInterface;

    /**
     * @return ?DomNodeInterface
     */
    public function getLastChild(): ?DomNodeInterface;

    /**
     * @return ?DomNodeInterface
     */
    public function getNthChild(int $n): ?DomNodeInterface;

    /**
     * @return DomNodeChildCollectionInterface
     */
    public function getSiblings(): DomNodeChildCollectionInterface;

    public function render(): string;
}