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
 * @template NodeValueType
 * @template NodeType
 * @extends TreenodeInterface<NodeValueType>
 * @extends TreenodeInterface<NodeType>
 */
interface TreenodeOrderedInterface extends TreenodeInterface
{
	/**
	 * @function setHydrationIndex
	 * @param int $index
	 */
	public function setHydrationIndex(int $index) : void;

	/**
	 * @function getHydrationIndex
	 * @return int|null
	 */
	public function getHydrationIndex() : ? int;

    /**
     * @function setReferences
     * @param TreeOrderedInterface<NodeValueType, NodeType> $tree
     */
    public function setReferences(TreeOrderedInterface $tree): void;

    /**
     * @function getTree
     * @return TreeOrderedInterface<NodeValueType, NodeType>|null
     */
    public function getTree(): ?TreeOrderedInterface;

	/**
	 * setChildList
	 * @param ListOrderedInterface<TreenodeOrderedInterface<NodeValueType, NodeType>> $list
	 */
	public function setChildList(ListOrderedInterface $list) : void;

	/**
	 * @function getChildren
	 * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType, NodeType>>
	 */
	public function getChildren(): ListOrderedInterface;


	/**
     * @function getParent
     * @return TreenodeOrderedInterface<NodeValueType, NodeType>|null
     */
    public function getParent(): ?TreenodeOrderedInterface;

    /**
     * @function getChild
     * @param int $nodeid
     * @return TreenodeOrderedInterface<NodeValueType, NodeType>|null
     */
    public function getChild(int $nodeid): ?TreenodeOrderedInterface;

    /**
     * @function getChildrenArray
     * @return TreenodeOrderedInterface<NodeValueType, NodeType>[]
     */
    public function getChildrenArray(): array;

    /**
     * @function getSiblings
     * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType, NodeType>>|null
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
     * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeOrderedInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
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
    public function getIndex(): ? int;
}
