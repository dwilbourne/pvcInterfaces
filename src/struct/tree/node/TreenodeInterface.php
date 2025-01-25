<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\payload\HasPayloadTesterInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOFactoryInterface;
use pvc\interfaces\struct\tree\search\NodeSearchableInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Interface TreenodeInterface defines the operations for a generic tree node.
 *
 * This interface defines the operations common to all tree nodes.  Here are some of the design points.  The nodeid
 * property is immutable - the only way to set the nodeid is at hydration.  The same applies to the tree property.
 * This means that there are no setters for these properties.  Together, these two design points ensure that nodes
 * cannot be hydrated except in the context of belonging to a tree.  That in turn makes it a bit easier to enforce the
 * design point that all nodeids in a tree must be unique.
 *
 * The same is almost true for the parent property, but the difference is that the nodes are allowed to move around
 * within the same tree, e.g. you can change a node's parent as long as the new parent is in the same tree. It is
 * important to know that not only does a node keep a reference to its parent, but it also keeps a list of its
 * children.  So the setParent method is responsible not only for setting the parent property, but it also takes
 * the parent and adds a node to its child list.
 *
 * There are two concrete tree node interfaces defined in this package: ordered and unordered. The tree structure uses
 * the ordered and unordered collection interfaces to assist with these behaviors.  Like other parts of the pvcStruct
 * package, the tree and tree node components are written using phpstan generics.  If you use this package, you should
 * consider using phpstan as part of the testing of your code in order to ensure type safety.
 *
 * Finally, you will see a reference below to an object called a PayloadTester.  It is
 * not necessary to use a PayloadTester, but doing so will further ensure data integrity in your tree, since type
 * safety alone is not always enough to guarantee that each value is valid.  If you choose to use a PayloadTester,
 * make sure it is injected into the node object before setting the value of the node.
 *
 * @see CollectionInterface
 *
 * @template PayloadType of HasPayloadInterface
 * @extends HasPayloadInterface<PayloadType>
 * @extends NodeSearchableInterface<TreenodeInterface>
 */
interface TreenodeInterface extends HasPayloadInterface, NodeSearchableInterface
{
    /**
     * isEmpty
     * true if the not has not yet been hydrated with nodeId, parent, etc
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * hydrate
     * @param TreenodeDTOFactoryInterface<PayloadType> $dto
     * @param TreeInterface<PayloadType> $tree
     */
    public function hydrate(TreenodeDTOFactoryInterface $dto, TreeInterface $tree): void;
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
     * @return TreenodeInterface<PayloadType>|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @function getTree gets a reference to the tree to which the node belongs
     * @return TreeInterface<PayloadType>
     */
    public function getTree(): TreeInterface;

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
     * @function hasChildren returns true of the node does have children
     * @return bool
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeInterface<PayloadType>|null
     */
    public function getChild(int $nodeid): ?TreenodeInterface;

    /**
     * @function getChildren
     * @return CollectionInterface<PayloadType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @function getSiblings
     * @return CollectionInterface<PayloadType>
     */
    public function getSiblings(): CollectionInterface;

    /**
     * @function isDescendantOf
     * @param TreenodeInterface<PayloadType> $node
     * @return bool
     */
    public function isDescendantOf(TreenodeInterface $node): bool;

    /**
     * @function isAncestorOf
     * @param TreenodeInterface<PayloadType> $node
     * @return bool
     */
    public function isAncestorOf(TreenodeInterface $node): bool;

    /**
     * @function setIndex sets the ordinal position of this node if the collection of siblings is ordered
     *
     * If the index supplied is greater than any of the existing indices, then the node is tacked on to the end of the
     * list.
     *
     * @param non-negative-int $index
     */
    public function setIndex(int $index): void;

    /**
     * @function getIndex gets the ordinal position of this node in the ordered list of siblings
     * @return non-negative-int
     */
    public function getIndex(): int;
}
