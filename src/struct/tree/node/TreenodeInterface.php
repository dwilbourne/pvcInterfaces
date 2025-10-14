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
 * a key in collections and arrays so it is typed as a generic array-key,
 * leaving the implementor to choose between integers and strings.  It is important to
 * note that the same generic is used for both tree ids and treenode ids so that
 * trees and nodes have the same type.  This is not a logic requirement, but it
 * keeps the specification of the types simpler
 *
 * Since nodes will almost certainly be subclassed, treenodes themselves are generic also.
 *
 * Each node has a collection of children.  The type of collection can vary so
 * it is also generic
 *
 * @template NodeId
 *
 * @template TreeType of TreeInterface
 * @template NodeType of TreenodeInterface
 * @template CollectionType of CollectionInterface
 *
 * @extends NodeVisitableInterface<NodeId>
 *
 * NodeVisitableInterface allows treenodes to participate in a depth first search
 *
 * IndexedElementInterface allows treenodes to participate in an indexed collection,
 * meaning you can put the child nodes of a node into an arbitrary order
 */
interface TreenodeInterface extends NodeVisitableInterface, IndexedElementInterface
{
    /**
     * methods necessary to implement the basic rules of creating and maintaining
     * treenodes
     */

    /**
     * setNodeId
     * @param NodeId $nodeId
     *
     * @return void
     */
    public function setNodeId($nodeId): void;

    /**
     * @return NodeId
     */
    public function getNodeId();

    /**
     * setTree
     * @param TreeType $tree
     *
     * @return void
     */
    public function setTree($tree): void;

    /**
     * @param NodeType|null $parent
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent($parent): void;

    /**
     * @function getParent
     * @return NodeType|null
     */
    public function getParent();

    /**
     * @param  NodeType  $node
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
    public function isDescendantOf($node): bool;

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
     * @param  NodeType  $node
     *
     * @return bool
     */
    public function isAncestorOf($node): bool;

    public function isRoot(): bool;


    /**
     * methods related to children / siblings
     */

    /**
     * @function getChildren
     * @return CollectionType
     */
    public function getChildren();

    /**
     * @return bool
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param NodeId $nodeId
     * @return NodeType|null
     */
    public function getChild($nodeId);

    /**
     * @return array<NodeId, NodeType>
     */
    public function getChildrenArray(): array;

    /**
     * @return NodeType|null
     */
    public function getFirstChild();

    /**
     * @return NodeType|null
     */
    public function getLastChild();

    /**
     * @param non-negative-int $n
     * @return NodeType|null
     */
    public function getNthChild(int $n);

    /**
     * @return CollectionType
     */
    public function getSiblings();

}
