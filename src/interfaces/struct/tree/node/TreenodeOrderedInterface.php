<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\lists\ordered\ListOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Interface TreenodeOrderedInterface
 * @template OrderedNodeType
 * @extends TreenodeUnorderedInterface<OrderedNodeType>
 */
interface TreenodeOrderedInterface extends TreenodeUnorderedInterface
{
    /**
     * @function setReferences
     * @template NodeTypeForTree of TreeOrderedInterface
     * @param NodeTypeForTree $tree
     */
    public function setReferences(TreeOrderedInterface $tree): void;

    /**
     * @function getTree
     * @return \pvc\interfaces\struct\tree\tree\TreeOrderedInterface<OrderedNodeType>|null
     */
    public function getTree(): ?TreeOrderedInterface;

    /**
     * @function getParent
     * @return TreenodeOrderedInterface<OrderedNodeType>|null
     */
    public function getParent(): ?TreenodeOrderedInterface;

    /**
     * @function getChild
     * @param int $nodeid
     * @return TreenodeOrderedInterface<OrderedNodeType>|null
     */
    public function getChild(int $nodeid): ?TreenodeOrderedInterface;

    /**
     * @function getChildren
     * @return ListOrderedInterface<OrderedNodeType>
     */
    public function getChildren(): ListOrderedInterface;

    /**
     * @function getChildrenArray
     * @return OrderedNodeType[]
     */
    public function getChildrenArray(): array;

    /**
     * @function getSiblings
     * @return ListOrderedInterface<OrderedNodeType>|null
     */
    public function getSiblings(): ?ListOrderedInterface;

    /**
     * @function isLeaf
     * @return bool
     */
    public function isLeaf(): bool;

    /**
     * @function isInteriorNode
     * @return bool
     */
    public function isInteriorNode(): bool;

    /**
     * @function isRoot
     * @return bool
     */
    public function isRoot(): bool;

    /**
     * @function isDescendantOf
     * @param TreenodeOrderedInterface<OrderedNodeType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeOrderedInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeOrderedInterface<OrderedNodeType> $node
     * @return bool
     */
    public function isAncestorOf(TreenodeOrderedInterface $node): bool;

    /**
     * @function setIndex
     * @param int $index
     */
    public function setIndex(int $index): void;

    /**
     * @function getIndex
     * @return int
     */
    public function getIndex(): int;

    /**
     * @function setHydrationIndex
     * @param int $index
     */
    public function setHydrationIndex(int $index): void;

    /**
     * @function getHydrationIndex
     * @return int|null
     */
    public function getHydrationIndex(): ?int;
}
