<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Interface TreeInterface
 * @template NodeType of TreenodeInterface
 */
interface TreeUnorderedInterface
{
	/**
	 * setTreeId
	 * @param int $treeId
	 */
	public function setTreeId(int $treeId) : void;

    /**
     * @function getTreeId
     * @return int|null
     */
    public function getTreeId(): ? int;

	/**
	 * setRoot
	 * @param int $rootNodeId
	 */
	public function setRoot(int $rootNodeId) : void;
    /**
     * @function getRoot
     * @return TreenodeUnorderedInterface<NodeType>|null
     */
    public function getRoot(): ?TreenodeUnorderedInterface;

	/**
	 * @function setNodes
	 * @param NodeType[] $nodeCollection
	 * @return void
	 */
	public function setNodes(array $nodeCollection): void;

	/**
     * @function getNodes
     * @return TreenodeUnorderedInterface<NodeType>[]
     */
    public function getNodes(): array;


	/**
	 * getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
	 *
	 * @function getNode
	 * @param int $nodeId
	 * @return TreenodeUnorderedInterface<NodeType>|null
	 */
	public function getNode(int $nodeId): ?TreenodeUnorderedInterface;

	/**
	 * hasNode does an object compare ($obj1 == $obj2) between its argument and each node in the tree, returning true
	 * if it finds a match.
	 *
	 * @function hasNode
	 * @param int $nodeid
	 * @return bool
	 */
	public function hasNode(TreenodeUnorderedInterface $node) : bool;

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
     * @param TreenodeUnorderedInterface<NodeType> $node
     * @return TreenodeUnorderedInterface<NodeType>|null
     */
    public function getParentOf(TreenodeUnorderedInterface $node): ?TreenodeUnorderedInterface;

    /**
     * @function getChildrenOf
     * @param TreenodeUnorderedInterface<NodeType> $parent
     * @return NodeType[]
     */
    public function getChildrenOf(TreenodeUnorderedInterface $parent): array;

    /**
     * @function addNode
     * @param TreenodeUnorderedInterface<NodeType> $node
     */
    public function addNode(TreenodeUnorderedInterface $node): void;

    /**
     * @function deleteNode
     * @param TreenodeUnorderedInterface<NodeType> $node
     * @param bool $deleteBranchOK
     */
    public function deleteNode(TreenodeUnorderedInterface $node, bool $deleteBranchOK = false): void;

    /**
     * @function getTreeDepthFirst
     * @param TreenodeUnorderedInterface<NodeType>|null $startNode
     * @param callable|null $callback
     * @return NodeType[]
     */
    public function getTreeDepthFirst(TreenodeUnorderedInterface $startNode = null, callable $callback = null): array;

    /**
     * @function getTreeBreadthFirst
     * @param TreenodeUnorderedInterface<NodeType>|null $startNode
     * @param callable|null $callback
     * @param int|null $levels
     * @return NodeType[]
     */
    public function getTreeBreadthFirst(
        TreenodeUnorderedInterface $startNode = null,
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
     * @return NodeType[]
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
     * @return NodeType[]
     */
    public function getInteriorNodes(): array;
}
