<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\DomNodeChildIndexedCollectionInterface;
use pvc\interfaces\html\element\ElementInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;

/**
 * ElementInterface refers to html elements, IndexedElementInterface refers to
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

    public function getChildren() : DomNodeChildIndexedCollectionInterface;

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
     * @return DomNodeChildIndexedCollectionInterface
     */
    public function getSiblings(): DomNodeChildIndexedCollectionInterface;

    /**
     * hasAncestorNamed
     * @param  string  $name
     * @return bool
     */
    public function hasAncestorNamed(string $name): bool;
}