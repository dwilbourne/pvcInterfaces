<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\payload\HasPayloadValidatorInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Interface TreenodeAbstractInterfaceHasHas defines the operations for a generic tree node.
 *
 * This interface defines the operations common to all tree nodes.  Here are some of the design points.  The nodeid
 * property is immutable - the only way to set the nodeid is at construction.  The same applies to the tree property.
 * This means that there are no setters for these properties.  Together, these two design points ensure that nodes
 * cannot be created except in the content of belonging to a tree.  That in turn makes it a bit easier to enforce the
 * design point that all nodeids in a tree must be unique.
 *
 * The same is almost true for the parent property, but the difference is that the nodes are allowed to move around
 * within the same tree, e.g. you can change a node's parent as long as the new parent is in the same tree. It is
 * important to know that not only does a node keep a reference to its parent, but it also keeps a list of its
 * children.  So the setParent method is responsible not only for setting the parent property, but it also takes
 * the parent and adds a node to its child list.
 *
 * There is no method for a node moving itself between trees.  In order to accomplish this, trees have a method which
 * allows you to create a copy of a branch from another tree.  Then you can delete the source branch from the
 * source tree if you want a move and not a copy.
 *
 * There are two concrete tree node interfaces defined in this package: ordered and unordered. The tree structure uses
 * the ordered and unordered collection interfaces to assist with these behaviors.  Like other parts of the pvcStruct
 * package, the tree and tree node components are written using phpstan generics.  If you use this package, you should
 * consider using phpstan as part of the testing of your code in order to ensure type safety.
 *
 * Finally, you will see a reference below to an object called a ValueValidator.  It is
 * not necessary to use a ValueValidator, but doing so will further ensure data integrity in your tree, since type
 * safety alone is not always enough to guarantee that each value is valid.  If you choose to use a valueValidator,
 * make sure it is injected into the node object before setting the value of the node.
 *
 * @see CollectionUnorderedInterface
 * @see CollectionOrderedInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @extends HasPayloadInterface<PayloadType>
 * @extends HasPayloadValidatorInterface<PayloadType>
 */
interface TreenodeAbstractInterfaceHasHas extends HasPayloadInterface, HasPayloadValidatorInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getParentId
     * @return non-negative-int|null
     */
    public function getParentId(): ?int;

    /**
     * @function getParent
     * @return NodeType
     */
    public function getParent(): ?TreenodeAbstractInterfaceHasHas;

    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeType
     */
    public function getTree(): TreeAbstractInterface;

    /**
     * getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * @function setParent sets a reference to the parent of the node.
     *
     * parent node must be in the same tree.
     *
     * @param non-negative-int|null $parentId
     * @return void
     */
    public function setParent(?int $parentId): void;

    /**
     * @function isLeaf returns true if the node has no children
     * @return bool
     */
    public function isLeaf(): bool;

    /**
     * @function isInteriorNode returns true of the node does have children
     * @return bool
     */
    public function isInteriorNode(): bool;

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return NodeType|null
     */
    public function getChild(int $nodeid): ?TreenodeAbstractInterfaceHasHas;

    /**
     * @function getChildren
     * @return CollectionType
     */
    public function getChildren(): CollectionAbstractInterface;

    /**
     * @function getSiblings
     * @return CollectionType
     */
    public function getSiblings(): CollectionAbstractInterface;

    /**
     * @function isDescendantOf
     * @param NodeType $node
     * @return bool
     */
    public function isDescendantOf(TreenodeAbstractInterfaceHasHas $node): bool;

    /**
     * @function isAncestorOf
     * @param NodeType $node
     * @return bool
     */
    public function isAncestorOf(TreenodeAbstractInterfaceHasHas $node): bool;

    /**
     * getVisitCount
     * maintains a count of the number of times this node has been visited by a NodeTraveler
     * @return non-negative-int
     */
    public function getVisitCount(): int;

    /**
     * addVisit
     */
    public function addVisit(): void;

    /**
     * clearVisitCount
     */
    public function clearVisitCount(): void;
}
