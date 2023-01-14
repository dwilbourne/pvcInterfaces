<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreeInterface
 *
 * @template NodeValueType
 */
interface TreeInterface
{
	/**
	 * @function setTreeId
	 * @param int $treeId
	 */
	public function setTreeId(int $treeId) : void;

    /**
     * @function getTreeId
     * @return int|null
     */
    public function getTreeId(): ? int;

	/**
	 * @function addNode
	 * @param TreenodeInterface<NodeValueType> $node
	 */
	public function addNode(TreenodeInterface $node): void;

	/**
	 * @function deleteNode
	 * @param TreenodeInterface<NodeValueType> $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode(TreenodeInterface $node, bool $deleteBranchOK = false): void;

	/**
	 * @function setNodes
	 * @param TreenodeInterface<NodeValueType>[] $nodeCollection
	 * @return void
	 */
	public function setNodes(array $nodeCollection): void;

	/**
     * @function getNodes
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getNodes(): array;

	/**
	 * getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
	 *
	 * @function getNode
	 * @param int $nodeId
	 * @return TreenodeInterface<NodeValueType>|null
	 */
	public function getNode(int $nodeId): ?TreenodeInterface;

	/**
	 * hasNode does an object compare between its argument and each node in the tree, returning true
	 * if it finds a match.  The $strict parameter controls whether the method uses "==" (all properties have the
	 * same values) or "===" ($obj1 and $obj2 are the same instance).
	 *
	 * @function hasNode
	 * @param TreenodeInterface<NodeValueType> $node
	 * @return bool
	 */
	public function hasNode(TreenodeInterface $node, bool $strict = false) : bool;

	/**
	 * @function getRoot
	 * @return TreenodeInterface<NodeValueType>|null
	 */
	public function getRoot(): ?TreenodeInterface;

	/**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function nodeCount
     * @return int
     */
    public function nodeCount(): int;

    /**
     * @function getParentOf
     * @param TreenodeInterface<NodeValueType> $node
     * @return TreenodeInterface<NodeValueType>|null
     */
    public function getParentOf(TreenodeInterface $node): ?TreenodeInterface;

    /**
     * @function getChildrenOf
     * @param TreenodeInterface<NodeValueType> $parent
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getChildrenOf(TreenodeInterface $parent): array;

    /**
     * @function getTreeDepthFirst
     * @param TreenodeInterface<NodeValueType>|null $startNode
     * @param callable|null $callback
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getTreeDepthFirst(TreenodeInterface $startNode = null, callable $callback = null): array;

    /**
     * @function getTreeBreadthFirst
     * @param TreenodeInterface<NodeValueType>|null $startNode
     * @param callable|null $callback
     * @param int|null $levels
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getTreeBreadthFirst(
        TreenodeInterface $startNode = null,
        callable $callback = null,
        int $levels = null
    ): array;

	/**
	 * @function hasLeafWithId
	 * @param int $nodeId
	 * @return bool
	 */
	public function hasLeafWithId(int $nodeId): bool;

	/**
     * @function getLeaves
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getLeaves(): array;

	/**
	 * @function hasInteriorNodeWithId
	 * @param int $nodeId
	 * @return bool
	 */
	public function hasInteriorNodeWithId(int $nodeId): bool;

	/**
     * @function getInteriorNodes
     * @return TreenodeInterface<NodeValueType>[]
     */
    public function getInteriorNodes(): array;
}
