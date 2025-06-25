<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Interface TreenodeInterface defines the operations for a generic tree node.
 *
 * @template PayloadType
 * @extends HasPayloadInterface<PayloadType>
 *
 * @see CollectionInterface
 *
 * @phpstan-type TreenodeDtoShape object{'nodeId': non-negative-int, 'parentId': ?non-negative-int, 'treeId': ?non-negative-int, 'payload': mixed, 'index': ?non-negative-int}
 */
interface TreenodeInterface extends HasPayloadInterface
{
    /**
     * isEmpty
     * true if the not has not yet been hydrated with nodeId, parent, etc
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * hydrate
     * @param TreenodeDtoShape&DtoInterface $dto
     */
    public function hydrate(DtoInterface $dto): void;

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
     * @function getParent
     * @return TreenodeInterface<PayloadType>|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeInterface<PayloadType>
     */
    public function getTree(): TreeInterface;

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
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeInterface<PayloadType>|null
     */
    public function getChild(int $nodeid): ?TreenodeInterface;

    /**
     * @function getChildren
     * @return CollectionInterface<TreenodeInterface<PayloadType>>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @return bool
     */
    public function isRoot(): bool;

    /**
     * @param  TreenodeInterface<PayloadType>  $node
     *
     * @return bool
     */
    public function isDescendantOf(TreenodeInterface $node): bool;

    /**
     * @param  TreenodeInterface<PayloadType>  $node
     *
     * @return bool
     */
    public function isAncestorOf(TreenodeInterface $node): bool;

    public function isLeaf(): bool;

    public function hasChildren(): bool;
}
