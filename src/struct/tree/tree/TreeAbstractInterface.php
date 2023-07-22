<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

/**
 * Interface TreeAbstractInterface
 * @template NodeType
 * @template NodeValueType
 */
interface TreeAbstractInterface
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
	public function getTreeId(): int;

	/**
	 * @function addNode
	 * @param NodeType $node
	 */
	public function addNode($node): void;

	/**
	 * @function deleteNode
	 * @param NodeType $node
	 * @param bool $deleteBranchOK
	 */
	public function deleteNode($node, bool $deleteBranchOK = false): void;

	/**
	 * @function setNodes
	 * @param NodeType[] $nodeCollection
	 * @return void
	 */
	public function setNodes(array $nodeCollection): void;

	/**
	 * @function getNodes
	 * @return NodeType[]
	 */
	public function getNodes(): array;

	/**
	 * getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
	 *
	 * @function getNode
	 * @param int $nodeId
	 * @return NodeType|null
	 */
	public function getNode(int $nodeId);

	/**
	 * hasNode does an object compare between its argument and each node in the tree, returning true
	 * if it finds a match.  The $strict parameter controls whether the method uses "==" (all properties have the
	 * same values) or "===" ($obj1 and $obj2 are the same instance).
	 *
	 * @function hasNode
	 * @param NodeType|null $node
	 * @return bool
	 */
	public function hasNode($node = null, bool $strict = false) : bool;

	/**
	 * @function getRoot
	 * @return NodeType|null
	 */
	public function getRoot();

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
	 * @param NodeType $node
	 * @return NodeType|null
	 */
	public function getParentOf($node);

	/**
	 * @function getChildrenOf
	 * @param NodeType $parent
	 * @return NodeType[]
	 */
	public function getChildrenOf($parent): array;

	/**
     * @function getTreeDepthFirst
     * @param NodeType|null $startNode
     * @param callable|null $callback
     * @return NodeType[]
     *
     * getTreeDepthFirst allows you to search the tree from a given starting node using a depth-first algorithm.
     *
     * The starting node would typically be the root, but it does not have to be.  Also, you can supply a callback
     * which returns a boolean indicating whether a given node should be included in the result set.  This allows you to
     * search the tree and filter the resultset according to a certain set of criteria.  The returned result set is
     * an array of nodes where the key for each array element is its nodeId.
     *
     */
	public function getTreeDepthFirst($startNode = null, callable $callback = null): array;

    /**
     * @function getTreeBreadthFirst
     * @param NodeType|null $startNode
     * @param callable|null $callback
     * @param int|null $levels
     * @return NodeType[]
     *
     * same idea as getTreeDepthFirst but is a breadth first search, which obviously changes the ordering of the
     * nodes in the result set.
     */
	public function getTreeBreadthFirst($startNode = null, callable $callback = null, int $levels = null): array;

	/**
	 * @function hasLeafWithId
	 * @param ? int $nodeId
	 * @return bool
	 */
	public function hasLeafWithId(int $nodeId = null): bool;

	/**
	 * @function getLeaves
	 * @return NodeType[]
	 */
	public function getLeaves(): array;

	/**
	 * @function hasInteriorNodeWithId
	 * @param ? int $nodeId
	 * @return bool
	 */
	public function hasInteriorNodeWithId(int $nodeId = null): bool;

	/**
	 * @function getInteriorNodes
	 * @return NodeType[]
	 */
	public function getInteriorNodes(): array;

}