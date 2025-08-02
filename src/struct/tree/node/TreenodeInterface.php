<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\struct\treesearch\NodeVisitableInterface;

/**
 * Interface TreenodeInterface defines the basic operations for a generic tree node.
 *
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionOrderedInterface
 * @template TreeType of TreeInterface
 *
 * NodeVisitableInterface allows treenodes to participate in a depth first search
 *
 * IndexedElementInterface allows treenodes to participate in an ordered collection,
 * meaning you can put the child nodes of a node into an arbitrary order
 *
 * @see CollectionInterface
 */
interface TreenodeInterface extends NodeVisitableInterface, IndexedElementInterface
{
    /**
     * methods necessary to implement the basic rules of creating and maintaining
     * treenodes
     */

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
    public function setParent(?TreenodeInterface $parent): void;

    /**
     * @function getParent
     * @return TreenodeType|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @param  TreeType  $tree
     * nodes need a reference to the tree when setting the parent in order
     * to validate the proposed parent node
     * @return void
     */
    public function setTree(TreeInterface $tree): void;

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
    public function isDescendantOf(TreenodeInterface $node): bool;

    /**
     * indexed elements can be put into an arbitrary order, e.g. nodes that
     * are part of an ordered collection must support IndexedElementInterface.
     * these are included as result of extending IndexedElementInterface
     */

    /**
     * public function setIndex(int $index): void
     * public function getIndex(int $index): int
     */

    /**
     * relationship methods: allow you to get other nodes based on their
     * relational position in the tree
     */


    /**
     * ancestor / descendant methods.
     */

    /**
     * isDescendandOf is included as part of the core interface and serves a dual purpose.
     * It is both necessary to ensure a valid tree but it also o provides general method
     * for gathering information about node relationships
     * 
     * public function isDescendantOf(TreenodeInterface $node): bool;
     */
    

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     */
    public function isAncestorOf(TreenodeInterface $node): bool;

    /**
     * methods related to children
     */

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @return bool
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeType|null
     */
    public function getChild(int $nodeid): ?TreenodeInterface;

    /**
     * @return array<non-negative-int, TreenodeType>
     */
    public function getChildrenArray(): array;

    /**
     * @return TreenodeType|null
     */
    public function getFirstChild(): ?TreenodeInterface;

    /**
     * @return TreenodeType|null
     */
    public function getLastChild(): ?TreenodeInterface;

    /**
     * @param non-negative-int $n
     * @return TreenodeType|null
     */
    public function getNthChild(int $n): ?TreenodeInterface;

}
