<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\struct\treesearch\NodeVisitableInterface;

/**
 * Interface TreenodeInterface defines the operations for a generic tree node.
 *
 * @template PayloadType
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionInterface
 * @extends HasPayloadInterface<PayloadType>
 *
 * @phpstan-type TreenodeDto object{'nodeId': non-negative-int, 'parentId': ?non-negative-int, 'treeId': ?non-negative-int, 'payload': mixed, 'index'?:non-negative-int}
 *
 * @see CollectionInterface
 */
interface TreenodeInterface extends HasPayloadInterface, NodeVisitableInterface
{
    /**
     * isEmpty
     * true if the not has not yet been hydrated with nodeId, parent, etc
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * hydrate
     * @param TreenodeDto $dto
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
     * @function setParent sets a reference to the parent of the node.
     *
     * parent node must be in the same tree.
     *
     * @param non-negative-int|null $parentId
     * @return void
     */
    public function setParent(?int $parentId): void;

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
     * @return TreeInterface<PayloadType, TreenodeType, CollectionType>
     */
    public function getTree(): TreeInterface;

    /**
     * @function getParent
     * @return TreenodeType|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeType|null
     */
    public function getChild(int $nodeid): ?TreenodeInterface;

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @return array<TreenodeType>
     */
    public function getChildrenArray(): array;
}
