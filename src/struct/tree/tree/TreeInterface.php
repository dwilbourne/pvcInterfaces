<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOFactoryInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOSorterInterface;
use pvc\interfaces\struct\tree\node\TreenodeFactoryInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreeInterface defines the operations common to all trees, both ordered and unordered.
 *
 * Trees have an id, allowing you to work with multiple trees at once.  Each tree consist of "nodes", and each node
 * can carry any sort of value you would like.  Because the structure is written using generics via phpstan, you
 * should consider using phpstan as part of the testing of your code in order to maintain type consistency throughout.
 * A tree can be empty (e.g. it has no nodes).  If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.
 *
 * @template PayloadType of HasPayloadInterface
 */
interface TreeInterface
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
     * @return TreenodeFactoryInterface<PayloadType>
     */
    public function getTreenodeFactory(): TreenodeFactoryInterface;

    /**
     * setTreenodeFactory
     * @phpcs:ignore
     * @param TreenodeFactoryInterface<PayloadType> $treenodeFactory
     */
    public function setTreenodeFactory(TreenodeFactoryInterface $treenodeFactory): void;

    /**
     * @param TreenodeDTOSorterInterface<PayloadType> $sorter
     * @return void
     */
    public function setDtoSorder(TreenodeDTOSorterInterface $sorter): void;

    /**
     * @return TreenodeDTOSorterInterface<PayloadType>
     */
    public function getDtoSorder(): TreenodeDTOSorterInterface;

    /**
     * addNode puts a node into the tree's list of nodes.
     *
     * @param TreenodeDTOFactoryInterface<PayloadType> $dto
     */
    public function addNode(TreenodeDTOFactoryInterface $dto): void;

    /**
     * hydrate
     * @param array<TreenodeDTOFactoryInterface<PayloadType>> $dtos
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
     * @return array<TreenodeInterface<PayloadType>>
     */
    public function getNodes(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param non-negative-int|null $nodeId
     * @return TreenodeInterface<PayloadType>|null
     */
    public function getNode(?int $nodeId): TreenodeInterface|null;

    /**
     * @function getRoot
     * @return   TreenodeInterface<PayloadType>|null
     */
    public function getRoot(): ?TreenodeInterface;

    /**
     * rootTest
     * @phpcs ignore-next-line
     * @param TreenodeInterface<PayloadType>|TreenodeDTOFactoryInterface<PayloadType> $nodeItem
     * @return bool
     */
    public function rootTest(TreenodeInterface|TreenodeDTOFactoryInterface $nodeItem): bool;

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
