<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Interface TreenodeInterface defines the basic operations for a generic tree node.
 *
 * each node has an id which is unique within the tree.  That id will be used as
 * a key in collections and arrays so it is typed as a generic array-key,
 * leaving the implementor to choose between integers and strings.
 *
 * Since nodes will almost certainly be subclassed, treenodes themselves are generic also.
 *
 * Each node has a collection of children.  The type of collection can vary so
 * it is also generic
 *
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 * @template CollectionType of TreenodeCollectionInterface
 */
interface TreenodeInterface
{
    /**
     * methods necessary to implement the basic rules of creating and using
     * treenodes
     */

    /**
     * hydrate
     * @param  TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>  $dto
     *
     * should set all required properties in the node
     *
     * @return void
     */
    public function hydrate(TreenodeDtoInterface $dto): void;

    /**
     * dehydrate
     * @return TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function dehydrate(): TreenodeDtoInterface;

    /**
     * getNodeId
     * @return mixed
     */
    public function getNodeId();

    /**
     * There is no setNodeId method, nodes are hydrated such that all
     * required properties are set simultaneously
     */

    /**
     * @return NodeType|null
     */
    public function getParent();

    /**
     * @param NodeType|null $parent
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent($parent): void;

    /**
     * Implementations of this interface might choose to keep a reference to
     * the containing tree in order to perform certain operations more
     * efficiently.  But there is nothing in the logic of these methods that
     * forces an implementation to keep such a reference.  So while it might
     * seem natural to provide a getTree method in an implementation, there
     * is no such method in the interface.
     *
     * Also, this interface does not provide a method for moving a node from
     * one tree to another.  So there is no separate setTree method either.
     */

    /**
     * relationship methods: allow you to get other nodes based on their
     * relational position in the tree
     */


    /**
     * methods describing the nature of the node.
     */

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
     * @return bool
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param NodeIdType $nodeId
     * @return NodeType|null
     */
    public function getChild($nodeId);

    /**
     * @function getChildren
     * @return CollectionType
     */
    public function getChildren();

    /**
     * @return CollectionType
     */
    public function getSiblings();

}
