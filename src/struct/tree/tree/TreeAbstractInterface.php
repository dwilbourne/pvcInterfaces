<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;

/**
 * Interface TreeAbstractInterface defines the operations common to all trees, both ordered and unordered.
 *
 * Trees have an id, allowing you to work with multiple trees at once.  Each tree consist of "nodes", and each node
 * can carry any sort of value you would like.  Because the structure is written using generics via phpstan, you
 * should consider using phpstan as part of the testing of your code in order to maintain type consistency throughout.
 * A tree can be empty (e.g. it has no nodes).  If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.
 *
 * @template NodeType
 * @template NodeValueType
 */
interface TreeAbstractInterface
{
    /**
     * @function setTreeId sets the id of the tree.
     *
     * There is nothing that prevents you from giving two trees the
     * same id, although of course that is not advisable.  The vision is that trees are kept in a data store which is
     * responsible for allocating unique ids to the trees (e.g. a relational database).
     *
     * @param int $treeId
     */
    public function setTreeId(int $treeId): void;

    /**
     * @function getTreeId
     * @return int
     */
    public function getTreeId(): int;

    /**
     * there is no addNode method - nodes are automatically added to a tree when they are created
     */

    /**
     * @function deleteNode
     * @param TreenodeAbstractInterface<NodeType, NodeValueType> $node
     * @param bool $deleteBranchOK
     */
    public function deleteNode($node, bool $deleteBranchOK = false): void;

    /**
     * @function getNodes
     * @return array<TreenodeAbstractInterface<NodeType, NodeValueType>>
     */
    public function getNodes(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param int $nodeId
     * @return TreenodeAbstractInterface<NodeType, NodeValueType>|null
     */
    public function getNode(int $nodeId): TreenodeAbstractInterface|null;

    /**
     *
     * @function hasNode true of the node to be tested appears in the tree
     *
     * hasNode does an object compare between its argument and each node in the tree, returning true
     * if it finds a match.  The $strict parameter controls whether the method uses "==" (all properties have the
     * same values) or "===" ($obj1 and $obj2 are the same instance).
     *
     * @param TreenodeAbstractInterface<NodeType, NodeValueType>|null $nodeToBeTested
     * @return bool
     */
    public function hasNode($nodeToBeTested = null, bool $strict = false): bool;

    /**
     * @function getRoot
     * @return TreenodeAbstractInterface<NodeType, NodeValueType>|null
     */
    public function getRoot(): ?TreenodeAbstractInterface;

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
     * @function getTreeDepthFirst allows you to search the tree from a given starting node using a depth-first
     * algorithm.
     *
     * The starting node would typically be the root, but it does not have to be.  Also, you can supply a callback
     * which returns a boolean indicating whether a given node should be included in the result set.  This allows you to
     * search the tree and filter the result set according to a certain set of criteria.  The returned result set is
     * an array of nodes where the key for each array element is its nodeId.
     *
     * @param TreenodeAbstractInterface<NodeType, NodeValueType>|null $startNode
     * @param callable|null $callback
     * @return array<TreenodeAbstractInterface<NodeType, NodeValueType>>
     */
    public function getTreeDepthFirst(TreenodeAbstractInterface $startNode = null, callable $callback = null): array;

    /**
     * @function getTreeBreadthFirst returns the nodes in a tree using a breadth first algorithm
     * @param TreenodeAbstractInterface<NodeType, NodeValueType>|null $startNode
     * @param callable|null $callback
     * @param int|null $maxLevels
     * @return array<TreenodeAbstractInterface<NodeType, NodeValueType>>
     *
     * same idea as getTreeDepthFirst but is a breadth first search, which obviously changes the ordering of the
     * nodes in the result set.  Also has a parameter which allows you to limit the depth to which the search will
     * be performed.
     */
    public function getTreeBreadthFirst(
        TreenodeAbstractInterface $startNode = null,
        callable $callback = null,
        int $maxLevels = null
    ): array;

    /**
     * @function getLeaves
     * @return array<TreenodeAbstractInterface<NodeType, NodeValueType>>
     */
    public function getLeaves(): array;

    /**
     * @function getInteriorNodes
     * @return array<TreenodeAbstractInterface<NodeType, NodeValueType>>
     */
    public function getInteriorNodes(): array;
}
