<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\ordered;

/**
 * Interface TreeOrderedInterface
 * @template NodeTypeForTree
 */
interface TreeOrderedInterface
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
	 * @return TreenodeOrderedInterface<NodeTypeForTree>|null
	 */
	public function getRoot(): ?TreenodeOrderedInterface;

	/**
	 * @function getNode
	 * @param int $nodeid
	 * @return TreenodeOrderedInterface<NodeTypeForTree>|null
	 */
	public function getNode(int $nodeid): ?TreenodeOrderedInterface;

	/**
	 * @function hasNode
	 * @param TreenodeOrderedInterface<NodeTypeForTree> $node
	 * @return bool
	 */
	public function hasNode(TreenodeOrderedInterface $node): bool;

	/**
	 * @function getNodes
	 * @return NodeTypeForTree[]
	 */
	public function getNodes(): array;

	/**
	 * @function isEmpty
	 * @return bool
	 */
	public function isEmpty(): bool;

	/**
	 * @function hydrateNodes
	 * @param NodeTypeForTree[] $nodeCollection
	 * @return void
	 */
	public function hydrateNodes(array $nodeCollection): void;

	/**
	 * @function dehydrateNodes
	 * @return NodeTypeForTree[]
	 */
	public function dehydrateNodes(): array;

	/**
	 * @function nodeCount
	 * @return int
	 */
	public function nodeCount(): int;

	/**
	 * @function getParentOf
	 * @param TreenodeOrderedInterface<NodeTypeForTree> $node
	 * @return TreenodeOrderedInterface<NodeTypeForTree>|null
	 */
	public function getParentOf(TreenodeOrderedInterface $node): ?TreenodeOrderedInterface;

	/**
	 * @function getChildrenOf
	 * @param TreenodeOrderedInterface<NodeTypeForTree> $parent
	 * @return NodeTypeForTree[]
	 */
	public function getChildrenOf(TreenodeOrderedInterface $parent): array;

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
	 * @function addNode
	 * @param TreenodeOrderedInterface<NodeTypeForTree> $node
	 */
	public function addNode(TreenodeOrderedInterface $node): void;

	/**
	 * @function deleteNode
	 * @param TreenodeOrderedInterface<NodeTypeForTree> $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode(TreenodeOrderedInterface $node, bool $deleteBranchOK = false): void;

	/**
	 * @function getTreeDepthFirst
	 * @param TreenodeOrderedInterface<NodeTypeForTree>|null $startNode
	 * @param callable|null $callback
	 * @return NodeTypeForTree[] TreenodeOrderedInterface
	 */
	public function getTreeDepthFirst(TreenodeOrderedInterface $startNode = null, callable $callback = null): array;

	/**
	 * @function getTreeBreadthFirst
	 * @param TreenodeOrderedInterface<NodeTypeForTree>|null $startNode
	 * @param callable|null $callback
	 * @param int|null $levels
	 * @return NodeTypeForTree[]
	 */
	public function getTreeBreadthFirst(
		TreenodeOrderedInterface $startNode = null,
		callable $callback = null,
		int $levels = null
	): array;

	/**
	 * @function getLeaves
	 * @return NodeTypeForTree[] TreenodeOrderedInterface
	 */
	public function getLeaves(): array;

	/**
	 * @function getInteriorNodes
	 * @return NodeTypeForTree[] TreenodeOrderedInterface
	 */
	public function getInteriorNodes(): array;
}
