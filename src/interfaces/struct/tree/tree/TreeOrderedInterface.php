<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Interface TreeOrderedInterface
 *
 * @template NodeValueType
 * @template NodeType
 */
interface TreeOrderedInterface
{
	/**
	 * @function setTreeId
	 * @param int $treeId
	 */
	public function setTreeId(int $treeId) : void;

	/**
	 * @function getTreeId
	 * @return int
	 */
	public function getTreeId(): ? int;

	/**
	 * @function addNode
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
	 */
	public function addNode(TreenodeOrderedInterface $node): void;

	/**
	 * @function deleteNode
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode(TreenodeOrderedInterface $node, bool $deleteBranchOK = false): void;

	/**
	 * @function setNodes
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType>[] $nodeCollection
	 * @return void
	 */
	public function setNodes(array $nodeCollection): void;

	/**
	 * @function getNodes
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>[]
	 */
	public function getNodes(): array;

	/**
	 * @function getNode
	 * @param int $nodeid
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>|null
	 */
	public function getNode(int $nodeid): ?TreenodeOrderedInterface;

	/**
	 * hasNode does an object compare between its argument and each node in the tree, returning true
	 * if it finds a match.  The $strict parameter controls whether the method uses "==" (all properties have the
	 * same values) or "===" ($obj1 and $obj2 are the same instance).
	 *
	 * @function hasNode
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
	 * @return bool
	 */
	public function hasNode(TreenodeOrderedInterface $node, bool $strict = false) : bool;

	/**
	 * @function getRoot
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>|null
	 */
	public function getRoot(): ?TreenodeOrderedInterface;

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
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType> $node
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>|null
	 */
	public function getParentOf(TreenodeOrderedInterface $node): ?TreenodeOrderedInterface;

	/**
	 * @function getChildrenOf
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType> $parent
	 * @return NodeValueType[]
	 */
	public function getChildrenOf(TreenodeOrderedInterface $parent): array;

	/**
	 * @function getTreeDepthFirst
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType>|null $startNode
	 * @param callable|null $callback
	 * @return NodeValueType[] TreenodeOrderedInterface
	 */
	public function getTreeDepthFirst(TreenodeOrderedInterface $startNode = null, callable $callback = null): array;

	/**
	 * @function getTreeBreadthFirst
	 * @param TreenodeOrderedInterface<NodeValueType, NodeType>|null $startNode
	 * @param callable|null $callback
	 * @param int|null $levels
	 * @return NodeValueType[]
	 */
	public function getTreeBreadthFirst(
		TreenodeOrderedInterface $startNode = null,
		callable $callback = null,
		int $levels = null
	): array;

	/**
	 * @function hasLeafWithId
	 * @param int $nodeid
	 * @return bool
	 */
	public function hasLeafWithId(int $nodeid): bool;

	/**
	 * @function hasInteriorNodeWithId
	 * @param int $nodeid
	 * @return bool
	 */
	public function hasInteriorNodeWithId(int $nodeid): bool;

	/**
	 * @function getLeaves
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>[] TreenodeOrderedInterface
	 */
	public function getLeaves(): array;

	/**
	 * @function getInteriorNodes
	 * @return TreenodeOrderedInterface<NodeValueType, NodeType>[] TreenodeOrderedInterface
	 */
	public function getInteriorNodes(): array;
}
