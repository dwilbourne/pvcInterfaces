<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeOrderedUnorderedInterface;

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
	 * @function getRoot
	 * @return TreenodeOrderedUnorderedInterface<NodeTypeForTree>|null
	 */
	public function getRoot(): ?TreenodeOrderedUnorderedInterface;

	/**
	 * @function setNodes
	 * @param NodeTypeForTree[] $nodeCollection
	 * @return void
	 */
	public function setNodes(array $nodeCollection): void;

	/**
	 * @function getNodes
	 * @return NodeTypeForTree[]
	 */
	public function getNodes(): array;

	/**
	 * @function getNode
	 * @param int $nodeid
	 * @return TreenodeOrderedUnorderedInterface<NodeTypeForTree>|null
	 */
	public function getNode(int $nodeid): ?TreenodeOrderedUnorderedInterface;

	/**
	 * @function nodeCount
	 * @return int
	 */
	public function nodeCount(): int;

	/**
	 * @function hasNode
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree> $node
	 * @return bool
	 */
	public function hasNode(TreenodeOrderedUnorderedInterface $node): bool;

	/**
	 * @function isEmpty
	 * @return bool
	 */
	public function isEmpty(): bool;


	/**
	 * @function dehydrateNodes
	 * @return NodeTypeForTree[]
	 */
	public function dehydrateNodes(): array;


	/**
	 * @function getParentOf
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree> $node
	 * @return TreenodeOrderedUnorderedInterface<NodeTypeForTree>|null
	 */
	public function getParentOf(TreenodeOrderedUnorderedInterface $node): ?TreenodeOrderedUnorderedInterface;

	/**
	 * @function getChildrenOf
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree> $parent
	 * @return NodeTypeForTree[]
	 */
	public function getChildrenOf(TreenodeOrderedUnorderedInterface $parent): array;

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
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree> $node
	 */
	public function addNode(TreenodeOrderedUnorderedInterface $node): void;

	/**
	 * @function deleteNode
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree> $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode(TreenodeOrderedUnorderedInterface $node, bool $deleteBranchOK = false): void;

	/**
	 * @function getTreeDepthFirst
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree>|null $startNode
	 * @param callable|null $callback
	 * @return NodeTypeForTree[] TreenodeOrderedInterface
	 */
	public function getTreeDepthFirst(TreenodeOrderedUnorderedInterface $startNode = null, callable $callback = null): array;

	/**
	 * @function getTreeBreadthFirst
	 * @param TreenodeOrderedUnorderedInterface<NodeTypeForTree>|null $startNode
	 * @param callable|null $callback
	 * @param int|null $levels
	 * @return NodeTypeForTree[]
	 */
	public function getTreeBreadthFirst(
		TreenodeOrderedUnorderedInterface $startNode = null,
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
