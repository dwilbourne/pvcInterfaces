<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\struct\treesearch\NodeVisitableInterface;

/**
 * Interface TreenodeInterface defines the basic operations for a generic tree node.
 *
 * each node has an id which is unique within the tree.  That id will be used as
 * a key in collections and arrays so it must be of type array-key
 *
 * nodes in a tree usually have a specific kind of payload and that payload 
 * must be of the same type in all the nodes of the tree.  And since nodes will
 * almost certainly be subclassed, make the treenodes themselves generic also.
 *
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @template NodeType of TreenodeInterface
 *
 * NodeVisitableInterface allows treenodes to participate in a depth first search
 *
 * IndexedElementInterface allows treenodes to participate in an indexed collection,
 * meaning you can put the child nodes of a node into an arbitrary order
 *
 * @extends NodeVisitableInterface<NodeIdType>
 * @see CollectionInterface
 */
interface TreenodeInterface extends NodeVisitableInterface, IndexedElementInterface
{
    /**
     * methods necessary to implement the basic rules of creating and maintaining
     * treenodes
     */

    /**
     * @param  NodeIdType  $nodeId
     * immutable unique identifier for the node
     * @return void
     */
    public function setNodeId($nodeId): void;

    /**
     * @return NodeIdType
     */
    public function getNodeId(): int|string;

    /**
     * @param ?TreenodeInterface<NodeIdType, TreeIdType, NodeType> $parent
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent(?TreenodeInterface $parent): void;

    /**
     * @function getParent
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @param  TreeInterface<NodeIdType, TreeIdType, NodeType>  $tree
     * nodes need a reference to the tree when setting the parent in order
     * to validate the proposed parent node
     * @return void
     */
    public function setTree(TreeInterface $tree): void;

    /**
     * @param  TreenodeInterface<NodeIdType, TreeIdType, NodeType>  $node
     *
     * @return bool
     *
     * In order to ensure we do not create a circular graph when setting a parent,
     * we need this method.
     *
     * The obvious way to implement this is via recursion.  That implementation
     * is going to involve a call to parent->isDescendantOf, which means it must be
     * part of the interface, even if it seems a little out of place.
     */
    public function isDescendantOf(TreenodeInterface $node): bool;

    /**
     * indexed elements can be put into an arbitrary order, e.g. nodes that
     * are part of an ordered collection must support IndexedElementInterface.
     * these are included as result of extending IndexedElementInterface
     */

    /**
     * public function setIndex(int $index): void
     * public function getIndex(int $index): int
     */

    /**
     * relationship methods: allow you to get other nodes based on their
     * relational position in the tree
     */


    /**
     * methods describing the nature of the node.
     */

    /**
     * isDescendandOf is included as part of the core interface and serves a dual purpose.
     * It is both necessary to ensure a valid tree but it also o provides general method
     * for gathering information about node relationships
     * 
     * public function isDescendantOf(TreenodeInterface $node): bool;
     */
    

    /**
     * @param  TreenodeInterface<NodeIdType, TreeIdType, NodeType>  $node
     *
     * @return bool
     */
    public function isAncestorOf(TreenodeInterface $node): bool;

    public function isRoot(): bool;


    /**
     * methods related to children / siblings
     */

    /**
     * @function getChildren
     * @return TreenodeCollectionInterface<NodeIdType, TreeIdType, NodeType>
     */
    public function getChildren(): TreenodeCollectionInterface;

    /**
     * @return bool
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param NodeIdType $nodeId
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>|null
     */
    public function getChild($nodeId): ?TreenodeInterface;

    /**
     * @return array<NodeIdType, TreenodeInterface<NodeIdType, TreeIdType, NodeType>>
     */
    public function getChildrenArray(): array;

    /**
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>|null
     */
    public function getFirstChild(): ?TreenodeInterface;

    /**
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>|null
     */
    public function getLastChild(): ?TreenodeInterface;

    /**
     * @param non-negative-int $n
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>|null
     */
    public function getNthChild(int $n): ?TreenodeInterface;

    /**
     * @return TreenodeCollectionInterface<NodeIdType, TreeIdType, NodeType>
     */
    public function getSiblings(): TreenodeCollectionInterface;

}
