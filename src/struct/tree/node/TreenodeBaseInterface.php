<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\struct\treesearch\NodeVisitableInterface;

/**
 * Interface TreenodeInterface defines the basic operations for a generic tree node.
 *
 * @template TreenodeType of TreenodeBaseInterface
 * @template CollectionType of CollectionInterface
 * @template TreeType of TreeInterface
 *
 * @see CollectionInterface
 */
interface TreenodeBaseInterface extends NodeVisitableInterface
{
    /**
     * @param  int  $nodeId
     * immutable unique identifier for the node
     * @return void
     */
    public function setNodeId(int $nodeId): void;

    /**
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * @param ?TreenodeType $parent
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent(?TreenodeBaseInterface $parent): void;

    /**
     * @function getParent
     * @return TreenodeType|null
     */
    public function getParent(): ?TreenodeBaseInterface;

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     *
     * In order to ensure we do not create a circular graph when setting a parent,
     * we need this method.
     *
     * The obvious way to implement this is via recursion.  That implementation
     * is going to involve a call to parent->isDescendantOf, which means it must be
     * part of the interface, even if it seems a little out of place.
     */
    public function isDescendantOf(TreenodeBaseInterface $node): bool;
}
