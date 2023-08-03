<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\lists\ListAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;
use pvc\interfaces\validator\ValidatorInterface;

/**
 * Interface TreenodeAbstractInterface defines the operations for a generic tree node.
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
 * the ordered and unordered list interfaces to assist with these behaviors.  Like other parts of the pvcStruct package,
 * the tree and tree node components are written using phpstan generics.  If you use this package, you should consider
 * using phpstan as part of the testing of your code in order to ensure type safety.
 *
 * Finally, you will see a reference below to an object called a ValueValidator.  It is
 * not necessary to use a ValueValidator, but doing so will further ensure data integrity in your tree, since type
 * safety alone is not always enough to guarantee that each value is valid.  If you choose to use a valueValidator,
 * make sure it is injected into the node object before setting the value of the node.
 *
 * @see ListUnorderedInterface
 * @see ListOrderedInterface
 *
 * @template NodeType
 * @template NodeValueType
 * @template ListType
 * @extends TreenodeValueObjectInterface<NodeValueType>
 */
interface TreenodeAbstractInterface extends TreenodeValueObjectInterface
{
    /**
     * @function setParent sets a reference to the parent of the node.
     *
     * parent node must be in the same tree.
     *
     * @param TreenodeAbstractInterface<NodeType, NodeValueType, ListType> $parent
     * @return void
     */
    public function setParent(?TreenodeAbstractInterface $parent): void;

    /**
     * @function getParent
     * @return  TreenodeAbstractInterface<NodeType, NodeValueType, ListType>
     */
    public function getParent(): ?TreenodeAbstractInterface;

    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeAbstractInterface<NodeType, NodeValueType, ListType>
     */
    public function getTree(): ?TreeAbstractInterface;

    /**
     * @function setValueValidator sets an object that can be used to validate a value before setting it in the node
     * @param ValidatorInterface $validator
     */
    public function setValueValidator(ValidatorInterface $validator): void;

    /**
     * @function getValueValidator returns a reference to the value validator
     * @return ValidatorInterface|null
     */
    public function getValueValidator(): ?ValidatorInterface;

    /**
     * @function setValue sets the vaslue or "payload" of the node
     * @param NodeValueType $value
     */
    public function setValue($value): void;

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
     * @return  TreenodeAbstractInterface<NodeType, NodeValueType, ListType>|null
     */
    public function getChild(int $nodeid): ?TreenodeAbstractInterface;

    /**
     * @function getChildren
     * @return ListAbstractInterface<ListType,  TreenodeAbstractInterface<NodeType, NodeValueType, ListType>>|null
     */
    public function getChildren(): ?ListAbstractInterface;

    /**
     * @function getSiblings
     * @return ListAbstractInterface<ListType,  TreenodeAbstractInterface<NodeType, NodeValueType, ListType>>|null
     */
    public function getSiblings(): ?ListAbstractInterface;

    /**
     * @function isDescendantOf
     * @param TreenodeAbstractInterface<NodeType, NodeValueType, ListType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeAbstractInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeAbstractInterface<NodeType, NodeValueType, ListType> $node
     * @return bool
     */
    public function isAncestorOf(TreenodeAbstractInterface $node): bool;
}
