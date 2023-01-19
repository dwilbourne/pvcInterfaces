<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\struct\tree\node;

use pvc\struct\lists\ListOrderedInterface;
use pvc\struct\tree\tree\TreeOrderedInterface;

/**
 * Interface TreenodeOrderedInterface
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeOrderedInterface, NodeValueType>
 */
interface TreenodeOrderedInterface extends TreenodeAbstractInterface
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
     * @param TreeOrderedInterface<NodeValueType> $tree
     */
    public function setReferences(TreeOrderedInterface $tree): void;

    /**
     * @function getTree
     * @return TreeOrderedInterface<NodeValueType>|null
     */
    public function getTree(): ?TreeOrderedInterface;

	/**
	 * setChildList
	 * @param ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>> $list
	 */
	public function setChildList(ListOrderedInterface $list) : void;

	/**
	 * @function getChildren
	 * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>>
	 */
	public function getChildren(): ListOrderedInterface;


	/**
     * @function getParent
     * @return TreenodeOrderedInterface<NodeValueType>|null
     */
    public function getParent(): ?TreenodeOrderedInterface;

    /**
     * @function getChild
     * @param int $nodeid
     * @return TreenodeOrderedInterface<NodeValueType>|null
     */
    public function getChild(int $nodeid): ?TreenodeOrderedInterface;

    /**
     * @function getChildrenArray
     * @return TreenodeOrderedInterface<NodeValueType>[]
     */
    public function getChildrenArray(): array;

    /**
     * @function getSiblings
     * @return ListOrderedInterface<TreenodeOrderedInterface<NodeValueType>>|null
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
     * @param TreenodeOrderedInterface<NodeValueType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeOrderedInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeOrderedInterface<NodeValueType> $node
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
