<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomNodeChildCollectionInterface;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;

/**
 * Elementinterface refers to html elements, IndexedElementInterface refers to
 * collections which have elements that have indexes
 */
interface DomNodeInterface extends ContentModelInterface, ElementInterface, IndexedElementInterface
{
    /**
     * tree-related methods.  We don't need all the treenode methods
     * so just list the ones we need and the implementation will use
     * a facade pattern
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