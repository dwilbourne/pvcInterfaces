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
 * Interface TreenodeInterface defines the operations for a generic tree node.
 *
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionInterface
 * @template TreeType of TreeInterface
 *
 * @phpstan-type TreenodeDtoShape object{nodeId: non-negative-int, parentId: ?non-negative-int, treeId: ?non-negative-int, index?:non-negative-int}
 *
 * @see CollectionInterface
 */
interface TreenodeInterface extends NodeVisitableInterface
{
    /**
     * isEmpty
     * true if the not has not yet been hydrated with nodeId, parent, etc
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * hydrate
     * @param TreenodeDtoShape $dto
     */
    public function hydrate($dto): void;

    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getParentId
     * @return non-negative-int|null
     */
    public function getParentId(): ?int;

    /**
     * getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * @param  TreeType  $tree
     *
     * @return void
     */
    public function setTree(TreeInterface $tree): void;

    /**
     * @function setParent sets a reference to the parent of the node.
     *
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent(): void;

    /**
     * @return bool
     */
    public function isRoot(): bool;

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     */
    public function isDescendantOf(TreenodeInterface $node): bool;

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     */
    public function isAncestorOf(TreenodeInterface $node): bool;

    public function isLeaf(): bool;

    public function hasChildren(): bool;


    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeType
     */
    public function getTree(): TreeInterface;

    /**
     * @function getParent
     * @return TreenodeType|null
     */
    public function getParent();

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeType|null
     */
    public function getChild(int $nodeid);

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @return TreenodeType|null
     */
    public function getFirstChild();

    /**
     * @return TreenodeType|null
     */
    public function getLastChild();

    /**
     * @param non-negative-int $n
     * @return TreenodeType|null
     */
    public function getNthChild(int $n);

    /**
     * @return array<TreenodeType>
     */
    public function getChildrenArray(): array;
}
