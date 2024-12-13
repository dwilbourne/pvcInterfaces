<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\node\factory\TreenodeFactoryInterface;
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
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template DtoType of TreenodeDTOInterface
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
     * @param non-negative-int $treeId
     */
    public function setTreeId(int $treeId): void;

    /**
     * @function getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * getTreenodeFactory
     * @return TreenodeFactoryInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>
     */
    public function getTreenodeFactory(): TreenodeFactoryInterface;

    /**
     * setTreenodeFactory
     * @phpcs:ignore
     * @param TreenodeFactoryInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType> $treenodeFactory
     */
    public function setTreenodeFactory(TreenodeFactoryInterface $treenodeFactory): void;

    /**
     * addNode puts a node into the tree's list of nodes.
     *
     * @param TreenodeDTOInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType> $dto
     */
    public function addNode(TreenodeDTOInterface $dto): void;

    /**
     * hydrate
     * @param array<TreenodeDTOInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>> $dtos
     */
    public function hydrate(array $dtos): void;

    /**
     * @function deleteNode
     * @param non-negative-int $nodeId
     * @param bool $deleteBranchOK
     */
    public function deleteNode($nodeId, bool $deleteBranchOK = false): void;

    /**
     * @function getNodes
     * @return array<NodeType>
     */
    public function getNodes(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param non-negative-int|null $nodeId
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>|null
     */
    public function getNode(?int $nodeId): TreenodeAbstractInterface|null;

    /**
     * @function getRoot
     * @return   NodeType|null
     */
    public function getRoot(): ?TreenodeAbstractInterface;

    /**
     * rootTest
     * @phpcs ignore-next-line
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>|TreenodeDTOInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType> $nodeItem
     * @return bool
     */
    public function rootTest(TreenodeAbstractInterface|TreenodeDTOInterface $nodeItem): bool;

    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * initialize
     */
    public function initialize(): void;

    /**
     * @function nodeCount
     * @return non-negative-int
     */
    public function nodeCount(): int;
}
