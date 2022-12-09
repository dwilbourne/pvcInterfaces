<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\unordered;

/**
 * Interface TreeInterface
 * @template NodeType of TreenodeInterface
 */
interface TreeInterface
{
	/**
	 * @function getTreeId
	 * @return int
	 */
	public function getTreeId(): int;

	/**
	 * @function setTreeId
	 * @param int $id
	 */
	public function setTreeId(int $id): void;

	/**
	 * @function getRoot
	 * @return TreenodeInterface<NodeType>|null
	 */
	public function getRoot(): ?TreenodeInterface;

	/**
	 * @function getNode
	 * @param int $nodeId
	 * @return TreenodeInterface<NodeType>|null
	 */
	public function getNode(int $nodeId): ?TreenodeInterface;

	/**
	 * @function hasNode
	 * @param TreenodeInterface<NodeType> $node
	 * @return bool
	 */
	public function hasNode(TreenodeInterface $node): bool;

	/**
	 * @function getNodes
	 * @return TreenodeInterface<NodeType>[]
	 */
	public function getNodes(): array;

	/**
	 * @function isEmpty
	 * @return bool
	 */
	public function isEmpty(): bool;

	/**
	 * @function hydrateNodes
	 * @param NodeType[] $nodeCollection
	 * @return void
	 */
	public function hydrateNodes(array $nodeCollection): void;

	/**
	 * @function dehydrateNodes
	 * @return NodeType[] TreeNodeInterface
	 */
	public function dehydrateNodes(): array;

	/**
	 * @function nodeCount
	 * @return int
	 */
	public function nodeCount(): int;

	/**
	 * @function getParentOf
	 * @param TreenodeInterface<NodeType> $node
	 * @return TreenodeInterface<NodeType>|null
	 */
	public function getParentOf(TreenodeInterface $node): ?TreenodeInterface;

	/**
	 * @function getChildrenOf
	 * @param TreenodeInterface<NodeType> $parent
	 * @return NodeType[]
	 */
	public function getChildrenOf(TreenodeInterface $parent): array;

	/**
	 * @function hasLeafWithId
	 * @param int $nodeId
	 * @return bool
	 */
	public function hasLeafWithId(int $nodeId): bool;

	/**
	 * @function hasInteriorNodeWithId
	 * @param int $nodeId
	 * @return bool
	 */
	public function hasInteriorNodeWithId(int $nodeId): bool;

	/**
	 * @function addNode
	 * @param TreenodeInterface<NodeType> $node
	 */
	public function addNode(TreenodeInterface $node): void;

	/**
	 * @function deleteNode
	 * @param TreenodeInterface<NodeType> $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode(TreenodeInterface $node, bool $deleteBranchOK = false): void;

	/**
	 * @function getTreeDepthFirst
	 * @param TreenodeInterface<NodeType>|null $startNode
	 * @param callable|null $callback
	 * @return NodeType[]
	 */
	public function getTreeDepthFirst(TreenodeInterface $startNode = null, callable $callback = null): array;

	/**
	 * @function getTreeBreadthFirst
	 * @param TreenodeInterface<NodeType>|null $startNode
	 * @param callable|null $callback
	 * @param int|null $levels
	 * @return NodeType[]
	 */
	public function getTreeBreadthFirst(
		TreenodeInterface $startNode = null,
		callable $callback = null,
		int $levels = null
	): array;

	/**
	 * @function getLeaves
	 * @return NodeType[]
	 */
	public function getLeaves(): array;

	/**
	 * @function getInteriorNodes
	 * @return NodeType[]
	 */
	public function getInteriorNodes(): array;
}
