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
 * This interface defines the operations common to all tree nodes. There are two other tree node interfaces defined in
 * this package, and they provide different signatures for additional operations.  Specifically, the children of a node
 * can be kept in a certain order.  Or perhaps for another use case, that is not necessary.  The tree structure uses
 * the ordered and unordered list interfaces to assist with
 * these behaviors.  Like other parts of the pvcStruct package, the tree and tree node components are written using
 * phpstan generics.  If you use this package, you should consider using phpstan as part of the testing of your code
 * in order to ensure type safety.  Finally, you will see a reference below to an object called a ValueValidator.  It is
 * not necessary to use a ValueValidator, but doing so will further ensure data integrity in your tree, since type
 * safety alone is not always enough to guarantee that each value is valid.  If you choose to use a valueValidator,
 * make sure it is injected into the node object before setting the value of the node.
 *
 * @see ListUnorderedInterface
 * @see ListOrderedInterface
 *
 * @template NodeType
 * @template NodeValueType
 */
interface TreenodeAbstractInterface
{
    /**
     * @function setNodeId sets the id for the node, which must be unique within the tree.
     * @param int $nodeId
     */
    public function setNodeId(int $nodeId): void;

    /**
     * @function getNodeId
     * @return int
     */
    public function getNodeId(): int;

    /**
     * @function setParent sets a reference to the parent of the node.
     *
     * @param TreenodeAbstractInterface<NodeType, NodeValueType> $parent
     * @return void
     */
    public function setParent(?TreenodeAbstractInterface $parent): void;

    /**
     * @function getParent
     * @return TreenodeAbstractInterface<NodeType, NodeValueType>
     */
    public function getParent(): ?TreenodeAbstractInterface;

    /**
     * @function setTree sets a reference to the tree to which the node belongs
     * @param TreeAbstractInterface<NodeType, NodeValueType> $tree
     */
    public function setTree(TreeAbstractInterface $tree): void;

    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeAbstractInterface<NodeType, NodeValueType>
     */
    public function getTree(): ?TreeAbstractInterface;

    /**
     * @function setValueValidator sets an object that can be used to validate a value before setting it in the node
     * @param ValidatorInterface $callable
     */
    public function setValueValidator(ValidatorInterface $callable): void;

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
     * @function getValue returns the value or "payload" of the node
     * @return NodeValueType|null
     */
    public function getValue();

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
     * @function isRoot returns true if the node is the root of the tree (e.g. has no parent)
     * @return bool
     */
    public function isRoot(): bool;

    /**
     * @function getChild
     * @param int $nodeid
     * @return TreenodeAbstractInterface<NodeType, NodeValueType>|null
     */
    public function getChild(int $nodeid): ?TreenodeAbstractInterface;

    /**
     * setChildren
     * @param ListAbstractInterface<TreenodeAbstractInterface<NodeType, NodeValueType>> $list
     */
    public function setChildren(ListAbstractInterface $list): void;

    /**
     * @function getChildren
     * @return ListAbstractInterface<TreenodeAbstractInterface<NodeType, NodeValueType>>|null
     */
    public function getChildren(): ?ListAbstractInterface;

    /**
     * @function getSiblings
     * @return ListAbstractInterface<TreenodeAbstractInterface<NodeType, NodeValueType>>|null
     */
    public function getSiblings(): ?ListAbstractInterface;

    /**
     * @function isDescendantOf
     * @param TreenodeAbstractInterface<NodeType, NodeValueType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeAbstractInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeAbstractInterface<NodeType, NodeValueType> $node
     * @return bool
     */
    public function isAncestorOf(TreenodeAbstractInterface $node): bool;
}
