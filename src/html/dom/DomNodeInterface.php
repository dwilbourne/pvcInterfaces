<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\content_model\ContentModelInterface;

/**
 * all DomNodes implement ContentModelInterface
 */
interface DomNodeInterface extends ContentModelInterface
{
    /**
     * methods identifying the node
     */
    public function getNodeType(): NodeType;
    public function getName(): string;


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
     * @return DomNodeCollectionInterface
     */
    public function getSiblings(): DomNodeChildCollectionInterface;

    public function render(): string;
}